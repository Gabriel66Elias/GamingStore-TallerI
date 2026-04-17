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
                        <div class="card-body text-center">
                            <div class="contenedor-img mb-3">
                                <img src="/img/juan-perez.webp" alt="Fundador y CEO de GamingStation"
                                    class="img-fluid square">
                            </div>
                            <h5 class="card-title fw-bold">Juan Pérez</h5>
                            <p class="card-text text-secondary">Fundador y CEO de GamingStation. Con más de 15 años de experiencia
                                en la industria de los videojuegos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card shadow h-100">
                        <div class="card-body text-center">
                            <div class="contenedor-img mb-3">
                                <img src="/img/maria-garcia.webp" alt="Directora de Marketing" class="img-fluid square">
                            </div>
                            <h5 class="card-title fw-bold">María García</h5>
                            <p class="card-text text-secondary">Directora de Marketing. Apasionada por las estrategias digitales y la conexión con
                                la comunidad gamer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card shadow h-100">
                        <div class="card-body text-center">
                            <div class="contenedor-img mb-3">
                                <img src="/img/carlos-lopez.webp" alt="Jefe de Ventas" class="img-fluid square" style="border: 4px solid #110039">
                            </div>
                            <h5 class="card-title fw-bold">Carlos López</h5>
                            <p class="card-text text-secondary">Jefe de Ventas, con una amplia experiencia en atención al
                                cliente y un profundo conocimiento de los productos que ofrecemos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
