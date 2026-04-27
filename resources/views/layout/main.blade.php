<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>GamingStation | @yield('titulo')</title>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fondos.css') }}">
</head>

<body class="bg-dark text-light">

    @include('partials.header')

    <main>
        @yield('contenido')
    </main>

    @include('partials.footer')

    <x-carrito />

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    <script src="{{ asset('js/carrito.js') }}"></script>

</body>
</html>