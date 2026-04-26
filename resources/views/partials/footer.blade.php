{{-- ARCHIVO: resources/views/footer.blade.php --}}

<style>
    /* Estilos específicos para el Footer Premium */
    .footer-modern {
        background-color: #11131A; /* Space Charcoal */
        border-top: 1px solid #1f222e !important;
    }

    /* Animación para los enlaces de navegación */
    .footer-link {
        color: #94a3b8;
        text-decoration: none;
        font-weight: 500;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        display: inline-block;
        width: fit-content;
    }

    .footer-link:hover {
        color: #FF3B3B !important; /* Mars Red */
        transform: translateX(5px); /* Pequeño salto a la derecha indicando interacción */
    }

    /* Círculos modernos para las redes sociales */
    .social-icon-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background-color: #1a1d27;
        border: 1px solid #2d313f;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .footer-icon {
        width: 18px;
        height: 18px;
        filter: invert(0.6); /* Gris claro estático */
        transition: all 0.3s ease;
    }

    .social-icon-wrapper:hover {
        background-color: rgba(255, 59, 59, 0.1); /* Fondo rojo ultra transparente */
        border-color: #FF3B3B;
        transform: translateY(-4px); /* Se eleva al pasar el mouse */
        box-shadow: 0 5px 15px rgba(255, 59, 59, 0.2);
    }

    .social-icon-wrapper:hover .footer-icon {
        filter: invert(1); /* Se vuelve blanco puro al hacer hover */
    }
</style>

<footer class="footer-modern py-5 mt-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            
            {{-- COLUMNA IZQUIERDA: Navegación (Apilada) --}}
            <div class="col-md-4 text-center text-md-start">
                <h6 class="text-white fw-bold text-uppercase mb-3" style="letter-spacing: 1px; font-size: 0.85rem;">Explorar</h6>
                <div class="d-flex flex-column gap-2 align-items-center align-items-md-start">
                    <a href="/" class="footer-link">Inicio</a>
                    <a href="/quienes-somos" class="footer-link">Quiénes Somos</a>
                    <a href="/catalogo" class="footer-link">Catálogo</a>
                    <a href="/contacto" class="footer-link">Contacto</a>
                    <a href="/terminos" class="footer-link">Términos</a>
                </div>
            </div>

            {{-- COLUMNA CENTRAL: Marca y Copyright --}}
            <div class="col-md-4 text-center">
                {{-- Usamos la misma estructura de texto compacto que el Header --}}
                <p class="mb-2 fw-black text-uppercase fs-4 logo-text text-white" style="letter-spacing: -1.5px;">
                    GAMING<span class="text-mars">STATION</span>
                </p>
                <p class="text-secondary small mb-0 fw-light">
                    &copy; 2026 - Todos los derechos reservados
                </p>
            </div>

            {{-- COLUMNA DERECHA: Redes Sociales --}}
            <div class="col-md-4 text-center text-md-end">
                <h6 class="text-white fw-bold text-uppercase mb-3" style="letter-spacing: 1px; font-size: 0.85rem;">Conecta</h6>
                {{-- justify-content-md-end tira los iconos a la derecha en PC, pero los centra en celular --}}
                <div class="d-flex justify-content-center justify-content-md-end gap-3">
                    
                    {{-- Enlaces funcionales target="_blank" abre en nueva pestaña --}}
                    <a href="https://www.instagram.com" target="_blank" class="social-icon-wrapper" title="Instagram">
                        <img src="{{ asset('assets/instagram.svg') }}" alt="Instagram" class="footer-icon">
                    </a>
                    
                    <a href="https://www.facebook.com" target="_blank" class="social-icon-wrapper" title="Facebook">
                        <img src="{{ asset('assets/facebook.svg') }}" alt="Facebook" class="footer-icon">
                    </a>
                    
                    <a href="https://www.whatsapp.com" target="_blank" class="social-icon-wrapper" title="WhatsApp">
                        <img src="{{ asset('assets/whatsapp.svg') }}" alt="WhatsApp" class="footer-icon">
                    </a>
                    
                    <a href="mailto:contacto@gamingstation.com.ar" class="social-icon-wrapper" title="Envíanos un correo">
                        <img src="{{ asset('assets/envelope-at.svg') }}" alt="Email" class="footer-icon">
                    </a>
                    
                </div>
            </div>

        </div>
    </div>
</footer>