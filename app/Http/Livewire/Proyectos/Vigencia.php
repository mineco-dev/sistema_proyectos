<?php

namespace App\Http\Livewire\Proyectos;

use App\Models\Project;
use App\Models\Vigencia as VigenciaModel;
use Livewire\Component;

class Vigencia extends Component
{
    public Project $project;
    public VigenciaModel $vigencia;
    public $inicio;
    public $fin;
    public $proyectoId;

    protected $rules = [
        'vigencia.inicio' => 'required',
        'vigencia.fin' => 'required',
        'vigencia.project_id' => 'required'
    ];


    public function mount(Project $project){
        $this->project  = $project;

        if (VigenciaModel::where('project_id',$project->id)->first()) {
            $this->vigencia = VigenciaModel::where('project_id',$project->id)->firstOrFail();
        }else{
            $this->vigencia = new VigenciaModel();
        }
        $this->vigencia->project_id = $this->project->id;
    }
    
    public function render()
    {
        return view('livewire.proyectos.vigencia');
    }

    public function save(){
        $this->validate();

        $this->vigencia->save();

        session()->flash('status', 'Vigencia actualizada correctamente.');

        $this->redirect('/proyecto');
    }
}
