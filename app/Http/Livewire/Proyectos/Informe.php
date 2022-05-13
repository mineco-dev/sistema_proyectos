<?php

namespace App\Http\Livewire\Proyectos;

use Livewire\Component;
use App\Models\Project;
use App\Models\Informe as ModelsInforme;

class Informe extends Component
{
    public Project $project;

    public $archivos;

    public $rutaActual;

    public $mostrarFrame;

    public function mount(){
        $this->mostrarFrame = false;
        $this->archivos = ModelsInforme::where('project_id',$this->project->id)->get();
        //dd($this->archivos);
        
    }

    public function verArchivo($ruta){
        
        $this->rutaActual=$ruta;
        $this->mostrarFrame=true;

        
    }

    public function render()
    {
        return view('livewire.proyectos.informe');
    }
}
