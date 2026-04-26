<nav class="navbar navbar-expand-lg navbar-dark border-bottom py-3 sticky-top" style="z-index: 1040; background-color: #11131A; border-bottom-color: #1f222e !important;">
    <div class="container">
        {{-- Logo --}}
        <a class="navbar-brand fw-bold fs-4 logo-text" href="/">GAMING<span class="text-mars">STATION</span></a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            {{-- Enlaces de navegación con text-nowrap para que no se rompan en dos renglones --}}
            <div class="navbar-nav mx-auto align-items-center gap-1">
                <a class="nav-link px-2 text-nowrap {{ Request::is('/') ? 'active text-mars' : '' }}" href="/">Inicio</a>
                <a class="nav-link px-2 text-nowrap {{ Request::is('quienes-somos') ? 'active text-mars' : '' }}" href="/quienes-somos">Quiénes Somos</a>
                <a class="nav-link px-2 text-nowrap {{ Request::is('catalogo') ? 'active text-mars' : '' }}" href="/catalogo">Catálogo</a>
                <a class="nav-link px-2 text-nowrap {{ Request::is('contacto') ? 'active text-mars' : '' }}" href="/contacto">Contacto</a>
                <a class="nav-link px-2 text-nowrap {{ Request::is('terminos') ? 'active text-mars' : '' }}" href="/terminos">Términos</a>
            </div>

            {{-- Buscador y Carrito --}}
            <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">
                <form class="d-flex" action="/catalogo" method="GET">
                    <div class="input-group">
                        <input class="form-control input-charcoal text-light border-0 shadow-none" type="search" placeholder="Buscar..." name="q" style="background-color: #1a1d27;">
                        <button class="btn btn-mars-outline border-0" type="submit" style="background-color: #1a1d27;">
                            <img src="{{ asset('assets/search.svg') }}" style="width: 16px; filter: invert(1);">
                        </button>
                    </div>
                </form>

                <a class="btn btn-mars d-flex align-items-center position-relative" href="#carritoLateral" data-bs-toggle="offcanvas">
                    <img src="{{ asset('assets/cart3.svg') }}" class="me-2" style="width: 20px; filter: invert(1);">
                    <span class="d-none d-xl-inline text-nowrap">Carrito</span>
                    <span id="cart-count-badge" class="cart-badge d-none">0</span>
                </a>
            </div>
        </div>
    </div>
</nav>