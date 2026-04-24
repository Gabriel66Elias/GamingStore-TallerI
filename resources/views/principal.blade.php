@extends('layout.main')

@section('titulo', 'Inicio')

@section('contenido')
    {{-- HEADER CON CARRUSEL DE FONDO --}}
    <header class="position-relative mb-5" style="height: 70vh; min-height: 500px; overflow: hidden;">
        
        {{-- EL CARRUSEL (Capa Inferior) --}}
        <div id="heroCarousel" class="carousel slide carousel-fade h-100" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-indicators" style="z-index: 3;">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>
            
            <div class="carousel-inner h-100">
                <div class="position-absolute top-0 start-s-0 w-100 h-100 bg-black opacity-50" style="z-index: 1;"></div>

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

            {{-- Controles Ocultos (Opcional: puedes quitarlos si solo quieres que pase solo) --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" style="z-index: 3;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" style="z-index: 3;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        {{-- TEXTO SUPERPUESTO (Capa Superior) --}}
        <div class="position-absolute top-50 start-50 translate-middle w-100 text-center" style="z-index: 2;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="display-3 fw-bold mb-3 text-white" style="letter-spacing: -1px; text-shadow: 0 4px 15px rgba(0,0,0,0.5);">
                            Elevá tu juego al siguiente nivel
                        </h1>
                        <p class="lead mb-5 text-light fs-4" style="text-shadow: 0 2px 10px rgba(0,0,0,0.5);">
                            Las mejores consolas, hardware de punta y lanzamientos físicos en un solo lugar.
                        </p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a href="/catalogo" class="btn btn-primary btn-lg px-5 py-3 fw-bold rounded-pill shadow d-inline-flex align-items-center gap-2">
                                <img src="{{ asset('assets/controller.svg') }}" alt="controller" style="width: 24px; height: 24px; filter: invert(1);">
                                <span>Ver Catálogo</span>
                            </a>
                            <a href="/quienes-somos" class="btn btn-light btn-lg px-5 py-3 fw-bold rounded-pill">
                                Conócenos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- SECCIÓN DE TARJETAS (CARACTERÍSTICAS) --}}
    <main class="container">
        <div class="row text-center mb-5 g-4">

            <div class="col-md-3">
                <div class="card h-100 border-0 bg-dark text-light hover-elevate">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <a href="#"><img src="{{ asset('assets/playstation.svg') }}" alt="playstation" style="width: 50px; height: 50; filter: invert(1); opacity: 1;"></a>
                        </div>
                        <h3 class="fw-bold mb-3">Consolas</h3>
                        <p class="text-secondary mb-0">PS5, Nintendo Switch y Xbox Series X disponibles con garantía oficial.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card h-100 border-0 bg-dark text-light hover-elevate">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <a href="#"><img src="{{ asset('assets/mouse3.svg') }}" alt="mouse" style="width: 50px; height: 50; filter: invert(1); opacity: 1;"></a>
                        </div>
                        <h3 class="fw-bold mb-3">Periféricos</h3>
                        <p class="text-secondary mb-0">Mandos, auriculares y volantes para una experiencia inmersiva total.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card h-100 border-0 bg-dark text-light hover-elevate">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <a href="#"><img src="{{ asset('assets/tv.svg') }}" alt="tv" style="width: 50px; height: 50; filter: invert(1); opacity: 1;"></a>
                        </div>
                        <h3 class="fw-bold mb-3">Gaming TVs</h3>
                        <p class="text-secondary mb-0">Pantallas 4K con bajo input-lag para que no pierdas ni un solo frame.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ">
                <div class="card h-100 border-0 bg-dark text-light hover-elevate">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <a href="#"><img src="{{ asset('assets/cpu.svg') }}" alt="cpu" style="width: 50px; height: 50; filter: invert(1); opacity: 1;"></a>
                        </div>
                        <h3 class="fw-bold mb-3">Hardware</h3>
                        <p class="text-secondary mb-0">Los mejores componetes para tu PC.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection