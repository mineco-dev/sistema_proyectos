<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Proyectos\Expediente;
use App\Models\Contact;
use App\Models\ContactType;
use App\Models\Expediente as ModelsExpediente;
use App\Models\Informe as ModelsInforme;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

/*         $proyectos = DB::table('projects')
            ->join('cooperations', 'projects.cooperation_id', '=', 'cooperations.id')
            ->join('cooperation_types', 'projects.cooperation_type_id', '=', 'cooperation_types.id')
            ->select('projects.*', 'cooperations.name as cooperation_name', 'cooperation_types.name as cooperation_type_name')
            ->get(); */

        return view('projects.index', [
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
        //dd($request->objetivo_id);
        $objetivos = json_encode($request->objetivo_id);
        $katuns = json_encode($request->katun_id);
        //$request->monto = str_replace(',','',$request->monto);
        //dd($request->monto);}
        $monto_total = str_replace(',', '', $request->monto) + str_replace(',', '', $request->contrapartida);
        $project = Project::create([
            'name' => $request->name,
            'cooperation_id' => $request->cooperation_id,
            'cooperation_type_id' => $request->cooperation_type_id,
            'origen' => $request->origen,
            'cooperante_id' => $request->cooperante_id,
            'formalization_document_id' => $request->formalization_document_id,
            'monto' => str_replace(',', '', $request->monto),
            'contrapartida' => str_replace(',', '', $request->contrapartida),
            'monto_total' => $monto_total,
            'moneda_id' => $request->moneda_id,
            'resource_classification_id' => $request->resource_classification_id,
            'objeto' => $request->objeto,
            'beneficiarios' => $request->beneficiarios,
            'resumen' => $request->resumen,
            'resultados' => $request->resultados,
            'objetivo_id' => $objetivos,
            'katun_id' => $katuns,
            'descripcion' => $request->descripcion,
            'observaciones' => $request->observaciones,
            'unit_id' => $request->unit_id,
            'unidad_beneficiada' => $request->unidad_beneficiada,
            'state_id' => $request->estado

        ]);

        $id_unidad = ContactType::where('name','Unidad Beneficiada')->first();
        Contact::create([
            'project_id' => $project->id,
            'nombre' => $request->nombre_contacto,
            'email' => $request->correo_contacto,
            'telefono' => $request->telefono_contacto,
            'contact_type_id' => $id_unidad->id ? $id_unidad->id : 1
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

    public function cargarExpediente(Request $request){

        //dd($request->ruta);
        $expediente = new ModelsExpediente();
        $expediente->project_id = $request->project_id;
        $expediente->nombre = $request->name;
        $expediente->ruta = $request->file('ruta')->store('expedientes','public');
        $expediente->save();

        return redirect(route('proyecto-expediente',$request->project_id))->with('status','Archivo cargado con éxito.');

    }

    public function eliminarExpediente($expediente){
        //dd($project);
        $expediente = ModelsExpediente::find($expediente);
        $expediente->delete();
        Storage::disk('public')->delete($expediente->ruta);
        return back()->with('status','Archivo pdf eliminado con éxito.');
    }

    public function cargarInforme(Request $request){

        //dd($request->ruta);
        $informe = new ModelsInforme();
        $informe->project_id = $request->project_id;
        $informe->nombre = $request->name;
        $informe->ruta = $request->file('ruta')->store('informes','public');
        $informe->save();

        return redirect(route('proyecto-informe',$request->project_id))->with('status','Archivo cargado con éxito.');

    }

    public function eliminarInforme($informe){
        //dd($project);
        $informe = ModelsInforme::find($informe);
        $informe->delete();
        Storage::disk('public')->delete($informe->ruta);
        return back()->with('status','Archivo pdf eliminado con éxito.');
    }
}
