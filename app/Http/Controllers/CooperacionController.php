<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Catalogos\Cooperacion;
use App\Models\Cooperation;
use Illuminate\Http\Request;

class CooperacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        Cooperation::create(['name' => $request->name]);


        return back()->with('status','Almacenado con éxito');
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
        
        return view('livewire.catalogos.cooperacion-edit',[
            'cooperacion' => Cooperation::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cooperation = Cooperation::find($id);
        try{
            $cooperation->update($request->all());
            //return back()->with('status','Actualizado con éxito.');
            return redirect('cat-cooperacion')->with('status','Actualizado con éxito.');
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
        Cooperation::find($id)->delete();

        return back()->with('status','Eliminado satisfactoriamente.');
    }
}
