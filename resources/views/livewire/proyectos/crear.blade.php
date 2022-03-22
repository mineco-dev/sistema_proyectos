<div>
    <div class="grid grid-cols-10">

        <div class="col-start-2 col-span-8">
            <form action="{{ route('proyecto.store') }}" class=" p-8 shadow-md rounded-md text-left" method="POST">
                @csrf
                <label class="block m-2">
                    <span class="block text-gray-700 text-sm font-bold m-2">Nombre del proyecto</span>
                    <textarea wire:model.debounce.5ms="name" type="name" name="name" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required></textarea>
                </label>

                <div class="flex">

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
                    <textarea type="text" name="origen" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required></textarea>
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
                </div>

                <hr>

                <div class="flex">

                    <label class="flex-1 m-2">
                        <span class="flex-1 text-gray-700 text-sm font-bold m-2">Monto Sin Contrapartida</span>
                        <input wire:model.debounce.500ms="monto" wire:keyup.debounce.1000ms="formatMonto" name="monto" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required min="0">
                    </label>


                    <label class="flex-1 m-2">
                        <span class="flex-1 text-gray-700 text-sm font-bold m-2">Contrapartida MINECO</span>
                        <input wire:model.debounce.500ms="contrapartida" wire:keyup.debounce.1000ms="formatContrapartida" name="contrapartida" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required>
                    </label>

                    <label class="flex-1 m-2">
                        <span class="flex-1 text-gray-700 text-sm font-bold m-2">Monto Total</span>
                        <input wire:model.debounce.500ms="montoTotal" name="monto_total" wire:keyup.debounce.100ms="formatMontoTotal" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 " required disabled>
                    </label>

                </div>

                <hr>


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
                        <textarea type="text" name="objeto" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required></textarea>
                    </label>

                    <label class="flex-1 m-2">
                        <span class="flex-1 text-gray-700 text-sm font-bold m-2">Beneficiarios</span>
                        <textarea type="text" name="beneficiarios" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required></textarea>
                    </label>
                </div>

                <label class="block m-2">
                    <span class="block text-gray-700 text-sm font-bold m-2">Breve resumen de proyecto</span>
                    <textarea type="text" name="resumen" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required></textarea>
                </label>

                <label class="block m-2">
                    <span class="block text-gray-700 text-sm font-bold m-2">Resultados Esperados</span>
                    <textarea type="text" name="resultados" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required></textarea>
                </label>

                <div class="flex">
                    <div class="flex-1 m-2">
                        <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                            ODS Vinculados
                        </label>
                        <div class="relative">
                            <div class="flex justify-center">
                                <div class="form-check">
                                    @foreach($objetivos as $objetivo)
                                    <input name="objetivo_id[]" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="{{ $objetivo->id }}" id="flexCheckDefault{{ $objetivo->id }}">
                                    <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault{{ $objetivo->id }}">
                                        {{ $objetivo->name }}
                                    </label>
                                    <br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-1 m-2">
                        <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                            Vinculación K'atun
                        </label>
                        <div class="relative">
                            <div class="flex justify-center">
                                <div class="form-check">
                                    @foreach($katuns as $katun)
                                    <input name="katun_id[]" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="{{ $katun->id }}" id="flexCheck{{ $katun->id }}">
                                    <label class="form-check-label inline-block text-gray-800" for="flexCheck{{ $katun->id }}">
                                        {{ $katun->name }}
                                    </label>
                                    <br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <label class="block m-2">
                    <span class="block text-gray-700 text-sm font-bold m-2">Descripción</span>
                    <textarea type="text" name="descripcion" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required></textarea>
                </label>

                <label class="block m-2">
                    <span class="block text-gray-700 text-sm font-bold m-2">Observaciones adicionales</span>
                    <textarea type="text" name="observaciones" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required></textarea>
                </label>

                <div class="flex">
                    <div class="flex-1 m-2">
                        <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                            Unidad Ejecutora Responsable
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
                        <textarea type="text" name="unidad_beneficiada" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required></textarea>
                    </label>
                </div>
                <h5>Contacto - Unidad Beneficiada</h5>
                <hr>

                <div class="flex">
                    <label class="flex-1 m-2">
                        <span class="flex-1  text-gray-700 text-sm font-bold m-2">Nombre</span>
                        <input value="{{ old('nombre_contacto') }}" type="text" name="nombre_contacto" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required>
                    </label>

                    <label class="flex-1 m-2">
                        <span class="flex-1 text-gray-700 text-sm font-bold m-2">Correo Electrónico</span>
                        <input value="{{ old('correo_contacto') }}" type="email" name="correo_contacto" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required>
                    </label>

                    <label class="flex-1 m-2">
                        <span class="flex-1 text-gray-700 text-sm font-bold m-2">Teléfono</span>
                        <input value="{{ old('telefono_contacto') }}" type="text" name="telefono_contacto" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" pattern="[0-9]+" required>
                    </label>
                </div>
                <hr>

                <div class="flex">
                    <div class="flex-1 m-2">
                        <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                            Estado
                        </label>
                        <div class="relative">
                            <select class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="estado" required name="estado">
                                <option hidden selected value="">Selecciona un estado</option>
                                @foreach($estados as $estado)
                                <option value="{{ $estado->id }}">{{ $estado->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
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