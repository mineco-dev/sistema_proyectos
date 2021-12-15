@extends('layouts.web')

@section('content')
<div class=text-center>
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Proveedores</h1>
</div>

<x-form.create />

<x-complement.status />

<x-element.table-editar-eliminar :items="$providers" :titles="['Nit','Nombre','Dirección','Teléfono','Correo','Contacto','','']" :acciones="['Eliminar']" ruta="proveedores.destroy" :acciones1="['Editar']" ruta1="proveedores.edit" />

@endsection

@section('script')
<script>

</script>
@endsection