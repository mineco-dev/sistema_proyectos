<div>
    @if (session('status'))

    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">{{ session('status') }}</strong>

        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">

        </span>

    </div>

    @endif
    <div class="text-center py-8">
        <h3 class="text-xl text-gray-700 mb-2">Roles</h3>
    </div>

    <div class="text-center py-8">
        <form action="" wire:submit.prevent="agregar">
            @csrf
            <input value="{{ old('rol') }}" wire:model.debounce.500ms="rol" type="text" name="rol" class="flex-1 appearance-none border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2">Agregar</button>
        </form>
    </div>

    <div class="flex justify-center">
        <table class="divide-y divide-gray-200 m-8">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Rol
                    </th>
                    <th scope="col col-span-2" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Acción
                    </th>

                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

                @foreach($roles as $rol)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">{{ $rol->id }}</div>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">{{ $rol->name }}</div>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                        <button wire:click="verPermiso({{ $rol->id }})" class="bg-green-500 hover:bg-green-700 text-white font-bold rounded focus:outline-none focus:shadow-outline">Ver Permisos</button>
                        <button wire:click="eliminarRol({{ $rol->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold rounded focus:outline-none focus:shadow-outline">Eliminar</button>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    @if($verPermisos)
    <div class="flex justify-center">
        <table class="divide-y divide-gray-200 m-8">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Permiso
                    </th>
                    <th scope="col col-span-2" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Seleccionado
                    </th>

                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

            @foreach($permisos as $permiso)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">{{ $permiso->id }}</div>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">{{ $permiso->name }}</div>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                        @foreach($permisosAsignados as $permisoAsignado)
                            @if($permisoAsignado->id == $permiso->id)
                                <input type="checkbox" class="rounded text-pink-500" checked wire:model="checkeados[{{ $permiso->id }}]"/>
                            @else
                                <input type="checkbox" class="rounded text-pink-500"/>
                            @endif
                        @endforeach
                    </td>


                </tr>
            @endforeach
               
            </tbody>
        </table>
    </div>
    @endif
    ****
</div>