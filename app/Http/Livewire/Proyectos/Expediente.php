<?php

namespace App\Http\Livewire\Proyectos;

use App\Models\Expediente as ModelsExpediente;
use Livewire\Component;
use App\Models\Project;
use League\Flysystem\MountManager;

class Expediente extends Component
{
    public Project $project;

    public $archivo;

    public function mount(){
        //$this->archivo = false;
        $this->archivo = ModelsExpediente::where('project_id',$this->project->id)->first();
        
    }

    public function render()
    {
        return view('livewire.proyectos.expediente');
    }
}
