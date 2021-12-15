<div class="grid justify-center">
    <form action="{{ route('dependencias.store') }}" class="p-8 shadow-md rounded-md text-left" style="max-width: 400px;" method="POST">
        @csrf
        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Nombre de la Dependencia</span>
            <input type="text" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
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
        
        <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2" value="Agregar">
    </form>

</div>