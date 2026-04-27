@extends('layout.main')

@section('titulo', 'Inicio')

@section('contenido')

    {{-- ESTILOS ESPECÍFICOS PARA LA PÁGINA DE INICIO --}}
    <style>
        /* Tarjetas de Categoría Cuadradas con Gradiente Premium y Hover Mars Red */
        .card-categoria {
            /* NUEVO: Fondo con gradiente diagonal */
            background: linear-gradient(145deg, #2d313f 0%, #000000 100%);
            border: 2px solid transparent;
            border-radius: 1rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            aspect-ratio: 1 / 1;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5); /* Sombra base para despegarla del fondo */
        }

        .card-categoria:hover {
            transform: translateY(-8px);
            border-color: #FF3B3B !important;
            box-shadow: 0 10px 25px rgba(255, 59, 59, 0.15) !important;
            /* NUEVO: El gradiente se aclara un poco al pasar el mouse */
            background: linear-gradient(145deg, #242836 0%, #11131A 100%);
        }

        /* Botón Conócenos personalizado para que la letra no se ponga negra */
        .btn-conocenos {
            border: 2px solid rgba(255, 255, 255, 0.7);
            color: #ffffff;
            background-color: rgba(11, 12, 16, 0.6);
            /* Fondo negro semi-transparente */
            transition: all 0.3s ease;
        }

        .btn-conocenos:hover {
            background-color: rgba(255, 255, 255, 0.15);
            /* Se aclara el fondo sutilmente */
            border-color: #ffffff;
            color: #ffffff !important;
            /* Fuerza a que la letra siga siendo blanca */
            transform: translateY(-2px);
        }
    </style>

    {{-- 1. ESTILO DE FONDO MODERNO Y MINIMALISTA (Grid + Brillo Sutil) --}}
    <style>
        .fondo-minimalista-grid {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            pointer-events: none;

            /* Color base ultra oscuro */
            background-color: #0b0c10;

            /* Dibujo de la cuadrícula con líneas blancas al 3% de opacidad */
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
            /* Tamaño de los cuadraditos */
        }

        /* Halo Mars Red centrado arriba para darle el toque Gaming premium */
        .brillo-rojo-cenital {
            position: absolute;
            top: -20%;
            left: 50%;
            transform: translateX(-50%);
            width: 70vw;
            height: 60vh;
            background: radial-gradient(ellipse at center, rgba(255, 59, 59, 0.08) 0%, transparent 70%);
            filter: blur(60px);
            z-index: -1;
        }

        /* Degradado en la parte inferior para que la cuadrícula se desvanezca suavemente hacia abajo */
        .mascara-difuminada {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40vh;
            background: linear-gradient(to top, #0b0c10 10%, transparent 100%);
        }
    </style>

    {{-- 2. DIVS QUE DIBUJAN EL FONDO --}}
    <div class="fondo-minimalista-grid">
        <div class="brillo-rojo-cenital"></div>
        <div class="mascara-difuminada"></div>
    </div>

    {{-- HEADER CON CARRUSEL DE FONDO --}}
    <header class="position-relative mb-5" style="height: 75vh; min-height: 600px; overflow: hidden;">

        <div id="heroCarousel" class="carousel slide carousel-fade h-100" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-indicators" style="z-index: 5;">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner h-100">
                <div class="position-absolute top-0 inset-s-0 w-100 h-100"
                    style="background: linear-gradient(to bottom, rgba(17, 19, 26, 0.3) 0%, #0b0c10 100%); z-index: 1;">
                </div>

                <div class="carousel-item active h-100">
                    <img src="/img/carrusel1.webp" class="d-block w-100 h-100 object-fit-cover" alt="Setup Gaming 1">
                </div>
                <div class="carousel-item h-100">
                    <img src="/img/carrusel2.webp" class="d-block w-100 h-100 object-fit-cover" alt="Setup Gaming 2">
                </div>
                <div class="carousel-item h-100">
                    <img src="/img/carrusel3.webp" class="d-block w-100 h-100 object-fit-cover" alt="Consolas">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev"
                style="z-index: 5;">
                <span class="carousel-control-prev-icon" aria-hidden="true"
                    style="filter: drop-shadow(0 0 5px rgba(255, 59, 59, 0.5));"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next"
                style="z-index: 5;">
                <span class="carousel-control-next-icon" aria-hidden="true"
                    style="filter: drop-shadow(0 0 5px rgba(255, 59, 59, 0.5));"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        {{-- TEXTO SUPERPUESTO --}}
        <div class="position-absolute top-50 start-50 translate-middle w-100 text-center" style="z-index: 2;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        {{-- TÍTULO MODIFICADO: Letra fina (fw-light) mezclada con la palabra fuerte en negrita (fw-bold) --}}
                        <h1 class="display-4 fw-light mb-3 text-white text-uppercase"
                            style="letter-spacing: 1px; text-shadow: 0 4px 15px rgba(0,0,0,0.8);">
                            Elevá tu juego al <span class="text-mars fw-bold">siguiente nivel</span>
                        </h1>
                        {{-- SUBTÍTULO --}}
                        <p class="lead mb-5 text-light fs-5 fw-normal" style="text-shadow: 0 2px 10px rgba(0,0,0,0.8);">
                            Las mejores consolas, hardware variado y periféricos del mejor nivel. Todo con excelente precio y
                            calidad :)
                        </p>

                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a href="/catalogo"
                                class="btn btn-mars btn-lg px-5 py-3 shadow-lg d-inline-flex align-items-center justify-content-center gap-2"
                                style="border-radius: 0.8rem;">
                                <img src="{{ asset('assets/controller.svg') }}" alt="controller"
                                    style="width: 22px; height: 22px; filter: invert(1);">
                                <span>Ver Catálogo</span>
                            </a>
                            {{-- BOTÓN CONÓCENOS MODIFICADO: Usa la nueva clase .btn-conocenos --}}
                            <a href="/quienes-somos" class="btn btn-conocenos btn-lg px-5 py-3 fw-bold"
                                style="border-radius: 0.8rem;">
                                Conócenos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- SECCIÓN DE TARJETAS --}}
    <main class="container mb-5 pb-5">
        <div class="row text-center g-4">

            {{-- Tarjeta 1: Consolas --}}
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="/catalogo" class="text-decoration-none">
                    <div class="card card-categoria p-2 cursor-pointer shadow-sm">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center w-100">
                            <div class="mb-3 d-flex align-items-center justify-content-center rounded-circle"
                                style="width: 65px; height: 65px; background-color: rgba(255, 59, 59, 0.1);">
                                <img src="{{ asset('assets/playstation.svg') }}" alt="playstation"
                                    style="width: 32px; height: 32px; filter: invert(1);">
                            </div>
                            <h4 class="fw-black mb-2 text-white text-uppercase fs-5">Consolas</h4>
                            <p class="text-secondary mb-0 lh-sm px-2" style="font-size: 0.85rem;">PS5, Switch y Xbox con
                                garantía oficial.</p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Tarjeta 2: Periféricos --}}
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="/catalogo" class="text-decoration-none">
                    <div class="card card-categoria p-2 cursor-pointer shadow-sm">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center w-100">
                            <div class="mb-3 d-flex align-items-center justify-content-center rounded-circle"
                                style="width: 65px; height: 65px; background-color: rgba(255, 59, 59, 0.1);">
                                <img src="{{ asset('assets/mouse3.svg') }}" alt="mouse"
                                    style="width: 32px; height: 32px; filter: invert(1);">
                            </div>
                            <h4 class="fw-black mb-2 text-white text-uppercase fs-5">Periféricos</h4>
                            <p class="text-secondary mb-0 lh-sm px-2" style="font-size: 0.85rem;">Periféricos
                                profesionales para tener la mejor experiencia.</p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Tarjeta 3: Gaming TVs --}}
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="/catalogo" class="text-decoration-none">
                    <div class="card card-categoria p-2 cursor-pointer shadow-sm">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center w-100">
                            <div class="mb-3 d-flex align-items-center justify-content-center rounded-circle"
                                style="width: 65px; height: 65px; background-color: rgba(255, 59, 59, 0.1);">
                                <img src="{{ asset('assets/tv.svg') }}" alt="tv"
                                    style="width: 32px; height: 32px; filter: invert(1);">
                            </div>
                            <h4 class="fw-black mb-2 text-white text-uppercase fs-5">TVs y Monitores</h4>
                            <p class="text-secondary mb-0 lh-sm px-2" style="font-size: 0.85rem;">Pantallas 4K y los
                                mejores monitores</p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Tarjeta 4: Hardware --}}
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="/catalogo" class="text-decoration-none">
                    <div class="card card-categoria p-2 cursor-pointer shadow-sm">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center w-100">
                            <div class="mb-3 d-flex align-items-center justify-content-center rounded-circle"
                                style="width: 65px; height: 65px; background-color: rgba(255, 59, 59, 0.1);">
                                <img src="{{ asset('assets/cpu.svg') }}" alt="cpu"
                                    style="width: 32px; height: 32px; filter: invert(1);">
                            </div>
                            <h4 class="fw-black mb-2 text-white text-uppercase fs-5">Hardware</h4>
                            <p class="text-secondary mb-0 lh-sm px-2" style="font-size: 0.85rem;">Los mejores componentes
                                para tu PC.</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </main>
@endsection
