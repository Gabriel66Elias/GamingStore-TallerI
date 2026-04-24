@extends('layout.main')

@section('titulo', 'Finalizar Compra')

@section('contenido')

<style>
    .card-checkout {
        height: auto !important; 
    }
    .card-checkout:hover {
        transform: none !important; 
        border-color: #2d3748 !important; 
    }
</style>

<div class="container mt-5 mb-5">
    <h2 class="fw-bold mb-4 text-uppercase">Finalizar Compra</h2>

    <form action="#" method="POST" id="form-checkout">
        @csrf
        <div class="row g-4">
            
            <div class="col-lg-8">
                
                {{-- 1. Datos para envio --}}
                <div class="card card-checkout bg-dark border-secondary mb-4 shadow-sm">
                    <div class="card-header border-secondary bg-black py-3">
                        <h5 class="mb-0 fw-bold text-white d-flex align-items-center">
                            {{-- SVG PERSON LOCAL --}}
                            <img src="{{ asset('assets/person-circle.svg') }}" alt="Datos" class="me-2" style="width: 24px; filter: invert(1);">
                            1. Datos de Facturación y Entrega
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label text-secondary small">Nombre</label>
                                <input type="text" class="form-control bg-dark text-white border-secondary" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary small">Apellido</label>
                                <input type="text" class="form-control bg-dark text-white border-secondary" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label text-secondary small">Email</label>
                                <input type="email" class="form-control bg-dark text-white border-secondary" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="form-label text-secondary small">Provincia</label>
                                <select class="form-select bg-dark text-white border-secondary" required>
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
                                <label class="form-label text-secondary small">Localidad</label>
                                <input type="text" class="form-control bg-dark text-white border-secondary" required>
                            </div>
                            <div class="col-md-9">
                                <label class="form-label text-secondary small">Dirección (Calle y altura)</label>
                                <input type="text" class="form-control bg-dark text-white border-secondary" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label text-secondary small">Código Postal</label>
                                <input type="text" class="form-control bg-dark text-white border-secondary" required>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2. Metodo de Envio --}}
                <div class="card card-checkout bg-dark border-secondary mb-4 shadow-sm">
                    <div class="card-header border-secondary bg-black py-3">
                        <h5 class="mb-0 fw-bold text-white d-flex align-items-center">
                            {{-- SVG BOXES LOCAL --}}
                            <img src="{{ asset('assets/boxes.svg') }}" alt="Envío" class="me-2" style="width: 24px; filter: invert(1);">
                            2. Método de Envío
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="form-check border border-secondary rounded p-3 mb-3 d-flex align-items-center">
                            <input class="form-check-input ms-1 me-3" type="radio" name="envio" id="envioCorreo" value="8500" required>
                            <label class="form-check-label w-100 d-flex justify-content-between align-items-center cursor-pointer" for="envioCorreo">
                                <span><strong>Correo Argentino</strong><br><small class="text-secondary">Envío a domicilio (3 a 5 días hábiles)</small></span>
                                <span class="text-success fw-bold">+$8.500</span>
                            </label>
                        </div>
                        <div class="form-check border border-secondary rounded p-3 d-flex align-items-center">
                            <input class="form-check-input ms-1 me-3" type="radio" name="envio" id="envioLocal" value="0" required>
                            <label class="form-check-label w-100 d-flex justify-content-between align-items-center cursor-pointer" for="envioLocal">
                                <span><strong>Retiro en Local</strong><br><small class="text-secondary">Av. 25 de Mayo 1234, Corrientes</small></span>
                                <span class="text-success fw-bold">Gratis</span>
                            </label>
                        </div>
                    </div>
                </div>

                {{-- 3. metodo de pago --}}
                <div class="card card-checkout bg-dark border-secondary shadow-sm">
                    <div class="card-header border-secondary bg-black py-3">
                        <h5 class="mb-0 fw-bold text-white d-flex align-items-center">
                            {{-- SVG CREDIT CARD LOCAL --}}
                            <img src="{{ asset('assets/credit-card.svg') }}" alt="Pago" class="me-2" style="width: 24px; filter: invert(1);">
                            3. Método de Pago
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="form-check border border-secondary rounded p-3 mb-3 d-flex align-items-center">
                            <input class="form-check-input ms-1 me-3" type="radio" name="pago" id="pagoMercadoPago" required>
                            <label class="form-check-label cursor-pointer" for="pagoMercadoPago">
                                <strong>Mercado Pago</strong><br><small class="text-secondary"></small>
                            </label>
                        </div>
                        <div class="form-check border border-secondary rounded p-3 d-flex align-items-center">
                            <input class="form-check-input ms-1 me-3" type="radio" name="pago" id="pagoTransferencia" required>
                            <label class="form-check-label cursor-pointer" for="pagoTransferencia">
                                <strong>Transferencia Bancaria</strong><br><small class="text-secondary"></small>
                            </label>
                        </div>
                    </div>
                </div>

            </div>

            {{-- resumen de orden --}}
            <div class="col-lg-4">
                <div class="card card-checkout bg-black border-primary shadow-lg sticky-top" style="top: 100px;">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4 border-bottom border-secondary pb-2">Resumen de Orden</h4>
                        
                        <div id="checkout-items" class="mb-4">
                            <div class="text-center text-secondary my-4">Cargando productos...</div>
                        </div>

                        <div class="border-top border-secondary pt-3 mb-3">
                            <div class="d-flex justify-content-between mb-2 small text-secondary">
                                <span>Subtotal</span>
                                <span id="checkout-subtotal">$0</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2 small text-secondary">
                                <span>Costo de Envío</span>
                                <span id="checkout-envio">$0</span>
                            </div>
                            <div class="d-flex justify-content-between mt-3 fs-4">
                                <span class="fw-bold">Total</span>
                                <span id="checkout-total" class="text-success fw-bold">$0</span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-3 fw-bold fs-5 mt-2 rounded-3">
                            Pagar Ahora
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const carrito = JSON.parse(localStorage.getItem('gaming_station_cart')) || [];
        const contenedorItems = document.getElementById('checkout-items');
        const subtotalEl = document.getElementById('checkout-subtotal');
        const envioEl = document.getElementById('checkout-envio');
        const totalEl = document.getElementById('checkout-total');
        const radiosEnvio = document.querySelectorAll('input[name="envio"]');

        let subtotal = 0;
        let costoEnvio = 0;

        if (carrito.length === 0) {
            contenedorItems.innerHTML = '<p class="text-danger text-center">Tu carrito está vacío.</p>';
        } else {
            contenedorItems.innerHTML = carrito.map(item => {
                const totalItem = item.precio * item.cantidad;
                subtotal += totalItem;
                return `
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-white p-1 rounded me-3" style="width: 50px; height: 50px;">
                            <img src="${item.imagen}" class="w-100 h-100 object-fit-contain">
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-0 text-white small">${item.nombre}</h6>
                            <small class="text-secondary">Cant: ${item.cantidad}</small>
                        </div>
                        <div class="text-success fw-bold small">
                            $${totalItem.toLocaleString('es-AR')}
                        </div>
                    </div>
                `;
            }).join('');
        }

        const actualizarTotales = () => {
            const total = subtotal + costoEnvio;
            subtotalEl.innerText = '$' + subtotal.toLocaleString('es-AR');
            envioEl.innerText = costoEnvio > 0 ? '+$' + costoEnvio.toLocaleString('es-AR') : 'Gratis';
            totalEl.innerText = '$' + total.toLocaleString('es-AR');
        };

        radiosEnvio.forEach(radio => {
            radio.addEventListener('change', (e) => {
                costoEnvio = parseInt(e.target.value);
                actualizarTotales();
            });
        });

        actualizarTotales();
    });
</script>
@endsection