<?php

namespace App\Http\Controllers;

use App\Models\Dependency;
use Illuminate\Http\Request;

use App\Http\Requests\DependencyStoreRequest;

use function Ramsey\Uuid\v1;

class DependencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependencias = Dependency::latest()->paginate();
        return view('catalogos.dependencias',[
            'dependencias' => $dependencias
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
    public function store(DependencyStoreRequest $request)
    {
        $dependencia = Dependency::create($request->all());

        return back()->with('status','Almacenado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function show(Dependency $dependency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function edit(Dependency $dependency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dependency $dependency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dependencia = Dependency::find($id)->delete();

        return back()->with('status','Eliminado satisfactoriamente.');
    }
}
