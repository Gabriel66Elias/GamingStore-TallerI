@props(['producto', 'id'])

<div class="col-12 col-md-6 col-lg-4">
    <div class="card shadow h-100">
        <div class="contenedor-img">
            <img src="{{ $producto['imagen'] }}" alt="{{ $producto['nombre'] }}">
        </div>
        
        <div class="card-body d-flex flex-column">
            <h5 class="card-title fw-bold mb-3">{{ $producto['nombre'] }}</h5>
            <div class="mt-auto">
                <div class="precio-catalogo mb-3">
                    ${{ number_format($producto['precio'], 0, ',', '.') }}
                </div>
                <a href="/consulta/{{ $id }}" class="btn btn-primary w-100">Ver Detalles</a>
            </div>
        </div>
    </div>
</div>