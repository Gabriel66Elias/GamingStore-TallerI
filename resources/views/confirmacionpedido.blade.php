@extends('layout.main')

@section('titulo', 'Pedido Confirmado')

@section('contenido')
<div class="container mt-5 mb-5 text-center d-flex flex-column justify-content-center align-items-center" style="min-height: 60vh;">
    
    {{-- Círculo Verde con Check (SVG Inline) --}}
    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="#198754" class="mb-4 shadow-sm rounded-circle" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </svg>

    <h1 class="fw-bold text-white mb-3 text-uppercase display-5">¡Pedido Confirmado!</h1>
    
    <p class="text-secondary fs-5 mb-5">
        Se le enviará a su correo el código de seguimiento de su pedido.
    </p>

    <a href="/" class="btn btn-primary btn-lg fw-bold px-5 py-3 rounded-pill shadow-lg">
        Volver al Inicio
    </a>
</div>

{{-- Pequeño script para asegurarnos de que el contador del header marque 0 al llegar aquí --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const badge = document.getElementById('cart-count-badge');
        if(badge) badge.classList.add('d-none');
    });
</script>
@endsection