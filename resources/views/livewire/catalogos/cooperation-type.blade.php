<div>
    <div class=text-center>
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Catálogo Tipos de Cooperación</h1>
    </div>

    <div class=text-center>
        <h1 class="text-1xl text-gray-700 mb-2 uppercase"></h1>
    </div>
    <div class="grid justify-center">
        <form action="{{ route('tipo-cooperacion.store') }}" class="p-8 shadow-md rounded-md text-left" style="max-width: 400px;" method="POST">
            @csrf
            <label class="block mb-2">
                <span class="block text-gray-700 text-sm font-bold mb-2">Nombre</span>
                <input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
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

    &nbsp;
    @if (session('status'))

    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">{{ session('status') }}</strong>

        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
            </svg>
        </span>
        </span>
    </div>
    @endif
    &nbsp;
    <div>
        <div class="flex flex-col text-left">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="w-1/2 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nombre
                                    </th>
                                    <th scope="col" class="w-1/2 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" colspan="2">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($items as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">{{ $item->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('tipo-cooperacion.edit',$item->id) }}">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2">
                                                Editar
                                            </button>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <form action="{{ route('tipo-cooperacion.destroy',$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Eliminar" class="bg-red-500 hover:bg-red-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2" onclick="return confirm('¿Deseas eliminar?')">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            &nbsp;

        </div>


    </div>

</div>