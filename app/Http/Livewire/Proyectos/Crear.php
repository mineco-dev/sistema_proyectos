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
use App\Models\State;
use App\Models\Katun;
use Livewire\Component;
use SebastianBergmann\Environment\Console;

class Crear extends Component
{
    public $monto;
    public $contrapartida;
    public $montoTotal;
    public $name;


    
    public function updatedMonto(){
        $monto=str_replace(',','',$this->monto);
        $contrapartida=str_replace(',','',$this->contrapartida);
        
        (float)$this->montoTotal = number_format((float)$monto + (float)$contrapartida, 2, '.', ',');

    }

    public function updatedContrapartida(){
        $monto=str_replace(',','',$this->monto);
        $contrapartida=str_replace(',','',$this->contrapartida);
        
        (float)$this->montoTotal = number_format((float)$monto + (float)$contrapartida, 2, '.', ',');

    }

    public function formatMonto(){
        
        $monto_nuevo = $this->monto;
        $monto_nuevo = number_format($monto_nuevo, 2, '.', ',');
        $this->monto = $monto_nuevo;

    }

    
    public function formatContrapartida(){
        
        $monto_nuevo = $this->contrapartida;
        $monto_nuevo = number_format($monto_nuevo, 2, '.', ',');
        $this->contrapartida = $monto_nuevo;

    }

    public function formatMontoTotal(){
        
        $monto_nuevo = $this->montoTotal;
        //dd($monto_nuevo);
        $monto_nuevo = number_format($monto_nuevo, 2, '.', ',');
        $this->montoTotal = $monto_nuevo;

    }

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
            'estados' => State::all(),
            'katuns' => Katun::all()
        ]);
    }
}
