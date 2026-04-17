@extends('layout.main')

@section('titulo', $producto['nombre']) 

@section('contenido')
<div class="container espacio-superior espacio-inferior mt-5">
    
    <div class="mb-4">
        <a href="/catalogo" class="enlace-volver text-decoration-none text-secondary">
            <i class="bi bi-arrow-left me-2"></i>Volver al catálogo
        </a>
    </div>

    {{-- Implementamos nuestro nuevo contenedor minimalista --}}
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
                        <ul class="detalle-specs">
                            @foreach($producto['specs'] as $spec)
                                <li>{{ $spec }}</li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- SECCIÓN DE COMPRA --}}
                    <div class="mt-auto pt-4 border-top border-secondary border-opacity-25">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-info small">
                                <i class="bi bi-box-seam me-2"></i>Stock: <span class="fw-bold text-white">{{ $producto['stock'] }}</span> disponibles
                            </span>
                        </div>
                        
                        <div class="d-flex gap-3 align-items-center">
                            {{-- Input moderno --}}
                            <div>
                                <input type="number" id="input-cantidad" class="input-cantidad-moderno" 
                                       value="1" min="1" max="{{ $producto['stock'] }}">
                            </div>
                            
                            {{-- Botón de Acción --}}
                            <button class="btn btn-primary w-100 fw-bold" style="height: 55px; border-radius: 10px;"
                                    onclick="agregarAlCarrito('{{ Request::route('id') }}', '{{ $producto['nombre'] }}', {{ $producto['precio'] }}, {{ $producto['stock'] }}, '{{ $producto['imagen'] }}')">
                                <i class="bi bi-cart-plus me-2 fs-5"></i>Agregar al Carrito
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>
@endsection