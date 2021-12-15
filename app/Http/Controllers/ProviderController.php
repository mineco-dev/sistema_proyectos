<?php

namespace App\Http\Controllers;

use App\Models\Provider;

use Illuminate\Http\Request;
use App\Http\Requests\ProviderCreateRequest;
use App\Http\Requests\ProviderUpdateRequest;
use Illuminate\Support\Facades\DB;

class ProviderController extends Controller
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
    public function store(ProviderCreateRequest $request)
    {
        $proveedor = Provider::create($request->all());

        return back()->with('status','Proveedor agregado exitosamente.');
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

        $provider = Provider::find($id);
        //dd($provider);

        return view('livewire.provider.edit',[
            'provider' => $provider
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProviderUpdateRequest $request, $id)
    {
        try{
            $provider = Provider::find($id)->update($request->all());
            //dd($request->all());
            //$provider->update($request->all());
            
            return redirect()->route('proveedores')->with('status','Actualizado con éxito.');

        } catch(\Exception $e){
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
        Provider::where('id',$id)->delete();
        return back()->with('status','Proveedor eliminado exitosamente.');
    }
}
