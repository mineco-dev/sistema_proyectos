<?php

namespace App\Http\Controllers\Catalogos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class CatalogoController extends Controller
{
    public function categorias()
    {
        return view('catalogos.categorias',[
            'categorias' => Category::latest()->paginate(15)
        ]);
    }

    public function subcategorias($id)
    {
        $categoria = Category::findOrFail($id);


        return view('catalogos.subcategorias',[
            'subcategorias' => $categoria->subcategorias()->paginate(5),
            'categoria' => $categoria
        ]);
    }

    public function subcategoriasApi($id)
    {
        $categoria = Category::findOrFail($id)->subcategorias()->get();

        return response()->json($categoria);
    }
}
