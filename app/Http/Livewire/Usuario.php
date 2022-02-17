<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;

class Usuario extends Component
{
    public $usuarios;
    public $rol;
    public $roles;

    protected $rules = [
        'rol' => 'required'
    ];

    public function mount(){
        $this->usuarios = User::all();
        $this->roles =  Role::all();
    }

    public function render()
    {
        return view('livewire.usuario');
    }

    public function asignarRol(){
        dd($this->rol);
        $user = User::find($usuario);
        $user->assignRole('writer');
    }
}
