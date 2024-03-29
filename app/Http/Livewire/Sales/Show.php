<?php

declare(strict_types=1);

namespace App\Http\Livewire\Sales;

use App\Models\Sale;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Show extends Component
{
    public $sale;

    public $listeners = [
        'showModal',
    ];

    public $showModal = false;

    public function showModal($id)
    {
        abort_if(Gate::denies('sale_show'), 403);

        $this->sale = Sale::findOrFail($id);

        $this->showModal = true;
    }

    public function render()
    {
        return view('livewire.sales.show');
    }
}
