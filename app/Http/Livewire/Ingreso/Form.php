<?php

namespace App\Http\Livewire\Ingreso;

use App\Models\Bodega;
use App\Models\Dependency;
use Livewire\Component;

class Form extends Component
{
    public function render()
    {
        $dependencias = Dependency::latest()->get();
        $bodegas = Bodega::latest()->get();
        return view('livewire.ingreso.form',[
            'dependencias' => $dependencias,
            'bodegas' => $bodegas
        ]);
    }
}
