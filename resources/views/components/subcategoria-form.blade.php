<div class="grid justify-center">
    <form action="{{ route('subcategoria.store') }}" class="p-8 shadow-md rounded-md text-left" style="max-width: 400px;" method="POST">
        @csrf
        <input type="text" name="category_id" value="{{ $categoria->id }}" hidden>

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Categoría </span>
            <input type="text" class="shadow appearance-none border-none rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" placeholder="" disabled value="{{ $categoria->nombre }}">
        </label>

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Código</span>
            <input type="text" name="codigo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
        </label>

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Nombre de Subcategoría</span>
            <input type="text" name="nombre" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
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