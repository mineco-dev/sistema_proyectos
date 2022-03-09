<?php

namespace App\Http\Livewire\Proyectos;

use App\Models\Expediente as ModelsExpediente;
use Livewire\Component;
use App\Models\Project;
use League\Flysystem\MountManager;

class Expediente extends Component
{
    public Project $project;

    public $archivos;

    public $rutaActual;

    public $mostrarFrame;

    public function mount(){
        $this->mostrarFrame = false;
        $this->archivos = ModelsExpediente::where('project_id',$this->project->id)->get();
        //dd($this->archivos);
        
    }

    public function verArchivo($ruta){
        
        $this->rutaActual=$ruta;
        $this->mostrarFrame=true;

        
    }

    public function render()
    {
        return view('livewire.proyectos.expediente');
    }
}
