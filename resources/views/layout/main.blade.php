<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingStation | @yield('titulo')</title>
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/estilos.css">
</head>

<body class="bg-dark text-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom border-secondary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">GAMING<span class="text-primary">STATION</span></a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/">Inicio</a>
                <a class="nav-link" href="/quienes-somos">Quiénes Somos</a>
                <a class="nav-link" href="/catalogo">Catálogo</a>
                <a class="nav-link" href="/contacto">Contacto</a>
            </div>
        </div>
    </nav>
    <main>
        @yield('contenido')
    </main>

    <footer class="text-center py-4 border-top border-secondary mt-5">
        <p>&copy; 2026 GamingStation - Todos los derechos reservados</p>
    </footer>

    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
