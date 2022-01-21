<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Project::all();

        $proyectos = DB::table('projects')
            ->join('cooperations', 'projects.cooperation_id', '=', 'cooperations.id')
            ->join('cooperation_types', 'projects.cooperation_type_id', '=', 'cooperation_types.id')
            ->select('projects.*', 'cooperations.name as cooperation_name', 'cooperation_types.name as cooperation_type_name')
            ->get();

        return view('projects.index',[
            'proyectos' => $proyectos
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
    public function store(Request $request)
    {
        
        $request->monto = str_replace(',','',$request->monto);
        //dd($request->monto);
        Project::create([
            'name' => $request->name,
            'cooperation_id' => $request->cooperation_id,
            'cooperation_type_id' => $request->cooperation_type_id,
            'origen' => $request->origen,
            'cooperante_id' => $request->cooperante_id,
            'formalization_document_id' => $request->formalization_document_id,
            'monto' => str_replace(',','',$request->monto),
            'contrapartida' => str_replace(',','',$request->contrapartida),
            'monto_total' => str_replace(',','',$request->monto_total),
            'moneda_id' => $request->moneda_id
        ]);

        return redirect('proyecto')->with('status', 'Almacenado con éxito');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
