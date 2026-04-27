@extends('layout.main')
@section('titulo', 'Catálogo')
@section('contenido')

    {{-- 1. ESTILOS DE LUCES DIFUMINADAS SOLO PARA ESTA PÁGINA --}}
    <style>
        /* Contenedor que fija las luces al fondo de la pantalla */
        .fondo-luces-catalogo {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            /* Lo manda detrás de todo el contenido */
            pointer-events: none;
            /* Evita que bloquee los clics en los productos */
            overflow: hidden;
        }

        /* Luz 1: Halo Mars Red en la esquina superior derecha */
        .luz-roja-top {
            position: absolute;
            top: -15%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255, 59, 59, 0.15) 0%, rgba(255, 59, 59, 0) 70%);
            border-radius: 50%;
            filter: blur(80px);
            /* Esto hace el efecto de difuminado suave */
        }

        /* Luz 2: Halo rojo más oscuro/azulado en la esquina inferior izquierda */
        .luz-roja-bottom {
            position: absolute;
            bottom: -10%;
            left: -10%;
            width: 700px;
            height: 700px;
            background: radial-gradient(circle, rgba(200, 30, 30, 0.1) 0%, rgba(20, 20, 30, 0) 70%);
            border-radius: 50%;
            filter: blur(100px);
        }
    </style>

    {{-- 2. DIVS QUE DIBUJAN LAS LUCES (No se ven, solo emiten el brillo) --}}
    <div class="fondo-luces-catalogo">
        <div class="luz-roja-top"></div>
        <div class="luz-roja-bottom"></div>
    </div>

    {{-- ... AQUÍ COMIENZA EL RESTO DE TU CÓDIGO NORMAL DEL CATÁLOGO ... --}}
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
    @endsection
