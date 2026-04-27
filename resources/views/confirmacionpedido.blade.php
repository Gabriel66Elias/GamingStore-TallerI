@extends('layout.main')

@section('titulo', 'Pedido Confirmado')

@section('contenido')
    <style>
        .card-estado {
            background: linear-gradient(145deg, #1a1d27 0%, #11131A 100%) !important;
            border: 2px solid transparent !important; 
            border-radius: 16px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease !important;
        }

        .card-estado:hover {
            transform: none !important;
            border-color: #FF3B3B !important; 
            box-shadow: 0 0 20px rgba(255, 59, 59, 0.15) !important;
        }
    </style>

    <div class="container mt-5 mb-5" style="min-height: 70vh;">
        
        {{-- Botón de regreso minimalista --}}
        <div class="mb-4">
            <a href="/" class="text-decoration-none text-secondary d-inline-flex align-items-center gap-2 hover-text-mars" style="transition: color 0.3s;" onmouseover="this.style.color='#FF3B3B'" onmouseout="this.style.color='#6c757d'">
                <img src="{{ asset('assets/caret-left.svg') }}" alt="Volver" style="width: 18px; height: 18px; filter: invert(0.6);">
                <span class="fw-semibold">Volver al inicio</span>
            </a>
        </div>

        <div class="row w-100 justify-content-center m-0">
            <div class="col-12 col-md-8 col-lg-6">

                <div class="card card-estado text-center shadow-lg">
                    <div class="card-body p-5">
                        
                        <div class="mb-4 d-flex justify-content-center">
                            <div style="width: 80px; height: 80px; background-color: rgba(25, 135, 84, 0.1); border: 2px solid #198754; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#198754" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                            </div>
                        </div>

                        <h1 class="text-white fw-black mb-3 text-uppercase display-5 tracking-tighter">¡Pedido Confirmado!</h1>
                        
                        {{-- Agregamos el ID mensaje-envio para que el script lo actualice --}}
                        <p id="mensaje-envio" class="text-secondary fs-5 mb-5">
                            Cargando información del envío...
                        </p>

                        <div class="d-grid gap-2 col-10 mx-auto">
                            <a href="/" class="btn btn-mars btn-lg py-3 fw-bold" style="border-radius: 0.8rem; letter-spacing: 1px;">
                                Volver al Inicio
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Oculta el badge del carrito
            const badge = document.getElementById('cart-count-badge');
            if(badge) badge.classList.add('d-none');

            // --- NUEVA LÓGICA DINÁMICA ---
            const mensajeEl = document.getElementById('mensaje-envio');
            const metodoEnvio = localStorage.getItem('metodo_envio_final');

            if (metodoEnvio === 'retiro') {
                mensajeEl.innerHTML = 'Te avisaremos por correo cuando tu pedido esté listo para ser retirado en nuestro local.';
            } else {
                mensajeEl.innerHTML = 'Se le enviará a su correo el código de seguimiento de su pedido.';
            }

            // Opcional: Limpiar el dato después de usarlo
            localStorage.removeItem('metodo_envio_final');
        });
    </script>
@endsection