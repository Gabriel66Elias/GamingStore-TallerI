@extends('layout.main')

@section('titulo', 'Contacto | GamingStation')

@section('contenido')
    <div class="container mt-5 mb-5">

        <div class="row mb-5 text-center">
            <div class="col-12">
                <h1 class="text-white fw-bold display-5">CONTACTO Y UBICACIÓN</h1>
                <p class="text-secondary lead">Estamos aquí para asesorarte en el armado de tu próximo setup.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-12 col-lg-5">
                <div class="card card-contacto h-100 shadow-lg">
                    <div class="card-body p-4 p-lg-5">
                        <h3 class="fw-bold text-white mb-4">Información Legal</h3>

                        <ul class="list-unstyled text-secondary lh-lg mb-4">
                            <li class="mb-3"><strong class="text-white">Titular:</strong> Juan Pérez</li>
                            <li class="mb-3"><strong class="text-white">Razón Social:</strong> GamingStation S.R.L.</li>
                            <li class="mb-3"><strong class="text-white">Domicilio Legal:</strong> Av. 25 de Mayo 1234,
                                Corrientes</li>
                            <li class="mb-3"><strong class="text-white">Teléfono:</strong> +54 379 4123456</li>
                            <li class="mb-3"><strong class="text-white">Email:</strong> ventas@gamingstation.com.ar</li>
                        </ul>

                        <hr class="border-secondary mb-4">

                        <h4 class="fw-bold text-white mb-3">Nuestras Redes</h4>
                        <p class="text-secondary mb-4">Seguinos para enterarte de los últimos ingresos de consolas y
                            hardware de alto rendimiento.</p>

                        <div class="d-flex gap-4">
                            <a href="#" class="social-link" target="_blank" title="Instagram">
                                <img src="{{ asset('assets/instagram.svg') }}" alt="Instagram" class="icono-red">
                            </a>
                            <a href="#" class="social-link" target="_blank" title="Facebook">
                                <img src="{{ asset('assets/facebook.svg') }}" alt="Facebook" class="icono-red">
                            </a>
                            <a href="https://wa.me/543794123456" class="social-link" target="_blank" title="WhatsApp">
                                <img src="{{ asset('assets/whatsapp.svg') }}" alt="WhatsApp" class="icono-red">
                            </a>
                            <a href="mailto:ventas@gamingstation.com.ar" class="social-link" title="Enviar Correo">
                                <img src="{{ asset('assets/envelope-at.svg') }}" alt="Correo" class="icono-red">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7">
                <div class="card card-contacto h-100 shadow-lg">
                    <div class="card-body p-4 p-lg-5">
                        <h3 class="fw-bold text-white mb-4">Envianos tu consulta</h3>

                        <form action="{{ url('/contacto') }}" method="POST">
                            @csrf

                            <div class="mb-4 text-start">
                                <label class="form-label text-secondary fw-semibold">Nombre Completo</label>
                                <input type="text" name="nombre" class="form-control input-dark"
                                    placeholder="Ej: José García" required>
                            </div>

                            <div class="mb-4 text-start">
                                <label class="form-label text-secondary fw-semibold">Correo Electrónico</label>
                                <input type="email" name="email" class="form-control input-dark"
                                    placeholder="nombre@ejemplo.com" required>
                            </div>

                            <div class="mb-4 text-start">
                                <label class="form-label text-secondary fw-semibold">Mensaje</label>
                                <textarea name="mensaje" class="form-control input-dark" rows="5"
                                    placeholder="¿En qué podemos ayudarte o qué componente buscás?" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg w-100 py-3 mt-3">ENVIAR MENSAJE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
