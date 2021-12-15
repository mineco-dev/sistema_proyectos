<?php

namespace App\Http\Livewire\Catalogos;

use Livewire\Component;
use App\Models\Cooperation as CooperacionTable;

class Cooperacion extends Component
{
    public $h1 ='Catálogo de Cooperación';

    public function render()
    {
        return view('livewire.catalogos.cooperacion',[
            'items' => CooperacionTable::all()
        ])->layout('layouts.base');
    }
}
