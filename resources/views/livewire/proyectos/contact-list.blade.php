<div>
        <div class="grid grid-cols-10">
            <div class="col-start-2 col-span-8">
                <div class="flex m-3">
                    
                    <label class=" border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded  focus:outline-none focus:bg-white focus:border-gray-500" for="proyecto">Proyecto:</label>
                    <label class=" border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded  focus:outline-none focus:bg-white focus:border-gray-500" for="proyecto">{{ $project->nameCorto() }}</label>

                </div>
                <table class="table-fixed">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nombre
                        </th>
                        <th scope="col" class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Email
                            </th>
                            <th scope="col" class="w-1/2 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Teléfono
                        </th>
                        <th scope="col" class="w-1/2 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Tipo de Contacto
                    </th>
                    <th scope="col" class="w-1/2 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                </th>
            </tr>
        </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($contacts as $contact)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">{{ $contact->nombre }}</div>
                            </td>
                            
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">{{ $contact->email }}</div>
                            </td>
                            
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">{{ $contact->telefono }}</div>
                            </td>
                            
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">{{ $contact->contactType->name }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <input class="bg-red-400 hover:bg-red-500 text-white font-bold rounded focus:outline-none focus:shadow-outline " type="button" value="Eliminar" data-modal-toggle="popup-modal{{ $contact->id }}">
                            </td>
                        </tr>
                        <!-- Delete Product Modal -->
                        <div id="popup-modal{{ $contact->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex justify-end p-2">
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal{{ $contact->id }}">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 pt-0 text-center">
                                        <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¿Estas seguro de eliminar este contacto?</h3>
                                    <button wire:click="eliminar({{$contact->id}})" data-modal-toggle="popup-modal{{ $contact->id }}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Si, Seguro
                                    </button>
                                    <button data-modal-toggle="popup-modal{{ $contact->id }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, Cancelar</button>
                                </div>
                            </div>
                        </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
                
                <br class="border-2 border-black-500">
                
                <div class="bg-gray-200 rounded-lg">
                    <form wire:submit.prevent="agregar">
                        <div class="flex">
                            <label class="flex-1 m-2">
                                <span class="flex-1  text-gray-700 text-sm font-bold m-2">Nombre</span>
                                <input wire:model.debounce.500ms="nombre_contacto" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                                @error('nombre_contacto') <span class="text-left text-xs text-red-700">{{ $message }}</span> @enderror
                            </label>
                            
                            <label class="flex-1 m-2">
                                <span class="flex-1 text-gray-700 text-sm font-bold m-2">Correo Electrónico</span>
                                <input wire:model.debounce.500ms="correo_contacto" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                                @error('correo_contacto') <span class="text-left text-xs text-red-700">{{ $message }}</span> @enderror
                            </label>
                            
                            <label class="flex-1 m-2">
                                <span class="flex-1 text-gray-700 text-sm font-bold m-2">Teléfono</span>
                                <input wire:model.debounce.500ms="telefono_contacto" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                                @error('telefono_contacto') <span class="text-left text-xs text-red-700">{{ $message }}</span> @enderror
                            </label>
                            <div class="flex-1 m-2">
                                <label class="flex-1 text-gray-700 text-sm font-bold m-2" for="grid-state">
                                    Tipo de contacto
                                </label>
                                <div class="relative">
                                    <select wire:model.debounce.500ms="tipo_contacto" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="documento_formalizacion" required name="formalization_document_id">
                                        <option hidden selected value="">Selecciona un documento de Formalización</option>
                                        @foreach($tipos_contacto as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('tipo_contacto') <span class="text-left text-xs text-red-700">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <input type="button" wire:click="agregar" value="Agregar Contacto" class="bg-blue-400 hover:bg-blue-500 text-white font-bold p-2 m-2 rounded focus:outline-none focus:shadow-outline ">
                    </form>
                </div>
                
                <!-- Modal toggle -->
                
                <a href="/proyecto"> <button class="float-right bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline m-2">Regresar</button> </a>
                
                
                
                
            </div>
        </div>
</div>