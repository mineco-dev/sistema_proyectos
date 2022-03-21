<?php

namespace App\Http\Livewire\Proyectos;

use App\Models\Contact;
use App\Models\Cooperante;
use App\Models\Cooperation;
use App\Models\CooperationType;
use App\Models\FormalizationDocument;
use App\Models\Project;
use Livewire\Component;

class ProyectoShow extends Component
{
    public Project $project;
    public Cooperation $cooperacion;
    public CooperationType $cooperacionType;
    public Cooperante $cooperante;
    public FormalizationDocument $documentFormalizacion;
    public Contact $contact;

    protected $rules = [
        'project.name' => '',
        'project.origen' => '',
        'project.monto' => '',
        'project.contrapartida' => '',
        'project.monto_total' => '',
        'project.objeto' => '',
        'project.beneficiarios' => ''
    ];

    public function mount()
    {
        $this->cooperacion = $this->project->cooperation;
        $this->cooperacionType = $this->project->cooperationType;
        $this->cooperante = $this->project->cooperante;
        $this->documentFormalizacion = $this->project->formalizationDocument;
        $this->contact = Contact::where('project_id',$this->project->id)->first();
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
        return view('livewire.proyectos.proyecto-show');
    }
}
