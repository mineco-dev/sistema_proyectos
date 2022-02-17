<?php

namespace App\Http\Livewire\Proyectos;

use App\Models\User;
use Livewire\Component;

class Usuario extends Component
{
    public $usuarios;

    public function mount(){
        $this->usuarios = User::all();
    }

    public function render()
    {
        return view('livewire.proyectos.usuario');
    }
}
