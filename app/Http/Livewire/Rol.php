<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Rol extends Component
{
    public $roles;
    public $rol;
    public $verPermisos;
    public $permisosAsignados;
    public $permisos;
    public array $checkeados;

    protected $rules = [
        'rol' => 'required',
        'checkeados' => ''
    ];

    public function mount(){
        $this->roles = Role::all();

        $setOfIds = Role::pluck('id')->toArray();
        $this->checkeados = array_fill_keys($setOfIds, [
            'checked' => true
        ]);
        dd($this->checkeados);
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
        //OBTENER IDS
        $this->verPermisos = true;
        $role = Role::find($idRol);
        $this->permisos = Permission::all();
        $this->permisosAsignados = $role->permissions;
    }
}
