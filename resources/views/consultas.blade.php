@extends('layout.main')
@section('titulo', $producto['nombre'])
@section('contenido')

    <div class="container mt-5 mb-5">

        {{-- Botón de regreso minimalista --}}
        <div class="mb-4">
            <a href="/catalogo" class="text-decoration-none text-secondary d-inline-flex align-items-center gap-2 hover-text-mars" style="transition: color 0.3s;">
                <img src="{{ asset('assets/caret-left.svg') }}" alt="Volver" style="width: 18px; height: 18px; filter: invert(0.6);">
                <span class="fw-semibold">Volver al catálogo</span>
            </a>
        </div>

        <div class="detalle-wrapper">
            <div class="row g-0">

                {{-- Columna Izquierda: Imagen del Producto (Fondo radial Space Charcoal) --}}
                <div class="col-md-6 border-end border-secondary border-opacity-10">
                    <div class="detalle-img-container">
                        <img src="{{ $producto['imagen'] }}" alt="{{ $producto['nombre'] }}">
                    </div>
                </div>

                {{-- Columna Derecha: Información del Producto --}}
                <div class="col-md-6">
                    <div class="detalle-info-container">
                        
                        {{-- Etiqueta de la categoría --}}
                        <div class="mb-2">
                            <span class="text-mars fw-bold text-uppercase" style="font-size: 0.8rem; letter-spacing: 1.5px;">
                                {{ $producto['categoria'] }}
                            </span>
                        </div>

                        {{-- Título ultra pesado (Inter 900) --}}
                        <h1 class="fw-black text-white text-uppercase mb-2 tracking-tighter display-5">{{ $producto['nombre'] }}</h1>
                        
                        {{-- Precio en verde neón (establecido en estilos.css) --}}
                        <div class="detalle-precio mb-4">${{ number_format($producto['precio'], 0, ',', '.') }}</div>

                        {{-- Descripción refinada --}}
                        <p class="text-secondary mb-5 lh-lg fs-5 fw-light">
                            {{ $producto['descripcion'] }}
                        </p>

                        <div class="mb-5">
                            <h5 class="text-white fw-bold mb-4 fs-6 text-uppercase" style="letter-spacing: 1px;">Especificaciones Destacadas</h5>

                            {{-- Usamos la clase detalle-specs del CSS. Ya NO hace falta el SVG, el CSS pone el tilde en Mars Red automáticamente --}}
                            <ul class="detalle-specs">
                                @foreach ($producto['specs'] as $spec)
                                    <li>{{ $spec }}</li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- SECCIÓN DE COMPRA --}}
                        <div class="mt-auto pt-4 border-top border-secondary border-opacity-25">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <span class="d-flex align-items-center text-secondary gap-2">
                                    <img src="{{ asset('assets/boxes.svg') }}" alt="Stock" style="width: 18px; height: 18px; filter: invert(0.5);">
                                    Stock disponible:
                                    <span class="fw-bold text-white fs-5 ms-1">{{ $producto['stock'] }}</span>
                                </span>
                            </div>

                            <div class="d-flex gap-3 align-items-center">
                                {{-- Input Numérico --}}
                                <div>
                                    <input type="number" id="input-cantidad" class="input-cantidad-moderno" value="1" min="1" max="{{ $producto['stock'] }}">
                                </div>

                                {{-- Botón de Acción con diseño Mars Red --}}
                                <button
                                    class="btn btn-mars w-100 fw-bold d-flex align-items-center justify-content-center gap-2"
                                    style="height: 55px; border-radius: 8px; font-size: 1.1rem;"
                                    onclick="agregarAlCarrito('{{ request()->segment(2) }}', '{{ $producto['nombre'] }}', {{ $producto['precio'] }}, {{ $producto['stock'] }}, '{{ $producto['imagen'] }}')">

                                    <img src="{{ asset('assets/cart-plus.svg') }}" alt="Agregar" style="width: 22px; height: 22px; filter: invert(1);">
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