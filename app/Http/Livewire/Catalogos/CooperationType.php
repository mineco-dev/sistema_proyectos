<?php

namespace App\Http\Livewire\Catalogos;

use Livewire\Component;
use App\Models\CooperationType as CooperacionTypeTable;

class CooperationType extends Component
{
    public function render()
    {
        return view('livewire.catalogos.cooperation-type',[
            'items' => CooperacionTypeTable::all()
        ])->layout('layouts.base');
    }
}
