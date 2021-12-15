<?php

namespace App\Http\Livewire\Provider;

use Livewire\Component;
use App\Models\Provider;

class Index extends Component
{
    public function render()
    {
        return view('livewire.provider.index',[
            'providers' => Provider::latest()->paginate(15)
        ]);
    }
}
