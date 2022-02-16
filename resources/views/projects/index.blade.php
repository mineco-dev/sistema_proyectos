@extends('layouts.web')

@section('content')

@if (session('status'))

<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">{{ session('status') }}</strong>

    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">

    </span>

</div>

@endif
<div class="text-center py-8">
    <h3 class="text-xl text-gray-700 mb-2">Listado de Proyectos</h3>
</div>

<table class="min-w-full divide-y divide-gray-200 m-8">
    <thead class="bg-gray-50">
        <tr >
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                No.
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Proyecto
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Cooperación
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Tipo Cooperación
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Estado
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Acción
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach($proyectos as $proyecto)
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-500">{{ $proyecto->id }}</div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-500">{{ $proyecto->nameCorto() }}</div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-500">{{ $proyecto->cooperation->name }}</div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-500">{{ $proyecto->cooperationType->name }}</div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-500 font-black">{{ $proyecto->state->name }}</div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
                <a href="{{ route('proyectos-mostrar',$proyecto) }}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2">Ver</button></a>
                <a href="{{ route('proyectos-contactos',$proyecto) }}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2">Contacto</button></a>
                <a href="{{ route('proyectos-vigencia',$proyecto) }}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2">Vigencia</button></a>
                <a href="{{ route('proyecto-expediente',$proyecto) }}"><button class="fa-thin fa-paperclip bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2">Expediente</button></a>
            </td>


        </tr>
        @endforeach
    </tbody>
</table>

@endsection