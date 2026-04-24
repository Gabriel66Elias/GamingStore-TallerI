{{-- ARCHIVO: resources/views/components/carrito.blade.php --}}
{{-- DESCRIPCIÓN: Componente visual del carrito lateral (Offcanvas). La lógica está en public/js/carrito.js --}}

<div class="offcanvas offcanvas-end offcanvas-minimalist" tabindex="-1" id="carritoLateral">
    
    {{-- Cabecera del Carrito --}}
    <div class="offcanvas-header p-4 border-bottom border-secondary border-opacity-10">
        <h5 class="offcanvas-title fw-bold text-uppercase tracking-wider">Tu Carrito</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    
    {{-- Cuerpo del Carrito --}}
    <div class="offcanvas-body p-4 d-flex flex-column">
        
        {{-- Contenedor Dinámico: Aquí carrito.js inyectará las tarjetas de los productos --}}
        <div id="contenedor-items-carrito" class="grow overflow-auto pe-2">
            </div>
        
        {{-- Pie del Carrito (Totales y Botones de Acción) --}}
        <div class="cart-footer-modern mt-auto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <span class="text-secondary fw-medium">Total Estimado</span>
                {{-- Aquí carrito.js inyectará el precio total --}}
                <span id="total-carrito" class="cart-total-amount">$0</span>
            </div>
            
            {{-- Llama a la función global finalizarCompra() ubicada en carrito.js --}}
            <button onclick="finalizarCompra()" class="btn btn-primary w-100 py-3 fw-bold rounded-3 mb-2 shadow-sm">
                FINALIZAR COMPRA
            </button>
            
            {{-- Llama a la función global vaciarCarrito() ubicada en carrito.js --}}
            {{-- CORRECCIÓN: Se cambió el </div> de cierre erróneo por un </button> --}}
            <button onclick="vaciarCarrito()" class="btn btn-link w-100 text-secondary text-decoration-none btn-sm">
                Limpiar carrito
            </button>
        </div>
        
    </div>
</div>