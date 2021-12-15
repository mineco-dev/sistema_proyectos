@extends('layouts.web')

@section('content')
<div class=text-center>
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Catálogo Insumos</h1>
</div>

<x-insumos-form :categorias="$categorias" :presentaciones="$presentaciones" />

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

<x-insumos-table :items="$insumos" :titles="['Código Sicoin','Nombre','Descripción','Categoría','Subcategoría','','']" :acciones="['Eliminar']" ruta="insumos.destroy" :acciones1="['Editar']" ruta1="insumos.edit"/>

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