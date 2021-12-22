@extends('layouts.web')

@section('content')
<div>
    <div class="grid grid-cols-3">
        <div class="col-start-1 col-span-2">1</div>
        <div class="col-start-2 col-end-3">2</div>
        <div  class="col-start-4">
        <form action="" class="p-8 shadow-md rounded-md text-left" method="POST">
            @csrf
            <label class="block mb-2">
                <span class="block text-gray-700 text-sm font-bold mb-2">Nombre del proyecto</span>
                <input value="{{ old('nombre') }}" type="text" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
            </label>

            <div class="block mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                    Cooperación
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cooperacion" required name="cooperacion_id">
                        <option></option>
                        
                            <option value="">Cooperación 1</option>
                        
                    </select>
                </div>
            </div>

            <div class="block mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                    Tipo Cooperación
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="tipo_cooperacion" required name="tipo_cooperacion_id">
                        <option></option>
                        
                            <option value="">Tipo Cooperación 1</option>
                        
                    </select>
                </div>
            </div>

            <label class="block mb-2">
                <span class="block text-gray-700 text-sm font-bold mb-2">Origen de la Cooperación</span>
                <input value="{{ old('origen_cooperacion') }}" type="text" name="origen_cooperacion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
            </label>

            <div class="block mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                    Nombre del Cooperante
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nombre_cooperante" required name="nombre_cooperante">
                        <option></option>
                        
                            <option value="">Cooperante 1</option>
                        
                    </select>
                </div>
            </div>

            <div class="block mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                    Documento de Formalización
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="documento_formalizacion" required name="documento_formalizacion">
                        <option></option>
                        
                            <option value="">Cooperante 1</option>
                        
                    </select>
                </div>
            </div>

            <label class="block mb-2">
                <span class="block text-gray-700 text-sm font-bold mb-2">Monto</span>
                <input value="{{ old('monto') }}" type="number" name="monto" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
            </label>

            <div class="block mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                    Moneda
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="moneda" required name="moneda_id">
                        <option></option>
                        
                            <option value="">Moneda 1</option>
                        
                    </select>
                </div>
            </div>

            <label class="block mb-2">
                <span class="block text-gray-700 text-sm font-bold mb-2">Contrapartida MINECO</span>
                <input value="{{ old('contrapartida') }}" type="number" name="contrapartida" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
            </label>

            <div class="block mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                    Clasificación de los recursos
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="clasificacion" required name="clasificacion_id">
                        <option></option>
                        
                            <option value="">Clasificación 1</option>
                        
                    </select>
                </div>
            </div>

            <label class="block mb-2">
                <span class="block text-gray-700 text-sm font-bold mb-2">Objeto de la Cooperación</span>
                <input value="{{ old('objeto_cooperacion') }}" type="text" name="objeto_cooperacion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
            </label>

            <label class="block mb-2">
                <span class="block text-gray-700 text-sm font-bold mb-2">Beneficiarios</span>
                <input value="{{ old('beneficiario') }}" type="text" name="beneficiario" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
            </label>

            <label class="block mb-2">
                <span class="block text-gray-700 text-sm font-bold mb-2">Breve resumen de proyecto</span>
                <textarea type="text" name="resumen" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required></textarea>
            </label>

            <label class="block mb-2">
                <span class="block text-gray-700 text-sm font-bold mb-2">Resultados Esperados</span>
                <input value="{{ old('resultados') }}" type="text" name="resultados" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
            </label>

            <div class="block mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                    ODS Vinculados
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="ods" required name="ods_id">
                        <option></option>
                        
                            <option value="">ODS 1</option>
                        
                    </select>
                </div>
            </div>
            
            <label class="block mb-2">
                <span class="block text-gray-700 text-sm font-bold mb-2">Vinculación con el K'atun</span>
                <input value="{{ old('vinculacion_k') }}" type="text" name="vinculacion_k" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
            </label>

            <label class="block mb-2">
                <span class="block text-gray-700 text-sm font-bold mb-2">Observaciones adicionales</span>
                <textarea type="text" name="observaciones" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required></textarea>
            </label>

            <div class="block mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                    Unidad Ejecutora
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="unidad_ejecutora" required name="unidad_ejecutora">
                        <option></option>
                        
                            <option value="">Unidad Ejecutora 1</option>
                        
                    </select>
                </div>
            </div>
            
            <label class="block mb-2">
                <span class="block text-gray-700 text-sm font-bold mb-2">Nombre de la Unidad Beneficiada</span>
                <input value="{{ old('unidad_beneficiada') }}" type="text" name="unidad_beneficiada" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
            </label>




            


            @if ($errors->any())
            <div class="text-red-500 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2" value="Crear">
        </form>
        </div>



    </div>
</div>
@endsection