@extends('layouts.web')

@section('content')
<div class=text-center>
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Bodegas</h1>
</div>

<x-complement.status />

<x-element.table-bodegas :items="$bodegas" :titles="['Nombre','','']" :acciones="['Eliminar']" ruta="bodegas.destroy" :acciones1="['Editar']" ruta1="bodegas.edit" />

@endsection

@section('script')
<script>

</script>
@endsection