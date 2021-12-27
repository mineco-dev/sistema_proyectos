<?php

namespace App\Http\Livewire\Proyectos;

use App\Http\Livewire\Catalogos\Cooperacion;
use App\Models\Cooperante;
use App\Models\Cooperation;
use App\Models\CooperationType;
use App\Models\FormalizationDocument;
use App\Models\Moneda;
use App\Models\Objetivo;
use App\Models\ResourceClassification;
use App\Models\Unit;
use Livewire\Component;

class Crear extends Component
{
    public function render()
    {
        return view('livewire.proyectos.crear',[
            'cooperations' => Cooperation::all(),
            'cooperationtypes' => CooperationType::all(),
            'cooperantes' => Cooperante::all(),
            'documentos_formalizacion' => FormalizationDocument::all(),
            'monedas' => Moneda::all(),
            'recursos' => ResourceClassification::all(),
            'objetivos' => Objetivo::all(),
            'unidades' => Unit::all(),
        ])->layout('layouts.base');
    }
}
