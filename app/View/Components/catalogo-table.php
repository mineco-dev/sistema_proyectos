<?php

namespace App\View\Components;

use Illuminate\View\Component;

class catalogo-table extends Component
{
    public $categorias;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categorias)
    {
        $this->caterogias=$categorias;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.catalogo-table');
    }
}
