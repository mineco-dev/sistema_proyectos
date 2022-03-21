<div>
    <form>
        <div class="grid grid-cols-10">
            <div class="col-start-2 col-span-8">
                <div class="flex"> 
                    <p class="prose prose-2xl">Proyecto: {{ $project->nameCorto() }}</p>
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
                                <input wire:click="eliminar({{$contact->id}})" class="bg-red-400 hover:bg-red-500 text-white font-bold rounded focus:outline-none focus:shadow-outline " type="button" value="Eliminar">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <br class="border-2 border-black-500">

                <div class="bg-gray-200 rounded-lg">
                    <form wire:submit.prevent="agregar" >
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


            </div>
        </div>
    </form>
</div>