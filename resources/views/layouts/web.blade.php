<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Almacén</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body>
    @livewire('navigation-menu')
    <header class="shadow-lg">
        <div class="bg-blue-900 py-1">

        </div>
    </header>

    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>

    </main>
    
    <footer class="py-4 text-center">
        @auth
        <a href="{{url('dashboard')}}" class="text-sm text-gray-700 underline">Página Principal</a>

        @else
        <a href="{{url('login')}}" class="text-sm text-gray-700 underline">Login</a>
        <a href="{{url('register')}}" class="ml-4 text-sm text-gray-700 underline">Registro</a>

        @endif



    </footer>

    @yield('script')


</body>

</html>