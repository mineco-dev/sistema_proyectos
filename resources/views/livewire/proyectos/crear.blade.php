@extends('layouts.web')

@section('content')
<div>
    <div class="grid grid-cols-10">
        
        <div  class="col-start-2 col-span-8">
            <form action="{{ route('proyecto.store') }}" class=" p-8 shadow-md rounded-md text-left" method="POST">
                @csrf
            <div class="flex">
                <label class="flex-1 m-2">
                    <span class="flex-1 text-gray-700 text-sm font-bold m-2">Nombre del proyecto</span>
                    <input value="{{ old('name') }}" type="text" name="name" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  placeholder="" required>
                </label>

                <div class="flex-1 m-2">
                    <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                        Cooperación
                    </label>
                    <div class="relative">
                        <select class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cooperacion" required name="cooperation_id">
                            <option hidden selected value="">Selecciona una cooperación</option>
                            @foreach($cooperations as $cooperation)
                                <option value="{{ $cooperation->id }}">{{ $cooperation->name }}</option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>

                <div class="flex-1 m-2">
                    <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                        Tipo Cooperación
                    </label>
                    <div class="relative">
                        <select class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="tipo_cooperacion" required name="cooperation_type_id">
                            <option hidden selected value="">Selecciona un tipo de cooperación</option>
                            @foreach($cooperationtypes as $cooperationtype)
                                <option value="{{ $cooperationtype->id }}">{{ $cooperationtype->name }}</option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>

            </div>


            <label class="block m-2">
                <span class="block text-gray-700 text-sm font-bold m-2">Origen de la Cooperación</span>
                <input value="{{ old('origen') }}" type="text" name="origen" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required>
            </label>

            
            <div class="flex">
                <div class="flex-1 m-2">
                    <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                        Nombre del Cooperante
                    </label>
                    <div class="relative">
                        <select class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nombre_cooperante" required name="cooperante_id">
                            <option hidden selected value="">Selecciona un cooperante</option>
                            @foreach($cooperantes as $cooperante)
                                <option value="{{ $cooperante->id }}">{{ $cooperante->name }}</option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                
                <div class="flex-1 m-2">
                    <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                        Documento de Formalización
                    </label>
                    <div class="relative">
                        <select class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="documento_formalizacion" required name="formalization_document_id">
                            <option hidden selected value="">Selecciona un documento de Formalización</option>
                            @foreach($documentos_formalizacion as $documento)
                                <option value="{{ $documento->id }}">{{ $documento->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <label class="flex-1 m-2">
                    <span class="flex-1 text-gray-700 text-sm font-bold m-2">Monto</span>
                    <input value="{{ old('monto') }}" type="number" name="monto" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Debe contener 2 decimales, Ej. 555.55" required min="0" value="0" step="0.55">
                </label>
            </div>


            <div class="flex">
                <div class="flex-1 m-2">
                    <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                        Moneda
                    </label>
                    <div class="relative">
                        <select class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="moneda" required name="moneda_id">
                            <option hidden selected value="">Selecciona una moneda</option>
                            @foreach($monedas as $moneda)
                                <option value="{{ $moneda->id }}">{{ $moneda->name }}</option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>

                <label class="flex-1 m-2">
                    <span class="flex-1 text-gray-700 text-sm font-bold m-2">Contrapartida MINECO</span>
                    <input value="{{ old('contrapartida') }}" type="number" name="contrapartida" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required>
                </label>

                <div class="flex-1 m-2">
                    <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                        Clasificación de los recursos
                    </label>
                    <div class="relative">
                        <select class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="clasificacion" required name="resource_classification_id">
                            <option hidden selected value="">Selecciona un recurso</option>
                            @foreach($recursos as $recurso)
                                <option value="{{ $recurso->id }}">{{ $recurso->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>   
            
            <div class="flex">
                <label class="flex-1 m-2">
                    <span class="flex-1  text-gray-700 text-sm font-bold m-2">Objeto de la Cooperación</span>
                    <input value="{{ old('objeto') }}" type="text" name="objeto" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required>
                </label>
                
                <label class="flex-1 m-2">
                    <span class="flex-1 text-gray-700 text-sm font-bold m-2">Beneficiarios</span>
                    <input value="{{ old('beneficiarios') }}" type="text" name="beneficiarios" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required>
                </label>
            </div>
                
            <label class="block m-2">
                <span class="block text-gray-700 text-sm font-bold m-2">Breve resumen de proyecto</span>
                <textarea type="text" name="resumen" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required></textarea>
            </label>

            <label class="block m-2">
                <span class="block text-gray-700 text-sm font-bold m-2">Resultados Esperados</span>
                <input value="{{ old('resultados') }}" type="text" name="resultados" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required>
            </label>

            <div class="flex">
                <div class="flex-1 m-2">
                    <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                        ODS Vinculados
                    </label>
                    <div class="relative">
                        <select class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="ods" required name="objetivo_id">
                            <option hidden selected value="">Selecciona un recurso</option>
                            @foreach($objetivos as $objetivo)
                                <option value="{{ $objetivo->id }}">{{ $objetivo->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <label class="flex-1 m-2">
                    <span class="flex-1 text-gray-700 text-sm font-bold m-2">Vinculación con el K'atun</span>
                    <input value="{{ old('vinculacion') }}" type="text" name="vinculacion" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required>
                </label>
            </div>



            <label class="block m-2">
                <span class="block text-gray-700 text-sm font-bold m-2">Observaciones adicionales</span>
                <textarea type="text" name="observaciones" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required></textarea>
            </label>

            <div class="flex">
                <div class="flex-1 m-2">
                    <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                        Unidad Ejecutora
                    </label>
                    <div class="relative">
                        <select class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="unidad_ejecutora" required name="unit_id">
                            <option hidden selected value="">Selecciona una unidad ejecutora</option>
                            @foreach($unidades as $unidad)
                                <option value="{{ $unidad->id }}">{{ $unidad->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <label class="flex-1 m-2">
                    <span class="flex-1 text-gray-700 text-sm font-bold m-2">Nombre de la Unidad Beneficiada</span>
                    <input value="{{ old('unidad_beneficiada') }}" type="text" name="unidad_beneficiada" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required>
                </label>
            </div>




            


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