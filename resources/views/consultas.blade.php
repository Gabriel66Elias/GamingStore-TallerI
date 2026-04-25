@extends('layout.main')
@section('titulo', $producto['nombre'])
@section('contenido')
    <div class="container espacio-superior espacio-inferior mt-5">

        <div class="mb-4">
            <a href="/catalogo" class="enlace-volver text-decoration-none text-secondary">
                <img src="{{ asset('assets/caret-left.svg') }}" alt="Agregar"
                    style="width: 24px; height: 24px; filter: invert(1);">
                Volver al catálogo
            </a>
        </div>

        <div class="detalle-wrapper">
            <div class="row g-0">

                {{-- Columna Izquierda: Imagen del Producto --}}
                <div class="col-md-6 border-end border-secondary border-opacity-25">
                    <div class="detalle-img-container">
                        <img src="{{ $producto['imagen'] }}" alt="{{ $producto['nombre'] }}">
                    </div>
                </div>

                {{-- Columna Derecha: Información del Producto --}}
                <div class="col-md-6">
                    <div class="detalle-info-container grow">
                        <h1 class="titulo-producto fw-bold text-uppercase mb-2">{{ $producto['nombre'] }}</h1>
                        <div class="detalle-precio mb-4">${{ number_format($producto['precio'], 0, ',', '.') }}</div>

                        <p class="text-secondary mb-5 lh-lg">
                            {{ $producto['descripcion'] }}
                        </p>

                        <div class="mb-5">
                            <h5 class="text-white fw-bold mb-4">Especificaciones Destacadas:</h5>

                            {{-- Cambiamos a list-unstyled para limpiar estilos por defecto --}}
                            <ul class="list-unstyled p-0 m-0">
                                @foreach ($producto['specs'] as $spec)
                                    {{-- Cada elemento DEBE ir dentro de un <li>. Usamos d-flex para alinear el SVG y el texto --}}
                                    <li class="d-flex align-items-center gap-3 mb-3">

                                        {{-- Tu SVG local --}}
                                        <img src="{{ asset('assets/check2.svg') }}" alt="Check"
                                            style="width: 24px; height: 24px; filter: invert(1);">

                                        {{-- El texto de la especificación --}}
                                        <span class="text-secondary fs-6">{{ $spec }}</span>

                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- SECCIÓN DE COMPRA --}}
                        <div class="mt-auto pt-4 border-top border-secondary border-opacity-25">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="d-flex align-items-center justify-content-center gap-2">
                                    <img src="{{ asset('assets/boxes.svg') }}" alt="Agregar"
                                        style="width: 20px; height: 16px; filter: invert(1);">
                                    Stock:
                                    <span class="fw-bold text-white">{{ $producto['stock'] }}</span> disponibles
                                </span>
                            </div>

                            <div class="d-flex gap-3 align-items-center">
                                <div>
                                    <input type="number" id="input-cantidad" class="input-cantidad-moderno" value="1"
                                        min="1" max="{{ $producto['stock'] }}">
                                </div>

                                {{-- Botón de Acción --}}
                                <button
                                    class="btn btn-primary w-100 fw-bold d-flex align-items-center justify-content-center gap-2"
                                    style="height: 55px; border-radius: 10px;"
                                    onclick="agregarAlCarrito('{{ request()->segment(2) }}', '{{ $producto['nombre'] }}', {{ $producto['precio'] }}, {{ $producto['stock'] }}, '{{ $producto['imagen'] }}')">

                                    <img src="{{ asset('assets/cart-plus.svg') }}" alt="Agregar"
                                        style="width: 24px; height: 24px; filter: invert(1);">
                                    <span>Agregar al Carrito</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
