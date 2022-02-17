<div>
    @if (session('status'))

    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">{{ session('status') }}</strong>

        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">

        </span>

    </div>

    @endif
    <div class="text-center py-8">
        <h3 class="text-xl text-gray-700 mb-2">Listado de Usuarios</h3>
    </div>

    <div class="flex justify-center">
        <table class="divide-y divide-gray-200 m-8">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Usuario
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Correo Electrónico
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Rol
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($usuarios as $usuario)

                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">{{ $usuario->id }}</div>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">{{ $usuario->name }} - {{ $usuario->rol }}</div>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">{{ $usuario->email }}</div>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                        <form action="">
                            <select name="" id="" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                @foreach($roles as $rol_individual)
                                    <option value="{{ $rol_individual->id }}">{{ $rol_individual->name }}</option>
                                @endforeach
                            </select>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {{ $rol }}
    </div>
</div>