<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Permiso extends Component
{
    public $permisos;

    public function mount(){
        $this->permisos = Permission::all();
    }

    public function render()
    {
        return view('livewire.permiso');
    }
}
