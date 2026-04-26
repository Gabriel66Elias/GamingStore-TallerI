@props(['producto', 'id'])

<div class="col-12 col-sm-6 col-lg-4 producto-item" 
     data-id="{{ $id }}"
     data-categoria="{{ $producto['categoria'] }}" 
     data-precio="{{ $producto['precio'] }}">
    
    {{-- Convertimos TODO el div de la tarjeta en una etiqueta <a> --}}
    <a href="/consulta/{{ $id }}" class="card h-100 border-0 bg-transparent hover-elevate text-decoration-none" style="display: block; cursor: pointer;">
        
        {{-- Contenedor de imagen con esquinas redondeadas y fondo sutil --}}
        <div class="contenedor-img rounded-4 bg-dark bg-opacity-50 mb-3" style="transition: transform 0.4s ease;">
            <img src="{{ $producto['imagen'] }}" alt="{{ $producto['nombre'] }}" class="p-4">
        </div>
        
        <div class="card-body p-0 d-flex flex-column">
            {{-- Categoría pequeña arriba del nombre --}}
            <span class="text-mars fw-bold text-uppercase mb-1" style="font-size: 0.7rem; letter-spacing: 1px;">
                {{ $producto['categoria'] }}
            </span>
            
            <h5 class="text-white fw-bold mb-2 fs-5 lh-sm">{{ $producto['nombre'] }}</h5>
            
            <div class="mt-auto d-flex align-items-center justify-content-between pt-2">
                {{-- Precio --}}
                <span class="text-white fw-bolder fs-4">
                    ${{ number_format($producto['precio'], 0, ',', '.') }}
                </span>
                
                {{-- Transformamos el antiguo <a> en un <span> visual para no romper el HTML --}}
                <span class="btn btn-mars btn-sm px-3 fw-bold rounded-3">
                    Detalles
                </span>
            </div>
        </div>
    </a>
</div>

<style>
    /* Efecto de zoom suave en la imagen al pasar por cualquier parte de la tarjeta */
    .producto-item:hover .contenedor-img img {
        transform: scale(1.08);
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>