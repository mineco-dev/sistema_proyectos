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

    public function asignarRol($event,$id){
        //dd($id);
        $user = User::find($id);
        $user->syncRoles([]); //Elimina roles y luego setea los asignados, en este caso no se coloca ninguno, para dejarlo a 0
        $rol = Role::find($event);
        $user->assignRole($rol);
        
    }
}
