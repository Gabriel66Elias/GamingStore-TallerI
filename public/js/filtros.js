document.addEventListener('DOMContentLoaded', () => {
    // Referencias a categorías y bloques
    const radiosCategoria = document.querySelectorAll('input[name="filtro_categoria"]');
    const bloquesCategoria = document.querySelectorAll('.categoria-bloque');
    const btnLimpiar = document.getElementById('btn-limpiar-filtros');
    
    // Referencias al nuevo menú desplegable personalizado
    const inputOrdenOculto = document.getElementById('orden-precio');
    const btnTextoOrden = document.getElementById('texto-orden');
    const itemsDesplegable = document.querySelectorAll('.custom-dropdown-item');

    // Función principal para filtrar y ordenar
    function procesarCatalogo() {
        const catElegida = document.querySelector('input[name="filtro_categoria"]:checked').value;
        const ordenElegido = inputOrdenOculto.value; // Leemos del input oculto

        bloquesCategoria.forEach(bloque => {
            const contenedorRow = bloque.querySelector('.row');
            const productos = Array.from(bloque.querySelectorAll('.producto-item'));

            let productosVisiblesEnBloque = 0;

            // 1. FILTRAR
            productos.forEach(p => {
                const pCat = p.getAttribute('data-categoria');
                const coincide = (catElegida === 'todas' || catElegida === pCat);
                p.style.display = coincide ? 'block' : 'none';
                if (coincide) productosVisiblesEnBloque++;
            });

            // 2. ORDENAR
            if (productosVisiblesEnBloque > 0) {
                productos.sort((a, b) => {
                    const precioA = parseInt(a.getAttribute('data-precio'));
                    const precioB = parseInt(b.getAttribute('data-precio'));
                    const idA = parseInt(a.getAttribute('data-id'));
                    const idB = parseInt(b.getAttribute('data-id'));

                    if (ordenElegido === 'barato') return precioA - precioB;
                    if (ordenElegido === 'caro') return precioB - precioA;
                    return idA - idB; // Orden predeterminado
                });

                productos.forEach(p => contenedorRow.appendChild(p));
            }

            // 3. VISIBILIDAD DEL BLOQUE
            bloque.style.display = productosVisiblesEnBloque === 0 ? 'none' : 'block';
        });
    }

    // Eventos para el nuevo menú desplegable de Precio
    itemsDesplegable.forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault(); // Evita que la página salte hacia arriba
            
            // 1. Quitamos la clase 'active' de todos los elementos
            itemsDesplegable.forEach(i => i.classList.remove('active'));
            
            // 2. Le ponemos la clase 'active' al que acabamos de clickear
            e.target.classList.add('active');
            
            // 3. Actualizamos el texto del botón y el valor del input oculto
            btnTextoOrden.innerText = e.target.innerText;
            inputOrdenOculto.value = e.target.getAttribute('data-value');
            
            // 4. Ejecutamos el filtro
            procesarCatalogo();
        });
    });

    // Eventos para los cuadraditos de Categoría
    radiosCategoria.forEach(r => r.addEventListener('change', procesarCatalogo));

    // Evento para limpiar todos los filtros
    btnLimpiar.addEventListener('click', () => {
        // Resetear Categoría
        document.getElementById('cat-todas').checked = true;
        
        // Resetear Orden visual y oculto
        inputOrdenOculto.value = 'predeterminado';
        btnTextoOrden.innerText = 'Predeterminado';
        
        itemsDesplegable.forEach(i => i.classList.remove('active'));
        document.querySelector('.custom-dropdown-item[data-value="predeterminado"]').classList.add('active');
        
        procesarCatalogo();
    });
});