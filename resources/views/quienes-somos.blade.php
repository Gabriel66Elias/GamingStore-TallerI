<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GamingStation | Catálogo</title>
<link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/estilos.css"">

</html>

<body>
    @extends('layout.main')
    @section('titulo', 'Quiénes Somos')
    @section('contenido')
        <div class="container mt-5">
            <h2 class="text-center mb-5 text-white">Quiénes Somos</h2>
            <div class="row g-4">
                <div class="col-12 col-md-6">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Nuestra Trayectoria</h5>
                            <p class="card-text text-secondary mb-4">GamingStation nació en 2020
                                con la misión de ofrecer a los gamers
                                una experiencia de compra única,
                                centrada en la calidad y el alto rendimiento de nuestros productos.</p>
                            <p class="card-text text-secondary mb-4">Desde entonces, hemos crecido
                                hasta convertirnos en una de las tiendas de videojuegos más confiables
                                y reconocidas del país, gracias a nuestro compromiso con la satisfacción del cliente y
                                la pasión por los videojuegos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Nuestro Compromiso</h5>
                            <p class="card-text text-secondary mb-4">En GamingStation, nos esforzamos por ofrecer una amplia
                                selección de productos de alta calidad, desde consolas y accesorios hasta los últimos
                                lanzamientos en videojuegos. Nuestro equipo de expertos está siempre disponible para brindar
                                asesoramiento personalizado y garantizar que cada cliente encuentre exactamente lo que
                                busca.</p>
                            <p class="card-text text-secondary mb-4">Además, nos comprometemos a mantener precios
                                competitivos y a ofrecer promociones exclusivas para nuestros clientes, asegurando que cada
                                compra en GamingStation sea una experiencia satisfactoria y memorable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h2 class="text-center mb-5 text-white">Nuestro Equipo</h2>
            <div class="row g-4">
                <div class="col-12 col-md-4">
                    <div class="card shadow h-100">
                        <div class="contenedor-img">
                            <img src="/img/juan-perez.webp" class="img-fluid" alt="Equipo 1">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Juan Pérez</h5>
                            <p class="card-text text-secondary mb-4">Fundador y CEO de GamingStation,
                                con más de 15 años de experiencia
                                en la industria de los videojuegos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card shadow h-100">
                        <div class="contenedor  -img">
                            <img src="/img/maria-garcia.webp" class="img-fluid" alt="Equipo 2">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">María García</h5>
                            <p class="card-text text-secondary mb-4">Directora de Marketing, responsable de las estrategias
                                de promoción y comunicación de la marca.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card shadow h-100">
                        <div class="contenedor-img">
                            <img src="/img/carlos-lopez.webp" class="img-fluid" alt="Equipo 3">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Carlos López</h5>
                            <p class="card-text text-secondary mb-4">Jefe de Ventas,
                                encargado de garantizar la mejor experiencia de compra para nuestros clientes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
