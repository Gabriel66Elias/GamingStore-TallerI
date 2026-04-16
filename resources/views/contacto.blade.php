<!DOCTYPE html>
<html>

<body>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GamingStation | Contacto</title>
        <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    @extends('layout.main')
    @section('titulo', 'Contacto')
    @section('contenido')
        <div class="container mt-5">
            <h2 class="text-center mb-5">Contacto y Ubicación</h2>
            <div class="row g-4">
                <div class="col-md-5">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h3 class="h3 mb-4">Datos Legales</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3"><strong>Titular:</strong> Juan Pérez </li>
                                <li class="mb-3"><strong>Razón Social:</strong> GamingStation S.R.L. </li>
                                <li class="mb-3"><strong>Domicilio Legal:</strong> Av. 25 de Mayo 1234, Corrientes </li>
                                <li class="mb-3"><strong>Teléfono:</strong> +54 379 4123456 </li>
                                <li class="mb-3"><strong>Email:</strong> ventas@gamingstation.com.ar</li>
                            </ul>
                            <hr class="border-secondary">
                            <h4 class="h4 mt-4">Nuestras Redes</h4>
                            <p class="text-secondary">Seguinos para enterarte de los últimos ingresos de consolas y
                                periféricos.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="h3 mb-4">Envianos tu consulta</h3>
                            <form action="{{ url('/contacto') }}" method="POST">
                                @csrf {{-- ¡No olvides el token de seguridad de Laravel! --}}
                                <div class="mb-3 text-start">
                                    <label class="form-label">Nombre Completo</label>
                                    <input type="text" name="nombre"
                                        class="form-control bg-dark text-white border-secondary"
                                        placeholder="Ej: José García" required>
                                </div>
                                <div class="mb-3 text-start">
                                    <label class="form-label">Correo Electrónico</label>
                                    <input type="email" name="email"
                                        class="form-control bg-dark text-white border-secondary"
                                        placeholder="nombre@ejemplo.com" required>
                                </div>
                                <div class="mb-3 text-start">
                                    <label class="form-label">Mensaje</label>
                                    <textarea name="mensaje" class="form-control bg-dark text-white border-secondary" rows="4"
                                        placeholder="¿En qué podemos ayudarte?" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-2">Enviar Mensaje</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
