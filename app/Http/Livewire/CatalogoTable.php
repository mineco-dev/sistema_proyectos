<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CatalogoTable extends Component
{
    public function render()
    {
        return view('livewire.catalogo-table',[
            'categorias' => Category::latest()->get()
        ]);
    }
}
