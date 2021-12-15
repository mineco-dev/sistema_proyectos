<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use Illuminate\Http\Request;
use App\Http\Requests\IngresoStoreRequest;
use Prophecy\Promise\ReturnPromise;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('frontend.ingreso.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IngresoStoreRequest $request)
    {
        $ingreso = Ingreso::create($request->all());

        return redirect()->route('ingreso.index')->with('status','Almacenado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(Ingreso $ingreso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingreso $ingreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingreso $ingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingreso $ingreso)
    {
        //
    }

    public function productos($no_ingreso)
    {
        //Aquí van los productos
    }
}
