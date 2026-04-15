<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingStation | {{ $producto['nombre'] }}</title>
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/estilos.css">
</head>

@extends('layout.main')
@section('contenido')
<div class="container espacio-superior espacio-inferior">
    
    <div class="margen-abajo">
        <a href="/catalogo" class="enlace-volver">← Volver al catálogo</a>
    </div>

    <div class="card">
        <div class="row g-0">
            
            {{-- Columna de Imagen --}}
            <div class="col-md-6">
                <div class="contenedor-img imagen-detalle">
                    <img src="{{ $producto['imagen'] }}" class="img-fluid" alt="{{ $producto['nombre'] }}">
                </div>
            </div>

            {{-- Columna de Información --}}
            <div class="col-md-6">
                <div class="info-detalle">
                    <h1 class="titulo-producto">{{ $producto['nombre'] }}</h1>
                    
                    <p class="descripcion-producto margen-abajo">
                        {{ $producto['descripcion'] }}
                    </p>

                    <div class="margen-abajo">
                        <h3>Especificaciones:</h3>
                        <ul class="lista-specs texto-gris">
                            @foreach($producto['specs'] as $spec)
                                <li>{{ $spec }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="anclar-fondo">
                        <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0" target="_blank" class="btn btn-primary ancho-completo">
                            Consultar por WhatsApp
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection