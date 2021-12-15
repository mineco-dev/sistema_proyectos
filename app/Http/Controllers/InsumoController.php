<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Insumo;
use App\Models\presentation;
use Illuminate\Http\Request;
use App\Http\Requests\InsumoRequest;
use App\Http\Requests\InsumoUpdateRequest;
use App\View\Components\subcategoria;
use Illuminate\Support\Facades\DB;

class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insumos = Insumo::latest()->paginate(15);
        $categorias = Category::get();
        $presentaciones = Presentation::get();

        return view('catalogos.insumos', [
            'insumos' => $insumos,
            'categorias' => $categorias,
            'presentaciones' => $presentaciones
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsumoRequest $request)
    {
        $insumos = Insumo::create($request->all());

        return back()->with('status', 'Almacenado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$insumo = Insumo::where('id',$id)->first();

        $insumo = DB::table('insumos')
        ->join('subcategories', 'insumos.subcategory_id', '=', 'subcategories.id')
        ->join('presentations', 'insumos.presentation_id', '=', 'presentations.id')
        ->select('insumos.*', 'subcategories.nombre as name_subcategory', 'presentations.nombre as name_presentation')
        ->where('insumos.id','=',$id)
        ->first();
        $subcategoria=Insumo::find($id)->subcategory;
        $cat=Subcategory::find($subcategoria->id)->category;
        $categorias = Category::get();
        $subcategorias = Subcategory::get();
        $presentaciones = presentation::get();
        return view('edit.insumos',[
            'insumo'=>$insumo,
            'cat'=>$cat,
            'categorias' => $categorias,
            'presentaciones' =>$presentaciones,
            'subcategoria' => $subcategoria,
            'subcategorias' => $subcategorias

        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InsumoUpdateRequest $request, Insumo $insumo)
    {
        try{
            $insumo->update($request->all());
            //return back()->with('status','Actualizado con éxito.');
            return redirect('insumos')->with('status','Actualizado con éxito.');
        } catch (\Exception $e){
            return back()->with('status',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Insumo::where('id', $id)->delete();
            return back()->with('status', 'Eliminado con éxito');
        } catch (\Exception $e) {

            return back()->with('status', 'No se puede eliminar ya que este registro está siendo utilizado por otra tabla.');
        }
    }
}
