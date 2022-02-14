<?php

namespace App\Http\Livewire\Proyectos;

use App\Models\Cooperante;
use App\Models\Cooperation;
use App\Models\CooperationType;
use App\Models\Project;
use Livewire\Component;

class ProyectoShow extends Component
{
    public Project $project;
    public Cooperation $cooperacion;
    public CooperationType $cooperacionType;
    public Cooperante $cooperante;

    protected $rules = [
        'project.name' => '',
        'project.origen' => ''
    ];

    public function mount()
    {
        $this->cooperacion = $this->project->cooperation;
        $this->cooperacionType = $this->project->cooperationType;
        $this->cooperante = $this->project->cooperante;
    }


    public function render()
    {
        return view('livewire.proyectos.proyecto-show');
    }
}
