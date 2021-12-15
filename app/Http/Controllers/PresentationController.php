<?php

namespace App\Http\Controllers;

use App\Models\presentation;
use Illuminate\Http\Request;
use App\Http\Requests\PresentationRequest;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presentaciones = Presentation::latest()->paginate(15);
        return view('catalogos.presentaciones',[
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
    public function store(PresentationRequest $request)
    {
        $presentacion = Presentation::create($request->all());

        return back()->with('status','Agregado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function show(presentation $presentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function edit(presentation $presentation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, presentation $presentation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
        Presentation::where('id',$id)->delete();

        return back()->with('status','Eliminado con éxito');
        }
        catch (\Exception $e){
            //return response()->json($e->getMessage(), 500);
            return back()->with('status','No se puede eliminar ya que este registro está siendo utilizado por otra tabla.');
        }
    }
}
