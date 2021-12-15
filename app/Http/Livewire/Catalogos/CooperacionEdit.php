<?php

namespace App\Http\Livewire\Catalogos;

use Livewire\Component;
use App\Models\Cooperation as CooperacionTable;

class CooperacionEdit extends Component
{

    public function render()
    {
        return view('livewire.catalogos.cooperacion-edit')->layout('layouts.base');
    }
}
