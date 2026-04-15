<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingStation | Hardware & Games</title>
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/estilos.css">
</head>
@extends ('layout.main')
@section('titulo', 'Inicio')
@section('contenido')
    <header class="py-5 mb-5"
        style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://via.placeholder.com/1920x600'); background-size: cover;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12 text-center text-white">
                    <h1 class="display-3 fw-bold mb-2">Elevá tu juego al siguiente nivel</h1>
                    <p class="lead mb-4 shadow-sm">Las mejores consolas, hardware de punta y lanzamientos físicos en un
                        solo lugar.</p>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="/catalogo" class="btn btn-outline-light btn-lg px-5">Ver Catálogo</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="container">
        <div class="row text-center mb-5">
            <div class="col-md-4">
                <div class="card bg-secondary text-white border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h3>Consolas</h3>
                        <p>PS5, Nintendo Switch y Xbox Series X disponibles con garantía oficial.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-secondary text-white border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h3>Periféricos</h3>
                        <p>Mandos, auriculares y volantes para una experiencia inmersiva.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-secondary text-white border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h3>Gaming TVs</h3>
                        <p>Pantallas 4K con bajo input-lag para que no pierdas ni un frame.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
