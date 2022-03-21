<?php

namespace App\Http\Livewire\Proyectos;

use App\Models\Contact;
use App\Models\ContactType;
use App\Models\Project;
use Livewire\Component;

class ContactList extends Component
{
    public Project $project;
    public $tipos_contacto;
    public $nombre_contacto;
    public $correo_contacto;
    public $telefono_contacto;
    public $tipo_contacto;

    public function mount(Project $project){
        $this->project = $project;
        $this->tipos_contacto = ContactType::all();
    }

    protected $rules = [
        'nombre_contacto' => 'required',
        'correo_contacto' => 'required|email',
        'telefono_contacto' => 'required',
        'tipo_contacto' => 'required',
    ];

    public function render()
    {
        $contacts = Contact::where('project_id',$this->project->id)->get();

        return view('livewire.proyectos.contact-list',[
            'contacts' => $contacts
        ]);
    }

    public function agregar(){
        //dd($this->nombre_contacto); 
        $this->validate();

        Contact::create([
            'project_id' => $this->project->id,
            'nombre' => $this->nombre_contacto,
            'email' => $this->correo_contacto,
            'telefono' => $this->correo_contacto,
            'contact_type_id' => $this->tipo_contacto
        ]);

        $this->reset(['nombre_contacto', 'correo_contacto','telefono_contacto','tipo_contacto']);
        

    }

    public function eliminar($id){
        //dd('hola');
        Contact::find($id)->delete();
    }
}
