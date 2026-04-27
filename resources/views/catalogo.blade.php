@extends('layout.main')
@section('titulo', 'Catálogo')
@section('contenido')

    {{-- Importamos el archivo CSS separado de los fondos (Buenas Prácticas) --}}
    <link rel="stylesheet" href="{{ asset('css/fondos.css') }}">

    {{-- DIVS QUE DIBUJAN LAS LUCES (No se ven, solo emiten el brillo) --}}
    <div class="fondo-luces-catalogo">
        <div class="luz-roja-top"></div>
        <div class="luz-roja-bottom"></div>
    </div>

    <div class="container mt-5 mb-5">

        <div class="container mt-5 mb-5">
            {{-- Encabezado Minimalista --}}
            <div class="text-center mb-5">
                <h2 class="fw-black text-white text-uppercase tracking-tighter display-5 mb-2">
                    Catálogo
                </h2>
            </div>

            {{-- Componente de Filtros --}}
            <x-filtro-catalogo />

            {{-- Listado por Categorías --}}
            @foreach ($productosAgrupados as $categoria => $productos)
                <div class="categoria-bloque mb-5">
                    {{-- Título de Categoría más limpio --}}
                    <div class="d-flex align-items-center mb-4">
                        <h3 class="text-white fw-bold text-uppercase fs-4 mb-0 me-3">{{ $categoria }}</h3>
                        <div class="grow border-bottom border-secondary opacity-25"></div>
                    </div>

                    {{-- Grilla de Productos --}}
                    <div class="row g-4">
                        @foreach ($productos as $producto)
                            <x-producto-card :producto="$producto" :id="$producto['id']" />
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Script de filtrado --}}
        <script src="{{ asset('js/filtros.js') }}"></script>
    </div>
@endsection