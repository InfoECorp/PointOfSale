<?php

declare(strict_types=1);

namespace App\Http\Livewire\Purchase;

use App\Enums\PaymentStatus;
use App\Http\Livewire\WithSorting;
use App\Models\Purchase;
use App\Models\PurchasePayment;
use App\Traits\Datatable;
use Illuminate\Support\Facades\Gate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Throwable;

class Index extends Component
{
    use WithPagination;
    use WithSorting;
    use WithFileUploads;
    use LivewireAlert;
    use Datatable;

    public $purchase;

    /** @var array<string> */
    public $listeners = [
        'showModal', 'paymentModal',
        'refreshIndex' => '$refresh',
        'delete',
    ];

    public $startDate;
    public $endDate;

    public $showModal = false;

    public $paymentModal = false;

    public $purchase_id;
    public $date;
    public $reference;
    public $amount;
    public $payment_method;

    /** @var array<array<string>> */
    protected $queryString = [
        'search' => [
            'except' => '',
        ],
        'sortBy' => [
            'except' => 'id',
        ],
        'sortDirection' => [
            'except' => 'desc',
        ],
    ];

    /** @var array */
    protected $rules = [
        'supplier_id'         => 'required|numeric',
        'reference'           => 'required|string|max:255',
        'tax_percentage'      => 'required|integer|min:0|max:100',
        'discount_percentage' => 'required|integer|min:0|max:100',
        'shipping_amount'     => 'required|numeric',
        'total_amount'        => 'required|numeric',
        'paid_amount'         => 'required|numeric',
        'status'              => 'required|integer|max:255',
        'payment_method'      => 'required|integer|max:255',
        'note'                => 'nullable|string|max:1000',
    ];

    public function updatedStartDate($value)
    {
        $this->startDate = $value;
    }

    public function updatedEndDate($value)
    {
        $this->endDate = $value;
    }

    public function filterByType($type)
    {
        switch ($type) {
            case 'day':
                $this->startDate = now()->startOfDay()->format('Y-m-d');
                $this->endDate = now()->endOfDay()->format('Y-m-d');
                break;
            case 'month':
                $this->startDate = now()->startOfMonth()->format('Y-m-d');
                $this->endDate = now()->endOfMonth()->format('Y-m-d');
                break;
            case 'year':
                $this->startDate = now()->startOfYear()->format('Y-m-d');
                $this->endDate = now()->endOfYear()->format('Y-m-d');
                break;
        }
    }

    public function mount(): void
    {
        $this->selectPage = false;
        $this->sortBy = 'id';
        $this->sortDirection = 'desc';
        $this->perPage = 25;
        $this->paginationOptions = config('project.pagination.options');
        $this->orderable = (new Purchase())->orderable;
        $this->startDate = now()->startOfYear()->format('Y-m-d');
        $this->endDate = now()->endOfDay()->format('Y-m-d');
    }

    public function render()
    {
        $query = Purchase::with(['supplier', 'purchaseDetails', 'purchaseDetails.product'])
            ->whereBetween('date', [$this->startDate, $this->endDate])
            ->advancedFilter([
                's'               => $this->search ?: null,
                'order_column'    => $this->sortBy,
                'order_direction' => $this->sortDirection,
            ]);

        $purchases = $query->paginate($this->perPage);

        return view('livewire.purchase.index', compact('purchases'));
    }

    public function showModal(Purchase $purchase): void
    {
        abort_if(Gate::denies('purchase_access'), 403);

        $this->resetErrorBag();

        $this->resetValidation();

        $this->purchase = Purchase::find($purchase->id);

        $this->showModal = true;
    }

    public function deleteSelected(): void
    {
        abort_if(Gate::denies('purchase_delete'), 403);

        Purchase::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(Purchase $purchase): void
    {
        abort_if(Gate::denies('purchase_delete'), 403);

        $purchase->delete();
    }

    //  Payment modal

    public function paymentModal(Purchase $purchase): void
    {
        abort_if(Gate::denies('purchase_payment'), 403);

        $this->resetErrorBag();

        $this->resetValidation();

        $this->purchase = $purchase;
        $this->date = date('Y-m-d');
        $this->amount = $purchase->due_amount;
        $this->payment_method = 'Cash';
        $this->purchase_id = $purchase->id;
        $this->paymentModal = true;
    }

    public function paymentSave(): void
    {
        try {
            $this->validate(
                [
                    'date'           => 'required|date',
                    'amount'         => 'required|numeric',
                    'payment_method' => 'required|string|max:255',
                ]
            );

            $purchase = Purchase::find($this->purchase_id);

            PurchasePayment::create([
                'date'           => $this->date,
                'user_id'        => Auth::user()->id,
                'amount'         => $this->amount,
                'note'           => $this->note ?? null,
                'purchase_id'    => $this->purchase_id,
                'payment_method' => $this->payment_method,
            ]);

            $purchase = Purchase::findOrFail($this->purchase_id);

            $due_amount = $purchase->due_amount - $this->amount;

            if ($due_amount === $purchase->total_amount) {
                $payment_status = PaymentStatus::DUE;
            } elseif ($due_amount > 0) {
                $payment_status = PaymentStatus::PARTIAL;
            } else {
                $payment_status = PaymentStatus::PAID;
            }

            $purchase->update([
                'paid_amount'    => ($purchase->paid_amount + $this->amount) * 100,
                'due_amount'     => $due_amount * 100,
                'payment_status' => $payment_status,
            ]);

            $this->alert('success', __('Payment created successfully.'));

            $this->paymentModal = false;

            $this->emit('refreshIndex');
        } catch (Throwable $th) {
            $this->alert('error', 'Error'.$th->getMessage());
        }
    }
}
