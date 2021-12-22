<?php

namespace App\Http\Livewire\Proyectos;

use Livewire\Component;

class Crear extends Component
{
    public function render()
    {
        return view('livewire.proyectos.crear',[
            'items' => '1'
        ])->layout('layouts.base');
    }
}
