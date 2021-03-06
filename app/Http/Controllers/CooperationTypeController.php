<?php

namespace App\Http\Controllers;

use App\Models\CooperationType;
use Illuminate\Http\Request;

class CooperationTypeController extends Controller
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
        CooperationType::create(['name' => $request->name]);

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
        return view('livewire.catalogos.cooperation-type-edit',[
            'tipo_cooperacion' => CooperationType::find($id)
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
            $cooperationType = CooperationType::find($id);
            try{
                $cooperationType->update($request->all());
                //return back()->with('status','Actualizado con éxito.');
                return redirect('cat-tipo-cooperacion')->with('status','Actualizado con éxito.');
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
        CooperationType::find($id)->delete();

        return back()->with('status','Eliminado satisfactoriamente.');
    }
}
