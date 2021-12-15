    <div class="flex flex-col text-left">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                @foreach($titles as $title)
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ $title }}
                                </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($items as $item)
                            <tr>                 
                                <td class="px-6 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-500">{{ $item->nit }}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-500">{{ $item->nombre }}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-500">{{ $item->direccion }}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-500">{{ $item->telefono }}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-500">{{ $item->correo}}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-500">{{ $item->contacto}}</div>
                                </td>


                                @foreach($acciones1 as $accion)
                                <td class="px-6 py-4 whitespace-normal">
                                    <a href="{{ route($ruta1,$item) }}">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2">{{ $accion }}</button>
                                    </a>
                                </td>
                                @endforeach

                                @foreach($acciones as $accion)
                                <td class="px-6 py-4 whitespace-normal">
                                    <form action="{{ route($ruta,$item) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="{{ $accion }}" class="bg-red-500 hover:bg-red-700 text-white font-bold p-2 px-4 rounded mt-2" onclick="return confirm('¿Deseas eliminar?')">
                                    </form>
                                </td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        &nbsp;
        {{ $items->links() }}
    </div>