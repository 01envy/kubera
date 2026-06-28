document.addEventListener("DOMContentLoaded", function() {
    // Configuramos el observador
    const observador = new IntersectionObserver((entradas, observador) => {
        entradas.forEach(entrada => {
            // Si el elemento entra en la pantalla
            if (entrada.isIntersecting) {
                // Le agregamos la clase que activa la animación CSS
                entrada.target.classList.add('visible');
                
                // Dejamos de observarlo para que la animación ocurra solo la primera vez
                observador.unobserve(entrada.target);
            }
        });
    }, {
        // Se activa cuando el 15% del elemento es visible en pantalla
        threshold: 0.15 
    });

    // Seleccionamos todos los elementos que tengan la clase .animar-scroll
    const elementosOcultos = document.querySelectorAll('.animar-scroll');
    
    // Le decimos al observador que vigile cada uno de esos elementos
    elementosOcultos.forEach((el) => {
        observador.observe(el);
    });
});

document.addEventListener("DOMContentLoaded", function() {
    // Código para el Slider de Metodología (Center Mode)
    const trackMet = document.getElementById('trackMetodologia');
    const btnPrevMet = document.getElementById('btn-prev-met');
    const btnNextMet = document.getElementById('btn-next-met');

    if(trackMet && btnPrevMet && btnNextMet) {
        // Al hacer clic en Siguiente
        btnNextMet.addEventListener('click', () => {
            const tarjeta = trackMet.querySelector('.tarjeta-paso-slider');
            // Desplaza el ancho de la tarjeta + el espacio entre ellas (30px)
            const scrollAmount = tarjeta.offsetWidth + 30; 
            trackMet.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });

        // Al hacer clic en Anterior
        btnPrevMet.addEventListener('click', () => {
            const tarjeta = trackMet.querySelector('.tarjeta-paso-slider');
            const scrollAmount = tarjeta.offsetWidth + 30;
            trackMet.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });
    }
});

document.addEventListener("DOMContentLoaded", function() {
    
    // --- TU CÓDIGO ANTERIOR DE ANIMACIÓN DE SCROLL AQUÍ --- //

    // --- NUEVO: Hacer clickeable el enlace principal de Servicios en PC ---
    const linkServicios = document.getElementById('serviciosDropdown');
    
    if(linkServicios) {
        linkServicios.addEventListener('click', function(e) {
            // Verifica si el ancho de la pantalla es de computadora (992px o más)
            if (window.innerWidth >= 992) {
                // Fuerza al navegador a ir a la URL del enlace (servicios.php)
                window.location.href = this.href;
            }
        });
    }

});