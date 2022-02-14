<div>
    <div class="grid grid-cols-10">

        <div class="col-start-2 col-span-8">

                <label class="block m-2">
                    <span class="block text-gray-700 text-sm font-bold m-2">Nombre del proyecto</span>
                    <textarea wire:model.debounce.5ms="project.name" type="name" name="name" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" disabled placeholder="" required></textarea>
                </label>

                <div class="flex">

                    <div class="flex-1 m-2">
                        <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                            Cooperación {{ $cooperacion->name }}
                        </label>
                        <div class="relative">
                            <select  class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cooperacion" required name="cooperation_id" disabled>
                                <option hidden selected value="">{{ $cooperacion->name }}</option>
                            </select>
                            
                        </div>
                    </div>

                    <div class="flex-1 m-2">
                        <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                            Tipo Cooperación
                        </label>
                        <div class="relative">
                            <select class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="tipo_cooperacion" required name="cooperation_type_id" disabled>
                                <option hidden selected value="">{{ $cooperacionType->name }}</option>
                                

                            </select>
                        </div>
                    </div>

                </div>


                <label class="block m-2">
                    <span class="block text-gray-700 text-sm font-bold m-2">Origen de la Cooperación</span>
                    <input wire:model="project.origen" type="text" name="origen" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" disabled>
                </label>


                <div class="flex">
                    <div class="flex-1 m-2">
                        <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                            Nombre del Cooperante
                        </label>
                        <div class="relative">
                            <select class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nombre_cooperante" required name="cooperante_id" disabled>
                            <option hidden selected value="">{{ $cooperante->name }}</option>
                                
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
                                
                                <option value=""></option>
                                
                            </select>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="flex">

                    <label class="flex-1 m-2">
                        <span class="flex-1 text-gray-700 text-sm font-bold m-2">Monto Sin Contrapartida</span>
                        <input wire:model.debounce.500ms="monto" wire:keyup.debounce.1000ms="formatMonto" name="monto" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required min="0" >
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
                                
                                <option value=""></option>
                                

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
                                
                                <option value=""></option>
                                
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
                    <textarea type="text" name="resultados" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required></textarea>
                </label>

                <div class="flex">
                    <div class="flex-1 m-2">
                        <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                            ODS Vinculados
                        </label>
                        <div class="relative">
                            <select class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="ods" required name="objetivo_id" multiple>
                                
                                <option value=""></option>
                                
                            </select>
                        </div>
                    </div>

                    <label class="flex-1 m-2">
                        <span class="flex-1 text-gray-700 text-sm font-bold m-2">Vinculación con el K'atun</span>
                        <input value="{{ old('vinculacion') }}" type="text" name="vinculacion" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required>
                    </label>
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
                                
                                <option value=""></option>
                                
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
                                
                                <option value=""></option>
                               
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
                
            
        </div>



    </div>
</div>
