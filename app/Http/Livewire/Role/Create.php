<?php

declare(strict_types=1);

namespace App\Http\Livewire\Role;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Create extends Component
{

     /** @var array<string> */
    public $listeners = ['createModal'];
    public $createModal = false;

    public $role;
    public $permissions;
    

    protected function rules(): array
    {
        return [
            'role.name'        => 'required|string|min:3|max:255',
            'role.label'       => 'string|nullable|max:255',
            'role.guard_name'  => 'required|string|max:255',
            'role.description' => 'string|nullable|max:255',
            'role.status'      => 'string|nullable|max:255',
        ];
    }

    public function createModal()
    {
        abort_if(Gate::denies('role_create'), 403);

        $this->resetErrorBag();

        $this->resetValidation();

        $this->role = new Role();

        $this->createModal = true;
        
    }

    public function create(): void
    {
        $this->validate();

        $this->role->save();

        $this->role->permissions()->sync($this->permissions);

        $this->createModal = false;

        $this->alert('success', __('Role created successfully.'));
    }

    public function getPermissionsProperty(): array
    {       
        return Permission::select('name', 'id')->get()->toArray();
    }

    public function render()
    {
        $this->permissions = (new Permission())->get();
        return view('livewire.role.create');
    }
}
