<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingStation | Catálogo</title>
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/estilos.css">
</head>
@extends('layout.main')
@section('contenido')
<div class="container mt-5">
    <h2 class="text-center mb-5 text-white">Consolas y Accesorios</h2>
    <div class="row g-4"> {{-- g-4 da espacio parejo entre cards --}}

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card shadow">
                <div class="contenedor-img">
                    <img src="/img/new/PS5.jpg" alt="PlayStation 5">
                </div>
                <div class="card-body flex-column">
                    <h5 class="card-title text-white fw-bold">PlayStation 5</h5>
                    <p class="card-text text-secondary mb-4">Consola física con lector de discos.</p>
                    <div class="mt-auto"> {{-- Esto empuja el botón al fondo de la card--}}
                        <a href="/consultas" class="btn btn-primary w-100">Consultar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card shadow">
                <div class="contenedor-img">
                    <img src="/img/switch.jpg" alt="Nintendo Switch">
                </div>
                <div class="card-body flex-column">
                    <h5 class="card-title text-white fw-bold">Nintendo Switch</h5>
                    <p class="card-text text-secondary mb-4">Versión física con mandos Joy-Con.</p>
                    <div class="mt-auto">
                        <a href="/consultas" class="btn btn-primary w-100">Consultar</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
