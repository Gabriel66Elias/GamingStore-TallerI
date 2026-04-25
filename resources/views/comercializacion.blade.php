@extends('layout.main')

@section('titulo', 'Finalizar Compra')

@section('contenido')

    {{-- BLOQUE DE ESTILOS CSS PERSONALIZADOS PARA ESTA VISTA --}}
    <style>
        /* Evita que las tarjetas principales hagan el efecto de salto genérico */
        .card-checkout {
            height: auto !important;
        }

        .card-checkout:hover {
            transform: none !important;
            border-color: #2d3748 !important;
        }

        /* Clase utilitaria para ocultar secciones dinámicamente con JavaScript */
        .seccion-oculta {
            display: none;
        }

        /* ESTILOS DE LOS BOTONES DE SELECCIÓN (Tarjetas clickeables) */
        .btn-check-label {
            transition: all 0.3s ease;
            /* Transición suave para todos los efectos */
            cursor: pointer;
            /* Cambia el cursor a la "manito" */
            border: 2px solid #3f3f46;
            /* Borde gris oscuro en estado inactivo */
            background-color: #18181b;
            /* Fondo oscuro base del botón */
            border-radius: 0.5rem;
            /* Bordes redondeados modernos */
        }

        /* ESTADO HOVER: Arreglado. Ahora da un brillo violeta sutil en lugar de un gris oscuro */
        .btn-check-label:hover {
            border-color: #8b5cf6;
            /* Borde violeta brillante al pasar el mouse */
            background-color: rgba(139, 92, 246, 0.05);
            /* Fondo apenas tintado de violeta para que contraste con el fondo oscuro */
        }

        /* ESTADO SELECCIONADO: Cuando el input radio oculto está marcado (checked) */
        .btn-check:checked+.btn-check-label {
            border: 2px solid #8b5cf6 !important;
            /* Borde violeta fijo */
            background-color: rgba(139, 92, 246, 0.1) !important;
            /* Fondo violeta más notorio */
            transform: translateY(-3px);
            /* Efecto 3D de elevación */
            box-shadow: 0 6px 15px rgba(139, 92, 246, 0.25);
            /* Sombra violeta brillante debajo */
        }
    </style>

    {{-- CONTENEDOR PRINCIPAL DE LA PÁGINA --}}
    <div class="container mt-5 mb-5">
        <h2 class="fw-bold mb-4 text-uppercase">Finalizar Compra</h2>

        {{-- FORMULARIO GENERAL: Envuelve toda la pantalla para capturar el evento submit (Pagar) al final --}}
        <form id="form-checkout">
            @csrf {{-- Token de seguridad de Laravel --}}

            <div class="row g-4">

                {{-- COLUMNA IZQUIERDA (Ocupa 8 de las 12 columnas en pantallas grandes): Contiene los pasos de datos --}}
                <div class="col-lg-8">

                    {{-- PASO 1: DATOS DE FACTURACIÓN --}}
                    <div class="card card-checkout bg-dark border-secondary mb-4 shadow-sm">
                        {{-- Cabecera del Paso 1 --}}
                        <div class="card-header border-secondary bg-black py-3">
                            <h5 class="mb-0 fw-bold text-white d-flex align-items-center">
                                <img src="{{ asset('assets/person-circle.svg') }}" alt="Datos" class="me-2"
                                    style="width: 24px; filter: invert(1);">
                                1. Datos de Facturación
                            </h5>
                        </div>
                        {{-- Cuerpo del Paso 1: Inputs de texto básicos --}}
                        <div class="card-body p-4">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label text-secondary fw-bold small">Nombre</label>
                                    <input type="text" class="form-control bg-dark text-white border-secondary" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-secondary fw-bold small">Apellido</label>
                                    <input type="text" class="form-control bg-dark text-white border-secondary" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-secondary fw-bold small">Email</label>
                                    <input type="email" class="form-control bg-dark text-white border-secondary" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-secondary fw-bold small">Teléfono</label>
                                    <input type="tel" class="form-control bg-dark text-white border-secondary"
                                        placeholder="Ej: 3794123456" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- PASO 2: MÉTODO DE ENVÍO --}}
                    <div class="card card-checkout bg-dark border-secondary mb-4 shadow-sm">
                        {{-- Cabecera del Paso 2 --}}
                        <div class="card-header border-secondary bg-black py-3">
                            <h5 class="mb-0 fw-bold text-white d-flex align-items-center">
                                <img src="{{ asset('assets/boxes.svg') }}" alt="Envío" class="me-2"
                                    style="width: 24px; filter: invert(1);">
                                2. Método de Envío
                            </h5>
                        </div>
                        {{-- Cuerpo del Paso 2: Opciones de logística --}}
                        <div class="card-body p-4">
                            <div class="row g-3">

                                {{-- Botón 1: Retiro en Local --}}
                                <div class="col-12">
                                    {{-- Input radio oculto nativo de Bootstrap (btn-check) --}}
                                    <input type="radio" class="btn-check" name="tipo_envio" id="radioRetiro"
                                        value="retiro" required autocomplete="off">
                                    {{-- Etiqueta vinculada al input anterior. Toda el área visual es el botón --}}
                                    <label
                                        class="btn btn-check-label w-100 p-3 text-start d-flex justify-content-between align-items-center"
                                        for="radioRetiro">
                                        <span>
                                            <strong class="text-white fs-5">Retiro en Local</strong><br>
                                            <small class="text-secondary">Av. 25 de Mayo 1234, Corrientes</small>
                                        </span>
                                        <span class="text-success fw-bold fs-5">Gratis</span>
                                    </label>
                                </div>

                                {{-- Botón 2: Envío a Domicilio --}}
                                <div class="col-12">
                                    <input type="radio" class="btn-check" name="tipo_envio" id="radioEnvio"
                                        value="domicilio" autocomplete="off">
                                    <label
                                        class="btn btn-check-label w-100 p-3 text-start d-flex justify-content-between align-items-center"
                                        for="radioEnvio">
                                        <span>
                                            <strong class="text-white fs-5">Envío a Domicilio</strong><br>
                                            <small class="text-secondary">Entrega en la puerta de tu casa</small>
                                        </span>
                                        <span id="label-precio-envio" class="text-secondary small">Selecciona
                                            transporte...</span>
                                    </label>
                                </div>
                            </div>

                            {{-- SECCIÓN DINÁMICA: Este bloque completo está oculto por defecto. Solo aparece si seleccionan "Envío a Domicilio" --}}
                            <div id="seccion-domicilio" class="seccion-oculta mt-4 pt-4 border-top border-secondary">

                                <h6 class="text-white fw-bold mb-3">Selecciona el transporte:</h6>
                                <div class="row g-3 mb-4">
                                    {{-- Sub-opción A: Andreani --}}
                                    <div class="col-md-6">
                                        <input type="radio" class="btn-check" name="envio_precio" id="transAndreani"
                                            value="10500" autocomplete="off">
                                        <label class="btn btn-check-label h-100 w-100 p-3 text-start" for="transAndreani">
                                            <strong class="text-white fs-6">Andreani</strong><br>
                                            <span class="text-success fw-bold">$10.500</span>
                                        </label>
                                    </div>
                                    {{-- Sub-opción B: Correo Argentino --}}
                                    <div class="col-md-6">
                                        <input type="radio" class="btn-check" name="envio_precio" id="transCorreo"
                                            value="11000" autocomplete="off">
                                        <label class="btn btn-check-label h-100 w-100 p-3 text-start" for="transCorreo">
                                            <strong class="text-white fs-6">Correo Argentino</strong><br>
                                            <span class="text-success fw-bold">$11.000</span>
                                        </label>
                                    </div>
                                </div>

                                {{-- Campos de dirección de entrega. Si se abre esta sección, JS los vuelve obligatorios (required) --}}
                                <h6 class="text-white fw-bold mb-3">Dirección de entrega:</h6>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="small text-secondary fw-bold mb-1">Provincia</label>
                                        {{-- Mantenemos la clase input-domicilio para que el JS sepa cuándo hacerlo obligatorio --}}
                                        <select class="form-select bg-dark text-white border-secondary input-domicilio">
                                            <option selected disabled value="">Seleccione...</option>
                                            <option>Buenos Aires</option>
                                            <option>CABA</option>
                                            <option>Catamarca</option>
                                            <option>Chaco</option>
                                            <option>Chubut</option>
                                            <option>Córdoba</option>
                                            <option>Corrientes</option>
                                            <option>Entre Ríos</option>
                                            <option>Formosa</option>
                                            <option>Jujuy</option>
                                            <option>La Pampa</option>
                                            <option>La Rioja</option>
                                            <option>Mendoza</option>
                                            <option>Misiones</option>
                                            <option>Neuquén</option>
                                            <option>Río Negro</option>
                                            <option>Salta</option>
                                            <option>San Juan</option>
                                            <option>San Luis</option>
                                            <option>Santa Cruz</option>
                                            <option>Santa Fe</option>
                                            <option>Santiago del Estero</option>
                                            <option>Tierra del Fuego</option>
                                            <option>Tucumán</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small text-secondary fw-bold mb-1">Localidad</label>
                                        <input type="text"
                                            class="form-control bg-dark text-white border-secondary input-domicilio">
                                    </div>
                                    <div class="col-md-9">
                                        <label class="small text-secondary fw-bold mb-1">Calle y Altura</label>
                                        <input type="text"
                                            class="form-control bg-dark text-white border-secondary input-domicilio">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="small text-secondary fw-bold mb-1">Codigo Postal</label>
                                        <input type="text"
                                            class="form-control bg-dark text-white border-secondary input-domicilio">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- PASO 3: MÉTODO DE PAGO --}}
                    <div class="card card-checkout bg-dark border-secondary shadow-sm">
                        {{-- Cabecera del Paso 3 --}}
                        <div class="card-header border-secondary bg-black py-3">
                            <h5 class="mb-0 fw-bold text-white d-flex align-items-center">
                                <img src="{{ asset('assets/credit-card.svg') }}" alt="Pago" class="me-2"
                                    style="width: 24px; filter: invert(1);">
                                3. Método de Pago
                            </h5>
                        </div>
                        {{-- Cuerpo del Paso 3: Tarjeta vs Transferencia --}}
                        <div class="card-body p-4">
                            <div class="row g-3">

                                {{-- Opción Pago 1: Tarjeta --}}
                                <div class="col-12">
                                    <input type="radio" class="btn-check" name="metodo_pago" id="pagoTarjeta"
                                        value="tarjeta" required autocomplete="off">
                                    <label class="btn btn-check-label w-100 p-3 text-start" for="pagoTarjeta">
                                        <strong class="text-white fs-5">Tarjeta de Crédito o Débito</strong><br>
                                        <small class="text-secondary">Pagos seguros con cifrado bancario</small>
                                    </label>
                                </div>

                                {{-- SECCIÓN DINÁMICA: Formulario de la tarjeta (Oculto por defecto) --}}
                                <div id="form-tarjeta"
                                    class="seccion-oculta col-12 p-4 bg-black rounded border border-secondary mt-3 shadow-lg">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="small text-secondary fw-bold mb-1">Nombre y Apellido (Como
                                                aparece en la tarjeta)</label>
                                            <input type="text" class="form-control bg-dark border-secondary text-white"
                                                placeholder="Ej: JUAN PEREZ">
                                        </div>
                                        <div class="col-12">
                                            <label class="small text-secondary fw-bold mb-1">Número de Tarjeta</label>
                                            <input type="text" class="form-control bg-dark border-secondary text-white"
                                                placeholder="0000 0000 0000 0000">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small text-secondary fw-bold mb-1">Vencimiento</label>
                                            <input type="text" class="form-control bg-dark border-secondary text-white"
                                                placeholder="MM/AA">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small text-secondary fw-bold mb-1">CVC / CVV</label>
                                            <input type="text" class="form-control bg-dark border-secondary text-white"
                                                placeholder="123">
                                        </div>
                                    </div>
                                </div>

                                {{-- Opción Pago 2: Transferencia --}}
                                <div class="col-12">
                                    <input type="radio" class="btn-check" name="metodo_pago" id="pagoTransf"
                                        value="transferencia" autocomplete="off">
                                    <label class="btn btn-check-label w-100 p-3 text-start mt-2" for="pagoTransf">
                                        <strong class="text-white fs-5">Transferencia Bancaria</strong><br>
                                        <small class="text-secondary">Abona directamente a nuestra cuenta bancaria</small>
                                    </label>
                                </div>

                                {{-- SECCIÓN DINÁMICA: Datos bancarios (Oculto por defecto) --}}
                                <div id="info-transferencia"
                                    class="seccion-oculta col-12 p-4 bg-black rounded border border-secondary mt-3 text-center shadow-lg">
                                    <p class="mb-2 text-primary fw-bold small text-uppercase">Datos de la cuenta receptora:
                                    </p>
                                    <h5 class="text-white mb-1">CBU: <span
                                            class="fw-normal text-secondary">00000031000123456789</span></h5>
                                    <h5 class="text-white mb-0">Alias: <span
                                            class="fw-normal text-secondary">GAMING.STATION.MP</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- COLUMNA DERECHA (Ocupa 4 de las 12 columnas): Panel fijo con los totales --}}
                <div class="col-lg-4">
                    {{-- Panel flotante gracias a sticky-top --}}
                    <div class="card card-checkout bg-black border-primary shadow-lg sticky-top"
                        style="top: 120px; z-index: 10;">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4 border-bottom border-secondary pb-2">Resumen</h4>

                            {{-- DIV DONDE JAVASCRIPT INYECTARÁ LOS PRODUCTOS DEL LOCALSTORAGE --}}
                            <div id="checkout-items" class="mb-4"></div>

                            {{-- Desglose de precios matemáticos --}}
                            <div class="border-top border-secondary pt-3">
                                <div class="d-flex justify-content-between mb-2 small text-secondary">
                                    <span>Subtotal</span>
                                    <span id="checkout-subtotal">$0</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2 small text-secondary">
                                    <span>Envío</span>
                                    <span id="checkout-envio">$0</span>
                                </div>
                                <div class="d-flex justify-content-between mt-3 fs-4">
                                    <span class="fw-bold">Total</span>
                                    <span id="checkout-total" class="text-success fw-bold">$0</span>
                                </div>
                            </div>

                            {{-- BOTÓN SUBMIT: Gatilla la validación HTML y luego el evento JS para finalizar --}}
                            <button type="submit"
                                class="btn btn-primary w-100 py-3 fw-bold fs-5 mt-4 rounded-3 shadow">PAGAR AHORA</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    {{-- SCRIPT: Lógica de la página de comercialización --}}
    <script>
        // El código espera a que todo el HTML se dibuje en pantalla antes de ejecutar la lógica
        document.addEventListener('DOMContentLoaded', () => {

            // 1. CARGA DE DATOS: Traemos los productos de la memoria del navegador
            const carrito = JSON.parse(localStorage.getItem('gaming_station_cart')) || [];

            // Referencias a los lugares donde inyectaremos texto
            const subtotalEl = document.getElementById('checkout-subtotal');
            const envioEl = document.getElementById('checkout-envio');
            const totalEl = document.getElementById('checkout-total');

            // Variables para llevar las matemáticas de la cuenta
            let subtotal = 0;
            let costoEnvio = 0;

            // 2. RENDERIZADO DEL RESUMEN: Pintamos cada producto en la tarjeta derecha
            const contenedorItems = document.getElementById('checkout-items');
            if (carrito.length === 0) {
                // Si el usuario llega hasta aquí engañando al sistema con el carrito vacío
                contenedorItems.innerHTML = '<p class="text-danger small text-center">No hay productos.</p>';
            } else {
                // Si hay productos, mapeamos el arreglo a HTML
                contenedorItems.innerHTML = carrito.map(item => {
                    const totalItem = item.precio * item.cantidad; // Precio unitario * Cantidad
                    subtotal += totalItem; // Sumamos al subtotal general
                    return `<div class="d-flex align-items-center mb-3">
                        <div class="bg-white p-1 rounded me-3" style="width: 50px; height: 50px;"><img src="${item.imagen}" class="w-100 h-100 object-fit-contain"></div>
                        <div class="flex-grow-1"><h6 class="mb-0 text-white small">${item.nombre}</h6><small class="text-secondary">Cant: ${item.cantidad}</small></div>
                        <div class="text-success fw-bold small">$${totalItem.toLocaleString('es-AR')}</div>
                    </div>`;
                }).join('');
            }

            // 3. FUNCIÓN GLOBAL DE MATEMÁTICAS: Actualiza los números en pantalla con formato argentino
            const actualizarTotales = () => {
                const total = subtotal + costoEnvio;
                subtotalEl.innerText = '$' + subtotal.toLocaleString('es-AR');
                envioEl.innerText = costoEnvio > 0 ? '+$' + costoEnvio.toLocaleString('es-AR') : 'Gratis';
                totalEl.innerText = '$' + total.toLocaleString('es-AR');
            };

            // 4. LÓGICA DE ENVÍO Y FORMULARIOS CONDICIONALES
            const seccionDomicilio = document.getElementById('seccion-domicilio');
            const inputsDomicilio = document.querySelectorAll('.input-domicilio');

            // Escuchamos cuando el usuario cambia entre Retiro Local y Envío a Domicilio
            document.querySelectorAll('input[name="tipo_envio"]').forEach(radio => {
                radio.addEventListener('change', (e) => {
                    if (e.target.value === 'domicilio') {
                        // Abre el panel y vuelve obligatorios los inputs de dirección
                        seccionDomicilio.style.display = 'block';
                        inputsDomicilio.forEach(i => i.required = true);
                    } else {
                        // Cierra el panel, quita la obligatoriedad, reinicia el costo y desmarca transportes
                        seccionDomicilio.style.display = 'none';
                        inputsDomicilio.forEach(i => i.required = false);
                        costoEnvio = 0;
                        document.querySelectorAll('input[name="envio_precio"]').forEach(r => r
                            .checked = false);
                        actualizarTotales();
                    }
                });
            });

            // Escuchamos cuando el usuario elige entre Andreani o Correo Argentino
            document.querySelectorAll('input[name="envio_precio"]').forEach(radio => {
                radio.addEventListener('change', (e) => {
                    costoEnvio = parseInt(e.target.value); // Convertimos el string a número entero
                    actualizarTotales(); // Recalculamos el total final
                });
            });

            // 5. LÓGICA DE MEDIOS DE PAGO
            const formTarjeta = document.getElementById('form-tarjeta');
            const infoTransf = document.getElementById('info-transferencia');

            // Escuchamos cuando cambia entre Tarjeta y Transferencia
            document.querySelectorAll('input[name="metodo_pago"]').forEach(radio => {
                radio.addEventListener('change', (e) => {
                    if (e.target.value === 'tarjeta') {
                        formTarjeta.style.display = 'block'; // Muestra inputs de la tarjeta
                        infoTransf.style.display = 'none'; // Oculta alias y CBU
                    } else {
                        formTarjeta.style.display = 'none';
                        infoTransf.style.display = 'block';
                    }
                });
            });

            // 6. MANEJO DEL BOTÓN "PAGAR AHORA" (Submit)
            document.getElementById('form-checkout').addEventListener('submit', (e) => {
                e.preventDefault(); // Detiene la recarga automática de la página

                // Validación de seguridad adicional
                if (carrito.length === 0) {
                    alert('El carrito está vacío. Agrega productos antes de pagar.');
                    return;
                }

                // Vaciamos la base de datos local y redirigimos a la pantalla final de éxito
                localStorage.removeItem('gaming_station_cart');
                window.location.href = '/confirmacion-pedido';
            });

            // Ejecutamos la matemática por primera vez para poner todo en 0 o calcular el subtotal puro
            actualizarTotales();
        });
    </script>
@endsection
