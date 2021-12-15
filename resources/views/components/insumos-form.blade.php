<div class="grid justify-center ">
    <form action="{{ route('insumos.store') }}" class="p-8 shadow-md rounded-md text-left" method="POST">
        @csrf

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Código de Insumo</span>
            <input value="{{ old('codigo_sicoin') }}" type="text" name="codigo_sicoin" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
        </label>

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Nombre</span>
            <input type="text" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
        </label>

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Descripción</span>
            <input type="text" name="descripcion" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
        </label>

        <div class="block mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                Categoría
            </label>
            <div class="relative">
                <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cat" onchange="cargarSubcategorias()" required>
                <option value=""></option>    
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{$categoria->renglon}}-{{$categoria->nombre}}</option>
                    @endforeach
                </select>

            </div>
        </div>

        <div class="block mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                SubCategoría
            </label>
            <div class="relative">
                <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="subcategoria" required name="subcategory_id">

                    <option></option>

                </select>

            </div>
        </div>

        <div class="block mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                Presentación
            </label>
            <div class="relative">
                <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cat" onchange="cargarSubcategorias()" required name="presentation_id">
                <option value=""></option>    
                    @foreach($presentaciones as $presentacion)
                    <option value="{{ $presentacion->id }}">{{$presentacion->nombre}}</option>
                    @endforeach
                </select>

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