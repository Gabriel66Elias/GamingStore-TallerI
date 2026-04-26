{{-- ARCHIVO: resources/views/components/carrito.blade.php --}}

<div class="offcanvas offcanvas-end offcanvas-minimalist" tabindex="-1" id="carritoLateral">
    
    {{-- Cabecera del Carrito --}}
    <div class="offcanvas-header p-4 border-bottom border-secondary border-opacity-10">
        <h5 class="offcanvas-title fw-black text-uppercase tracking-wider text-white">Tu <span class="text-mars">Carrito</span></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    
    {{-- Cuerpo del Carrito --}}
    <div class="offcanvas-body p-4 d-flex flex-column">
        
        {{-- Contenedor Dinámico --}}
        <div id="contenedor-items-carrito" class="grow overflow-auto pe-2">
            {{-- Inyectado por JS --}}
        </div>
        
        {{-- Pie del Carrito --}}
        <div class="cart-footer-modern mt-auto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <span class="text-secondary fw-medium text-uppercase" style="letter-spacing: 1px; font-size: 0.9rem;">Total Estimado</span>
                <span id="total-carrito" class="cart-total-amount text-white fw-black">$0</span>
            </div>
            
            {{-- Botón Pagar con el nuevo estilo --}}
            <button onclick="finalizarCompra()" class="btn btn-mars w-100 py-3 fw-bold rounded-3 mb-3 shadow-lg" style="font-size: 1.1rem; letter-spacing: 1px;">
                FINALIZAR COMPRA
            </button>
            
            {{-- Botón Vaciar --}}
            <button onclick="vaciarCarrito()" class="btn btn-link w-100 text-secondary text-decoration-none btn-sm" style="transition: color 0.3s;" onmouseover="this.style.color='#FF3B3B'" onmouseout="this.style.color='#6c757d'">
                Limpiar carrito
            </button>
        </div>
        
    </div>
</div>