<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingStation | @yield('titulo')</title>

    {{-- Bootstrap 5.3 (Local) --}}
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">

    {{-- Bootstrap Icons CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Estilos personalizados --}}
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body class="bg-dark text-light">

    {{-- NAVBAR MODERNA DE TRES COLUMNAS --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom border-secondary py-3 sticky-top" style="z-index: 1050;">
        <div class="container">

            {{-- 1. IZQUIERDA: Marca --}}
            <a class="navbar-brand fw-bold fs-4" href="/">GAMING<span class="text-primary">STATION</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                {{-- 2. CENTRO: Navegación Principal --}}
                <div class="navbar-nav mx-auto align-items-center">
                    <a class="nav-link px-3 {{ Request::is('/') ? 'active text-primary' : '' }}" href="/">Inicio</a>
                    <a class="nav-link px-3 {{ Request::is('quienes-somos') ? 'active text-primary' : '' }}" href="/quienes-somos">Quiénes Somos</a>
                    <a class="nav-link px-3 {{ Request::is('catalogo') ? 'active text-primary' : '' }}" href="/catalogo">Catálogo</a>
                    <a class="nav-link px-3 {{ Request::is('contacto') ? 'active text-primary' : '' }}" href="/contacto">Contacto</a>
                    <a class="nav-link px-3 {{ Request::is('terminos') ? 'active text-primary' : '' }}" href="/terminos">Términos</a>
                </div>

                {{-- 3. DERECHA: Buscador y Carrito --}}
                <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">

                    {{-- Buscador minimalista --}}
                    <form class="d-flex" role="search" action="/catalogo" method="GET">
                        <div class="input-group">
                            <input class="form-control bg-dark text-light border-secondary" type="search" placeholder="Buscar..." name="q" aria-label="Buscar">
                            <button class="btn btn-outline-primary" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>

                    {{-- Botón de Carrito con Contador (Badge) --}}
                    <a class="btn btn-primary d-flex align-items-center btn-cart-container position-relative"
                       href="#carritoLateral"
                       role="button"
                       data-bs-toggle="offcanvas"
                       aria-controls="carritoLateral">
                        <i class="bi bi-cart3 me-2 fs-5"></i>
                        <span class="d-none d-xl-inline">Carrito</span>
                        <span id="cart-count-badge" class="cart-badge d-none">0</span>
                    </a>
                </div>

            </div>
        </div>
    </nav>


    <main>
        @yield('contenido')
    </main>

    {{-- FOOTER --}}
    <footer class="text-center py-5 border-top border-secondary mt-5 bg-black">
        <div class="container">
            <p class="mb-2 fw-bold">GAMING<span class="text-primary">STATION</span></p>
            <p class="text-secondary small">&copy; 2026 - Todos los derechos reservados</p>
            <div class="d-flex justify-content-center gap-3 fs-5 mt-3">
                <i class="bi bi-instagram text-secondary"></i>
                <i class="bi bi-facebook text-secondary"></i>
                <i class="bi bi-twitter-x text-secondary"></i>
            </div>
        </div>
    </footer>

    {{-- COMPONENTE DEL CARRITO --}}
    <x-carrito />

    {{-- SCRIPTS BASE --}}
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    {{-- LÓGICA DEL CARRITO --}}
    <script>
        // Inicialización desde LocalStorage
        let carrito = JSON.parse(localStorage.getItem('gaming_station_cart')) || [];

        /**
         * Agrega un producto y abre el carrito automáticamente
         */
        function agregarAlCarrito(id, nombre, precio, stock, imagen) {
            const inputCant = document.getElementById('input-cantidad');
            const cantidadSeleccionada = inputCant ? parseInt(inputCant.value) : 1;

            const itemExistente = carrito.find(item => item.id === id);

            if (itemExistente) {
                if (itemExistente.cantidad + cantidadSeleccionada > stock) {
                    alert(`Lo sentimos, solo quedan ${stock} unidades disponibles en total.`);
                    return;
                }
                itemExistente.cantidad += cantidadSeleccionada;
            } else {
                carrito.push({ id, nombre, precio, stock, imagen, cantidad: cantidadSeleccionada });
            }

            guardarYRenderizar();

            // funacion para abrir el panel lateral automáticamente
            const cartEl = document.getElementById('carritoLateral');
            const bsOffcanvas = bootstrap.Offcanvas.getOrCreateInstance(cartEl);
            bsOffcanvas.show();
        }

        /**
         * Actualiza cantidades validando contra el stock máximo
         */
        function actualizarCantidad(id, nuevaCantidad) {
            const item = carrito.find(item => item.id === id);
            if (!item) return;

            nuevaCantidad = parseInt(nuevaCantidad);

            if (nuevaCantidad > item.stock) {
                alert(`No puedes superar el stock disponible (${item.stock} unidades).`);
                renderizarCarrito();
                return;
            }

            if (nuevaCantidad <= 0) {
                eliminarItem(id);
            } else {
                item.cantidad = nuevaCantidad;
                guardarYRenderizar();
            }
        }

        function eliminarItem(id) {
            carrito = carrito.filter(item => item.id !== id);
            guardarYRenderizar();
        }

        function vaciarCarrito() {
            if (confirm('¿Estás seguro de que quieres vaciar el carrito?')) {
                carrito = [];
                guardarYRenderizar();
            }
        }

        function guardarYRenderizar() {
            localStorage.setItem('gaming_station_cart', JSON.stringify(carrito));
            renderizarCarrito();
        }

        function renderizarCarrito() {
            const contenedor = document.getElementById('contenedor-items-carrito');
            const totalTxt = document.getElementById('total-carrito');
            const badge = document.getElementById('cart-count-badge');

            if (!contenedor) return;

            // Actualizar Contador en el Header (Badge)
            const totalProductos = carrito.reduce((sum, item) => sum + item.cantidad, 0);
            if (totalProductos > 0) {
                badge.innerText = totalProductos;
                badge.classList.remove('d-none');
            } else {
                badge.classList.add('d-none');
            }

            // Si el carrito está vacío
            if (carrito.length === 0) {
                contenedor.innerHTML = `
                    <div class="text-center mt-5 opacity-50">
                        <i class="bi bi-cart-x fs-1"></i>
                        <p class="mt-3">Tu carrito está vacío</p>
                    </div>`;
                totalTxt.innerText = '$0';
                return;
            }

            let totalGeneral = 0;
            contenedor.innerHTML = carrito.map(item => {
        totalGeneral += item.precio * item.cantidad;
        return `
            <div class="cart-item-modern d-flex gap-3 align-items-center shadow-sm">
                <img src="${item.imagen}" class="cart-item-img border border-secondary border-opacity-25" alt="${item.nombre}">

                <div class="grow"> <div class="d-flex justify-content-between align-items-start">
                        <span class="fw-bold text-white small">${item.nombre}</span>
                        <button class="btn btn-sm p-0 text-secondary hover-danger" onclick="eliminarItem('${item.id}')">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                    <div class="text-success fw-bold my-1">$${(item.precio * item.cantidad).toLocaleString('es-AR')}</div>

                    <div class="d-flex align-items-center gap-2 mt-2">
                        <label class="small text-secondary">Cant:</label>
                        <input type="number"
                               class="form-control form-control-sm bg-dark text-white border-secondary text-center"
                               style="width: 65px; height: 30px; font-size: 0.85rem;"
                               value="${item.cantidad}"
                               min="1"
                               max="${item.stock}"
                               onchange="actualizarCantidad('${item.id}', this.value)">
                    </div>
                </div>
            </div>`;
            }).join('');

            totalTxt.innerText = '$' + totalGeneral.toLocaleString('es-AR');
        }

        function finalizarCompra() {
            if (carrito.length === 0) {
                alert('El carrito está vacío.');
                return;
            }
            window.location.href = '/comercializacion';
        }

        // Primera carga al iniciar
        document.addEventListener('DOMContentLoaded', renderizarCarrito);
    </script>
</body>

</html>
