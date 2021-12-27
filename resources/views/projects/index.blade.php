@extends('layouts.web')

@section('content')
<div class=text-center>
    <h3 class="text-xl text-gray-700 mb-2 ">Listado de Proyectos</h3>
</div>

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                No.
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Proyecto
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
                <div class="text-sm text-gray-500">{{ $proyecto->name }}</div>
            </td>


            <td class="px-6 py-4 whitespace-nowrap">
                <a >

                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2" disabled="true">Ver

                    </button>
                </a>
            </td>


        </tr>
        @endforeach
    </tbody>
</table>

@endsection