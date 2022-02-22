<?php

namespace App\Http\Livewire\Config;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class EspacioDisco extends Component
{
    public $files;
    public $total;
    public $limite;
    public $disponible;
    public $porcentaje;
    public $style;
    
    public function mount(){
        $files = Storage::disk('public')->files('expedientes');
        $total=0;
        foreach($files as $file){
            $size = Storage::disk('public')->size($file);
            $tam_mb = $size/1048576;
            $tam_gb = $tam_mb/1024;
            $total = $total + $tam_gb;
        }
        $this->total=number_format($total, 2);
        $this->limite= 500;
        $this->disponible=$this->limite - $this->total;
        $this->porcentaje = ($this->total*100)/$this->limite;
        $this->style='50%';

    //dd($this->columnChartModel);

    }

    public function render()
    {
        $columnChartModel = 
        (new ColumnChartModel())
        ->setTitle('Expenses Peaks')
        ->addColumn('Food', 100, '#f6ad55')
        ->addColumn('Shopping', 200, '#fc8181')
        ->addColumn('Travel', 300, '#90cdf4')
    ;
    
        return view('livewire.config.espacio-disco')->with([
            'columnChartModel' => $columnChartModel
        ]);
    }
}
