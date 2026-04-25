<nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom border-secondary py-3 sticky-top" style="z-index: 1040;">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="/">GAMING<span class="text-primary">STATION</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav mx-auto align-items-center">
                <a class="nav-link px-3 {{ Request::is('/') ? 'active text-primary' : '' }}" href="/">Inicio</a>
                <a class="nav-link px-3 {{ Request::is('quienes-somos') ? 'active text-primary' : '' }}" href="/quienes-somos">Quiénes Somos</a>
                <a class="nav-link px-3 {{ Request::is('catalogo') ? 'active text-primary' : '' }}" href="/catalogo">Catálogo</a>
                <a class="nav-link px-3 {{ Request::is('contacto') ? 'active text-primary' : '' }}" href="/contacto">Contacto</a>
                <a class="nav-link px-3 {{ Request::is('terminos') ? 'active text-primary' : '' }}" href="/terminos">Términos</a>
            </div>

            <div class="d-flex align-items-center gap-3">
                <form class="d-flex" action="/catalogo" method="GET">
                    <div class="input-group">
                        <input class="form-control bg-dark text-light border-secondary" type="search" placeholder="Buscar..." name="q">
                        <button class="btn btn-outline-primary" type="submit">
                            <img src="{{ asset('assets/search.svg') }}" style="width: 16px; filter: invert(1);">
                        </button>
                    </div>
                </form>

                <a class="btn btn-primary d-flex align-items-center position-relative" href="#carritoLateral" data-bs-toggle="offcanvas">
                    <img src="{{ asset('assets/cart3.svg') }}" class="me-2" style="width: 20px; filter: invert(1);">
                    <span class="d-none d-xl-inline">Carrito</span>
                    <span id="cart-count-badge" class="cart-badge d-none">0</span>
                </a>
            </div>
        </div>
    </div>
</nav>