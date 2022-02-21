<?php

namespace App\Http\Livewire\Config;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class EspacioDisco extends Component
{
    public $files;
    public $total;
    public $columnChartModel;

    
    public function mount(){
        $files = Storage::disk('public')->files('expedientes');
        $total=0;
        foreach($files as $file){
            $size = Storage::disk('public')->size($file);
            $tam_mb = $size/1048576;
            $total = $total + $tam_mb;
        }
        $this->total=$total;

    }

    public function render()
    {
        return view('livewire.config.espacio-disco');
    }
}
