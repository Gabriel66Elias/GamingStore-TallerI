<!DOCTYPE html>
<html>

<head>
    <title>Formulario enviado</title>
</head>

<body>
    @extends('layout.main')
    @section('titulo', 'Formulario Enviado')
    @section('contenido')
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
            <!-- 'd-flex' y 'align-items-center' centran la tarjeta verticalmente -->

            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow">
                    <div class="card-body">
                        <!-- Usé la clase 'fw-bold' de Bootstrap para el título -->
                        <h2 class="card-title fw-bold mb-4">¡Formulario Enviado con Éxito!</h2>

                        <div class="descripcion-producto mb-4">
                            <!-- Usamos tu clase '.descripcion-producto' del estilos.css -->
                            <p>Gracias, <strong>{{ $nombre }}</strong>.</p>
                            <p>Hemos recibido tu mensaje correctamente. Nos pondremos en contacto contigo a la brevedad a tu
                                dirección de email: <strong>{{ $email }}</strong>.</p>
                        </div>

                        <!-- botón de confirmar -->
                        <div class="anclar-fondo">
                            <!-- 'anclar-fondo' usa tu estilo para empujar el botón abajo -->
                            <a href="{{ url('/') }}" class="btn btn-primary btn-lg ancho-completo">
                                Confirmar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>
</html>
