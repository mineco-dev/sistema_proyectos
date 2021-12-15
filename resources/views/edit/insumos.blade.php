@extends('layouts.web')

@section('content')
<div class="grid justify-center ">
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
    <form action="{{ route('insumos.update',$insumo->id) }}" class="p-8 shadow-md rounded-md text-left" method="POST">

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Código Sicoin </span>
            <input value="{{ $insumo->codigo_sicoin }}" type="text" name="codigo_sicoin" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
        </label>

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Nombre</span>
            <input value="{{ $insumo->nombre }}" type="text" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
        </label>

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Descripción</span>
            <input value="{{ $insumo->descripcion }}" type="text" name="descripcion" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
        </label>

        <div class="block mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                Categoría
            </label>
            <div class="relative">
                <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cat" onchange="cargarSubcategorias()" required>
                    <option value=""></option>
                    <option selected disabled="disabled">{{ $cat->nombre }}</option>
                    @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{$categoria->nombre}}</option>
                    @endforeach
                </select>

            </div>
        </div>

        <div class="block mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                SubCategoría
            </label>
            <div class="relative">
                <select name="subcategory_id" class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="subcategoria" required>

                    <option selected value="{{ $subcategoria->id }}">{{ $subcategoria->nombre }}</option>

                </select>

            </div>
        </div>

        <div class="block mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                Presentación
            </label>
            <div class="relative">
                <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required name="presentation_id">
                    <!-- <option selected>{{ $insumo->name_presentation }}</option>  -->
                    @foreach($presentaciones as $presentacion)
                    @if("{{ $insumo->name_presentation }}" == "{{$presentacion->nombre}}")
                    <option selected value="{{ $presentacion->id }}">{{$presentacion->nombre}}</option>
                    @else
                    <option value="{{ $presentacion->id }}">{{$presentacion->nombre}}</option>
                    @endif
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


        @csrf
        @method('PUT')
        <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2" value="Actualizar">
        <a href="/insumos" class="bg-red-500 hover:bg-red-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2">Cancelar Acción</a>

    </form>
    



</div>
@endsection

@section('script')
<script>
    function cargarSubcategorias() {

        $val = document.getElementById("cat").value;
        $ruta = '/api/categoria/' + $val + '/subcategorias';
        console.log($ruta);

        axios.get($ruta)
            .then(function(response) {

                var subcategoria = document.querySelector('#subcategoria');
                limpiar(subcategoria);
                for (var i = 0; i < response.data.length; i++) {
                    var opt = document.createElement('option');
                    opt.innerHTML = response.data[i].nombre;
                    opt.value = response.data[i].id;
                    subcategoria.appendChild(opt);
                }
            })
            .catch(function(error) {
                // handle error
                console.log(error);
            })
            .then(function() {
                // always executed
            });



    }

    function limpiar($objeto) {
        while ($objeto.options.length > 0) {
            $objeto.remove(0);
        }
    }
</script>

@endsection