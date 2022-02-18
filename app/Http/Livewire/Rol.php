<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class Rol extends Component
{
    public $roles;
    public $rol;
    public $verPermisos;
    public $permisos;

    protected $rules = [
        'rol' => 'required'
    ];

    public function mount(){
        $this->roles = Role::all();
    }

    public function render()
    {
        return view('livewire.rol');
    }

    public function agregar(){
        Role::create(['name' => $this->rol]);

        return redirect(route('roles'))->with('status','Agregado con éxito.');
        
    }

    public function eliminarRol($rol){
        //dd($rol);
        Role::find($rol)->delete();

        return redirect(route('roles'))->with('status','Eliminado Correctamente');
    }

    public function verPermiso($idRol){
        $this->verPermisos = true;
        $role = Role::find($idRol);
        $this->permisos = $role->permissions;
    }
}
