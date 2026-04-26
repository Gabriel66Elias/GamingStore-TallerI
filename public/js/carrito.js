/**
 * ARCHIVO: carrito.js
 * DESCRIPCIÓN: Gestión del estado del carrito, persistencia en LocalStorage 
 * y manipulación dinámica del DOM para GamingStation.
 */

// 1. ESTADO GLOBAL: Se inicializa recuperando datos del navegador o como un array vacío.
let carrito = JSON.parse(localStorage.getItem('gaming_station_cart')) || [];

/**
 * AÑADIR PRODUCTOS: Gestiona la lógica de inserción y control de stock.
 */
function agregarAlCarrito(id, nombre, precio, stock, imagen) {
    id = String(id);
    // Captura la cantidad del input de la vista de detalles (si existe)
    const inputCant = document.getElementById('input-cantidad');
    const cantidadSeleccionada = inputCant ? parseInt(inputCant.value) : 1;

    // Busca si el producto ya está en el carrito para no duplicar filas
    const itemExistente = carrito.find(item => item.id === id);

    if (itemExistente) {
        // Validación crítica: No permitir agregar más de lo que hay en stock
        if (itemExistente.cantidad + cantidadSeleccionada > stock) {
            alert(`Stock insuficiente. Solo quedan ${stock} unidades.`);
            return;
        }
        itemExistente.cantidad += cantidadSeleccionada;
    } else {
        // Si es nuevo, se crea el objeto y se empuja al array
        carrito.push({ id, nombre, precio, stock, imagen, cantidad: cantidadSeleccionada });
    }

    actualizarInterfaz();

    // Feedback visual: Abre el panel lateral automáticamente al agregar
    const cartEl = document.getElementById('carritoLateral');
    const bsOffcanvas = bootstrap.Offcanvas.getOrCreateInstance(cartEl);
    bsOffcanvas.show();
}

/**
 * MODIFICAR CANTIDADES: Permite al usuario cambiar unidades desde el carrito.
 */
function actualizarCantidad(id, nuevaCantidad) {
    const item = carrito.find(item => item.id === id);
    if (!item) return;

    nuevaCantidad = parseInt(nuevaCantidad);

    // Validación de límites (Stock máximo y mínimo de 1)
    if (nuevaCantidad > item.stock) {
        alert(`Límite de stock alcanzado: ${item.stock} unidades.`);
        renderizarCarrito(); // Revierte el input al valor anterior
        return;
    }

    if (nuevaCantidad <= 0) {
        eliminarItem(id);
    } else {
        item.cantidad = nuevaCantidad;
        actualizarInterfaz();
    }
}

/**
 * ELIMINAR ESTRUCTURADO: Filtra el array para quitar el producto seleccionado.
 */
function eliminarItem(id) {
    carrito = carrito.filter(item => item.id !== id);
    actualizarInterfaz();
}

/**
 * VACIAR TODO: Limpia el estado y la memoria local.
 */
function vaciarCarrito() {
    if (confirm('¿Deseas eliminar todos los productos del carrito?')) {
        carrito = [];
        actualizarInterfaz();
    }
}

/**
 * PERSISTENCIA Y RENDER: Orquesta el guardado y la actualización visual.
 */
function actualizarInterfaz() {
    // Sincroniza con el disco duro del navegador (JSON String)
    localStorage.setItem('gaming_station_cart', JSON.stringify(carrito));
    renderizarCarrito();
}

/**
 * RENDERIZADO DINÁMICO: Construye el HTML inyectando los datos del array.
 */
function renderizarCarrito() {
    const contenedor = document.getElementById('contenedor-items-carrito');
    const totalTxt = document.getElementById('total-carrito');
    const badge = document.getElementById('cart-count-badge');

    if (!contenedor) return;

    // Actualiza el contador (Badge) en la Navbar
    const totalProductos = carrito.reduce((sum, item) => sum + item.cantidad, 0);
    if (totalProductos > 0) {
        badge.innerText = totalProductos;
        badge.classList.remove('d-none');
    } else {
        badge.classList.add('d-none');
    }

    // Caso: Carrito Vacío
    if (carrito.length === 0) {
        contenedor.innerHTML = `
            <div class="text-center mt-5 opacity-50">
                <img src="/assets/cart3.svg" style="width: 48px; height: 48px; filter: invert(1); opacity: 0.5;">
                <p class="mt-3 text-white fw-light">Tu carrito está vacío</p>
            </div>`;
        totalTxt.innerText = '$0';
        return;
    }

    // Caso: Con Productos (Generación de tarjetas flexibles con el nuevo diseño)
    let totalGeneral = 0;
    contenedor.innerHTML = carrito.map(item => {
        totalGeneral += item.precio * item.cantidad;
        return `
            <div class="cart-item-modern d-flex align-items-center">
                
                <button class="btn-eliminar-carrito" onclick="eliminarItem('${item.id}')" title="Eliminar producto">&times;</button>
                
                <div class="cart-item-img me-3">
                    <img src="${item.imagen}" alt="${item.nombre}" class="w-100 h-100 object-fit-contain">
                </div>
                
                <div class="grow">
                    <h6 class="mb-1 text-white fw-bold pe-4" style="font-size: 0.95rem;">${item.nombre}</h6>
                    <div class="text-success fw-bold mb-2">$${(item.precio * item.cantidad).toLocaleString('es-AR')}</div>
                    
                    <input type="number" class="input-dark text-center" value="${item.cantidad}" min="1" 
                           style="width: 60px; height: 32px; border-radius: 6px; padding: 0;" 
                           onchange="actualizarCantidad('${item.id}', this.value)">
                </div>
            </div>`;
    }).join('');

    totalTxt.innerText = '$' + totalGeneral.toLocaleString('es-AR');
}

/**
 * FINALIZAR COMPRA: Redirección al Checkout (comercializacion.blade.php).
 */
function finalizarCompra() {
    if (carrito.length === 0) return alert('El carrito está vacío.');
    window.location.href = '/comercializacion';
}

// Escuchador global: Se ejecuta cuando el DOM está listo
document.addEventListener('DOMContentLoaded', renderizarCarrito);