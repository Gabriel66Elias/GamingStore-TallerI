@extends('layout.main')

@section('titulo', 'En Desarrollo')

@section('contenido')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 60vh;">
    <div class="detalle-wrapper p-5 text-center shadow-lg" style="max-width: 600px;">
        {{-- Icono de herramientas de Bootstrap Icons --}}
        <div class="mb-4">
            <i class="bi bi-tools text-primary" style="font-size: 4rem;"></i>
        </div>
        
        <h2 class="fw-bold text-uppercase mb-3">Sección en Desarrollo</h2>
        
        <p class="text-secondary mb-4 fs-5">
            Estamos trabajando arduamente para completar esta sección de <strong>GamingStation</strong>. 
            ¡Vuelve pronto para ver las novedades!
        </p>
        
        <div class="pt-3 border-top border-secondary border-opacity-25">
            <a href="{{ url('/') }}" class="btn btn-outline-primary px-4 py-2">
                <i class="bi bi-house-door me-2"></i>Volver al Inicio
            </a>
        </div>
    </div>
</div>
@endsection