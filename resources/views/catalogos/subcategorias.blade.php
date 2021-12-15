@extends('layouts.web')

@section('content')

    <x-subcategoria-form  :categoria="$categoria" />

    &nbsp;
    @if (session('status'))

    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">{{ session('status') }}</strong>

        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">

        </span>

    </div>

    @endif

    &nbsp;

    <x-table-button-form :items="$subcategorias" :titles="['Código','Subcategoría','']" :columns="['codigo','nombre']" :acciones="['Eliminar']" parametroRuta="id" ruta="subcategoria.destroy">

    </x-table-button-form>

@endsection