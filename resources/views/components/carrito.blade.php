{{-- resources/views/components/carrito.blade.php --}}
<div class="offcanvas offcanvas-end offcanvas-minimalist" tabindex="-1" id="carritoLateral">
    <div class="offcanvas-header p-4 border-bottom border-secondary border-opacity-10">
        <h5 class="offcanvas-title fw-bold text-uppercase tracking-wider">Tu Carrito</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    
    <div class="offcanvas-body p-4 d-flex flex-column">
        <div id="contenedor-items-carrito" class="grow overflow-auto pe-2">
        </div>
        
        <div class="cart-footer-modern mt-auto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <span class="text-secondary fw-medium">Total Estimado</span>
                <span id="total-carrito" class="cart-total-amount">$0</span>
            </div>
            
            <button onclick="finalizarCompra()" class="btn btn-primary w-100 py-3 fw-bold rounded-3 mb-2 shadow-sm">
                FINALIZAR COMPRA
            </button>
            
            <button onclick="vaciarCarrito()" class="btn btn-link w-100 text-secondary text-decoration-none btn-sm">
                Limpiar carrito
            </div>
        </div>
    </div>
</div>