<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingStation | Catálogo</title>
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/estilos.css"">
</head>

<body>
    @extends('layout.main')
    @section('contenido')
        <div class="container mt-5">
            <h2 class="text-center mb-5 text-white">Consolas y Accesorios</h2>
            <div class="row g-4">

                {{-- Producto 0: PlayStation 5 --}}
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow h-100">
                        <div class="contenedor-img">
                            <img src="/img/ps5.webp" class="img-fluid" alt="PlayStation 5">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">PlayStation 5</h5>
                            <p class="card-text text-secondary mb-4">Consola física con lector de discos.</p>
                            <div class="mt-auto">
                                <a href="/consulta/0" class="btn btn-primary w-100">Consultar</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Producto 1: Mando PS5 --}}
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow h-100">
                        <div class="contenedor-img">
                            <img src="/img/mando-ps5.webp" class="img-fluid" alt="Mando PS5">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Mando - PlayStation 5</h5>
                            <p class="card-text text-secondary mb-4">Mando original para la PS5.</p>
                            <div class="mt-auto">
                                <a href="/consulta/1" class="btn btn-primary w-100">Consultar</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Producto 2: Nintendo Switch --}}
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow h-100">
                        <div class="contenedor-img">
                            <img src="/img/switch.webp" class="img-fluid" alt="Nintendo Switch">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Nintendo Switch</h5>
                            <p class="card-text text-secondary mb-4">Versión física con mandos Joy-Con.</p>
                            <div class="mt-auto">
                                <a href="/consulta/2" class="btn btn-primary w-100">Consultar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
