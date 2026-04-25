@extends('layout.main')

@section('titulo', '¡Envío Exitoso! | GamingStation')

@section('contenido')
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 70vh;">
        <div class="row w-100 justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">

                <div class="card card-exito text-center shadow-lg">
                    <div class="card-body p-5">

                        <div class="success-icon-container mb-4">
                            <div class="success-circle">
                                <span class="checkmark">✓</span>
                            </div>
                        </div>

                        <h1 class="text-white fw-bold mb-3">¡MENSAJE ENVIADO!</h1>

                        <p class="text-secondary fs-5 mb-4">
                            Gracias por contactarnos, <strong>{{ $nombre }}</strong>. Tu consulta ha sido recibida
                            correctamente y un asesor de <strong>GamingStation</strong> te responderá a la brevedad al
                            correo: <strong>{{ $email }}</strong>.
                        </p>

                        <div class="d-grid gap-2 col-8 mx-auto">
                            <a href="{{ url('/') }}" class="btn btn-primary btn-lg py-3">
                                VOLVER AL INICIO
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
