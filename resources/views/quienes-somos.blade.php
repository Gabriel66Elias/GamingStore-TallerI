@extends('layout.main')

@section('titulo', 'Quiénes Somos | GamingStation')

@section('contenido')
    <div class="container mt-5 mb-5">

        <div class="row mb-5 text-center">
            <div class="col-12">
                <h1 class="text-white fw-bold display-5">QUIÉNES SOMOS</h1>
                <p class="text-secondary lead">Conocé nuestra historia y al equipo detrás de GamingStation.</p>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-12 col-md-6">
                <div class="card card-nosotros h-100 shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        <h3 class="card-title fw-bold text-white mb-3">Nuestra Trayectoria</h3>
                        <p class="card-text text-secondary lh-lg mb-3">
                            GamingStation nació en 2020 con la misión de ofrecer a los gamers una experiencia de compra
                            única, centrada en la calidad y el alto rendimiento de nuestros productos.
                        </p>
                        <p class="card-text text-secondary lh-lg mb-0">
                            Desde entonces, hemos crecido hasta convertirnos en una de las tiendas de videojuegos más
                            confiables y reconocidas del país, gracias a nuestro compromiso con la satisfacción del cliente
                            y la pasión por los videojuegos.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card card-nosotros h-100 shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        <h3 class="card-title fw-bold text-white mb-3">Nuestro Compromiso</h3>
                        <p class="card-text text-secondary lh-lg mb-3">
                            En GamingStation, nos esforzamos por ofrecer una amplia selección de productos de alta calidad,
                            desde consolas y accesorios hasta los últimos lanzamientos en videojuegos. Nuestro equipo de
                            expertos está siempre disponible para brindar asesoramiento personalizado.
                        </p>
                        <p class="card-text text-secondary lh-lg mb-0">
                            Además, nos comprometemos a mantener precios competitivos y a ofrecer promociones exclusivas
                            para nuestros clientes, asegurando que cada compra en GamingStation sea una experiencia
                            satisfactoria y memorable.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-4 text-center">
            <div class="col-12">
                <h2 class="text-white fw-bold">NUESTRO EQUIPO</h2>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="card card-equipo h-100 text-center shadow-sm">
                    <div class="contenedor-img">
                        <img src="/img/juan-perez.webp" alt="Juan Pérez - CEO" class="img-fluid">
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold text-white mb-1">Juan Pérez</h4>
                        <p class="rol-destacado mb-3">Fundador y CEO</p>
                        <p class="card-text text-secondary text-sm">Con más de 15 años de experiencia en la industria de los
                            videojuegos, liderando la visión estratégica de GamingStation.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card card-equipo h-100 text-center shadow-sm">
                    <div class="contenedor-img">
                        <img src="/img/maria-garcia.webp" alt="María García - Marketing" class="img-fluid">
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold text-white mb-1">María García</h4>
                        <p class="rol-destacado mb-3">Directora de Experiencia del Cliente </p>
                        <p class="card-text text-secondary text-sm">Su misión es asegurar que cada envío llegue en tiempo y
                            forma a cualquier punto del país.
                            Lidera nuestro equipo de postventa para garantizarte un respaldo rápido y efectivo ante
                            cualquier consulta o trámite de garantía oficial.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card card-equipo h-100 text-center shadow-sm">
                    <div class="contenedor-img">
                        <img src="/img/carlos-lopez.webp" alt="Carlos López - Ventas" class="img-fluid">
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold text-white mb-1">Carlos López</h4>
                        <p class="rol-destacado mb-3">Jefe de Ventas</p>
                        <p class="card-text text-secondary text-sm">Amplia experiencia en atención al cliente y un profundo
                            conocimiento técnico de los productos que ofrecemos.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
