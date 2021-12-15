<?php

namespace App\Http\Livewire\Ingreso;

use App\Models\Ingreso;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $ingresos = Ingreso::latest()->paginate(10);
        return view('livewire.ingreso.index',[
            'ingresos' => $ingresos
        ]);
    }
}
