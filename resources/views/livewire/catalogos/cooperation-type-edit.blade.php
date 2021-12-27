@extends('layouts.web')

@section('content')
<div class=text-center>
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Tipo de Cooperación</h1>
</div>

<div class=text-center>
    <h1 class="text-1xl text-gray-700 mb-2 uppercase">Edición</h1>
</div>

<div class="grid justify-center">
        <form action="{{ route('tipo-cooperacion.update',$tipo_cooperacion) }}" class="p-8 shadow-md rounded-md text-left" style="max-width: 400px;" method="POST">
            @csrf
            @method('PUT')
            <label class="block mb-2">
                <span class="block text-gray-700 text-sm font-bold mb-2">Nombre</span>
                <input type="text" name="name" value="{{ $tipo_cooperacion->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
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


            <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2" value="Editar">
        </form>

    </div>

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


@endsection

