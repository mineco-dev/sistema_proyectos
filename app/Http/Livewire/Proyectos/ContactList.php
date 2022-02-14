<?php

namespace App\Http\Livewire\Proyectos;

use App\Models\Contact;
use App\Models\Project;
use Livewire\Component;

class ContactList extends Component
{
    public Project $project;

    public function mount(Project $project){
        $this->project = $project;
    }

    public function render()
    {
        $contacts = Contact::where('project_id',$this->project->id)->get();

        return view('livewire.proyectos.contact-list',[
            'contacts' => $contacts
        ]);
    }
}
