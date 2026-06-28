<?php include 'includes/header.php'; ?>

<main>
    <div id="carruselPrincipal" class="carousel slide hero-section" data-bs-ride="carousel">
        
        <div class="hero-text-container">
            <h1>Expertos en seguridad y salud ocupacional para la industria minera</h1>
        </div>

        <div class="carousel-inner h-100">
            
            <div class="carousel-item active h-100">
                <img src="img/carrusel1.png" class="hero-image" alt="Trabajadores en terreno">
            </div>

            <div class="carousel-item h-100">
                <img src="img/carrusel2.png" class="hero-image" alt="Supervisión de obras">
            </div>

            <div class="carousel-item h-100">
                <img src="img/carrusel3.png" class="hero-image" alt="Reunión de equipo">
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carruselPrincipal" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carruselPrincipal" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!-- Cuerpo de index -->

    <section class="py-5 bg-light">
    <div class="container">
        
        <div class="text-center mb-5">
            <h2 class="fw-bold text-uppercase position-relative d-inline-block pb-3" id="quienessomos">
                ¿Quiénes Somos?
                <span class="titulo-linea-verde"></span>
            </h2>
        </div>

        <div class="row align-items-center mb-5 animar-scroll">
            <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
                <h3 class="fw-bold mb-3 text-verde">Historial de la empresa</h3>
                <p class="text-muted lead">
                    Somos una empresa constituida por un equipo de profesionales con más de 25 años de experiencia dedicados a entregar servicios de 
                    consultoría en gestión de control de riesgos en empresas mineras y de servicios, con un enfoque multidisciplinario, 
                    somos especialistas en las áreas de prevención de riesgos, sistemas de gestión, capacitación y formación de personal.
                </p>
                
            </div>
            <div class="col-lg-6">
                <div class="imagen-quienes-somos-wrapper">
                    <img src="img/quienes.jpg" alt="Equipo Kubera" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6 animar-scroll delay-1">
                <div class="p-4 bg-white rounded shadow-sm h-100 tarjeta-quienes-somos">
                    <h4 class="fw-bold mb-3 text-verde">Misión</h4>
                    <p class="text-muted mb-0">
                        Ser el socio estratégico de las organizaciones en Chile, entregando soluciones integrales en gestión de riesgos de 
                        seguridad y salud ocupaiconal (SST), cumplimiento de la Ley 16.744, DS 594 y DS 44, y gestión de protocolos MINSAL. 
                        A través de metodologías probadas, buscamos reducir incidentes, optimizar procesos y fomentar una cultura preventiva sostenible y diversa. <br>
                        Nos destacamos en desarrollar estrategias preventiva a la medida de cada organización, brindando un servicio integral que se centra en el 
                        diagnóstico, implementación, formación, supervisión y evaluación mediante indicadores de gestión.<br>
                        Lo que nos permite entregar un servicio de alto impacto, orientado a mejorar los procesos y el desempeño en las organizaciones.
                    </p>
                </div>
            </div>

            <div class="col-md-6 animar-scroll delay-2">
                <div class="p-4 bg-white rounded shadow-sm h-100 tarjeta-quienes-somos">
                    <h4 class="fw-bold mb-3 text-verde">Nuestros valores</h4>
                    <p class="text-muted mb-0">
                        En <strong>KUBERA SpA Consultores </strong> nos regimos por valores fundamentales que guían nuestra conducta y forma de trabajo.<br>
                        La integridad es la base de nuestras acciones, actuando con ética y transparencia en todas nuestras interacciones. 
                        La excelencia es nuestro objetivo, buscando la perfección en cada servicio que brindamos.<br>
                        Fomentamos la colaboración y el trabajo en equipo, promoviendo un ambiente de respeto, confianza y cooperación. 
                        Nos enfocamos en la innovación y la mejora continua, buscando soluciones creativas y eficientes para nuestros clientes. 
                        Finalmente, la orientación al cliente es primordial, brindando un servicio de calidad y personalizado que supere sus expectativas.
                    </p>
                </div>
            </div>
        </div>

    </div>
    </section>


    <!-- SERVICIOS -->
    <section class="py-5 bg-white">
        <div class="container">
            
            <div class="text-center mb-5 animar-scroll">
                <h2 class="fw-bold text-uppercase position-relative d-inline-block pb-3">
                    Nuestros Servicios
                    <span class="titulo-linea-verde"></span>
                </h2>
            </div>

            
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3">
                
                <!-- Servicio 1 -->
                <div class="col animar-scroll delay-1">
                    <div class="card-servicio h-100 p-4 pt-5 bg-white shadow-sm position-relative">
                        <div class="icono-flotante">
                            <img src="img/seguridadlaboral.png" alt="Icono">
                        </div>
                        
                        <h5 class="fw-bold titulo-servicio mt-2">Seguridad Laboral</h5>
                        <p class="text-muted small mt-3 mb-4">
                            Protegemos a tu equipo y aseguramos el cumplimiento legal de tu empresa frente a la Ley 16.744 y la nueva Ley Karin. 
                            Diseñamos programas de gestión preventiva, reglamentos internos (RIOHS) y matrices de riesgo a tu medida.
                        </p>
                        
                        <a href="servicios.php#seguridad-laboral"" class="link-ver-mas mt-auto">Ver más &rarr;</a>
                    </div>
                </div>

                <!-- Servicio 2 -->
                <div class="col animar-scroll delay-2">
                    <div class="card-servicio h-100 p-4 pt-5 bg-white shadow-sm position-relative">
                        <div class="icono-flotante">
                            <img src="img/saludocupacional.png" alt="Icono">
                        </div>
                        
                        <h5 class="fw-bold titulo-servicio mt-2">Salud Ocupacional</h5>
                        <p class="text-muted small mt-3 mb-4">
                            Vigilamos el bienestar de tus colaboradores mediante la implementación de Protocolos MINSAL. 
                            Te asesoramos en la prevención de enfermedades profesionales y te apoyamos en apelaciones ante fiscalizaciones de la autoridad sanitaria.
                        </p>
                        <a href="servicios.php#salud-ocupacional" class="link-ver-mas mt-auto">Ver más &rarr;</a>
                    </div>
                </div>

                <!-- Servicio 3 -->
                <div class="col animar-scroll delay-1">
                    <div class="card-servicio h-100 p-4 pt-5 bg-white shadow-sm position-relative">
                        <div class="icono-flotante">
                            <img src="img/gestionriesgos.png" alt="Icono">
                        </div>
                        
                        <h5 class="fw-bold titulo-servicio mt-2">Gestión de riesgos de desastres, emergencias y catástrofes</h5>
                        <p class="text-muted small mt-3 mb-4">
                            Preparamos a tu organización para actuar con eficiencia ante emergencias y catástrofes. 
                            confeccionamos planos de evacuación y capacitamos a tus brigadas en control de incendios y primeros auxilios.
                        </p>
                        <a href="servicios.php#riesgos-desastres" class="link-ver-mas mt-auto">Ver más &rarr;</a>
                    </div>
                </div>

                <!-- Servicio 4 -->
                <div class="col animar-scroll delay-2">
                    <div class="card-servicio h-100 p-4 pt-5 bg-white shadow-sm position-relative">
                        <div class="icono-flotante">
                            <img src="img/tick.png" alt="Icono">
                        </div>
                        
                        <h5 class="fw-bold titulo-servicio mt-2">Acreditaciones para Contratistas</h5>
                        <p class="text-muted small mt-3 mb-4">
                            Validamos los antecedentes de tus colaboradores, vehículos
                             y maquinarias en plataformas de acreditación bajo la normativa legal vigente.
                        </p>
                        <a href="servicios.php#acreditaciones" class="link-ver-mas mt-auto">Ver más &rarr;</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

   
    <!-- METODOLOGÍA -->
    <section class="py-5 bg-light">
    <div class="container">
        
        <div class="text-center mb-5">
            <h2 class="fw-bold text-uppercase position-relative d-inline-block pb-3" style="font-family: 'Montserrat', sans-serif; color: #245076;">
                Metodología de 5 pasos
                <span class="titulo-linea-verde"></span>
            </h2>
        </div>

        <div id="carruselMetodologia" class="carousel carousel-dark slide" data-bs-ride="false">
            
            <div class="carousel-indicators posicion-indicadores">
                <button type="button" data-bs-target="#carruselMetodologia" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Paso 1"></button>
                <button type="button" data-bs-target="#carruselMetodologia" data-bs-slide-to="1" aria-label="Paso 2"></button>
                <button type="button" data-bs-target="#carruselMetodologia" data-bs-slide-to="2" aria-label="Paso 3"></button>
                <button type="button" data-bs-target="#carruselMetodologia" data-bs-slide-to="3" aria-label="Paso 4"></button>
                <button type="button" data-bs-target="#carruselMetodologia" data-bs-slide-to="4" aria-label="Paso 5"></button>
            </div>

            <div class="carousel-inner pb-5">
                
                <div class="carousel-item active">
                    <div class="card card-metodologia-carrusel shadow-lg mx-auto p-4 p-md-5">
                        <div class="d-flex align-items-center mb-3">
                            <span class="numero-paso me-3">01</span>
                            <h3 class="fw-bold text-verde m-0">Diagnóstico</h3>
                        </div>
                        <hr class="my-3 opacity-25">
                        <p class="text-muted mb-3">
                            <strong class="text-dark d-block mb-1">¿Qué hacemos?</strong>
                            Diagnóstico de brechas en <strong>normativa SST actualizada Chile</strong>: Evaluamos brechas frente a Ley 16.744, DS 44, DS 594 y otras obligaciones sectoriales.
                        </p>
                        <p class="text-muted mb-0">
                            <strong class="text-dark d-block mb-1">Valor para tu empresa:</strong>
                            Visión clara de riesgos y prioridades.
                        </p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card card-metodologia-carrusel shadow-lg mx-auto p-4 p-md-5">
                        <div class="d-flex align-items-center mb-3">
                            <span class="numero-paso me-3">02</span>
                            <h3 class="fw-bold text-verde m-0">Diseño de solución</h3>
                        </div>
                        <hr class="my-3 opacity-25">
                        <p class="text-muted mb-3">
                            <strong class="text-dark d-block mb-1">¿Qué hacemos?</strong>
                            Desarrollamos <strong>planes HSE a la medida</strong> (procesos, KPI, presupuesto y cronograma).
                        </p>
                        <p class="text-muted mb-0">
                            <strong class="text-dark d-block mb-1">Valor para tu empresa:</strong>
                            Ajuste preciso a tu realidad operativa y financiera.
                        </p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card card-metodologia-carrusel shadow-lg mx-auto p-4 p-md-5">
                        <div class="d-flex align-items-center mb-3">
                            <span class="numero-paso me-3">03</span>
                            <h3 class="fw-bold text-verde m-0">Implementación</h3>
                        </div>
                        <hr class="my-3 opacity-25">
                        <p class="text-muted mb-3">
                            <strong class="text-dark d-block mb-1">¿Qué hacemos?</strong>
                            <strong>Capacitación, entrega de procedimientos, acompañamiento</strong> en terreno y puesta en marcha de plataformas digitales.
                        </p>
                        <p class="text-muted mb-0">
                            <strong class="text-dark d-block mb-1">Valor para tu empresa:</strong>
                            Cambio visible en comportamiento y reducción de incidentes.
                        </p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card card-metodologia-carrusel shadow-lg mx-auto p-4 p-md-5">
                        <div class="d-flex align-items-center mb-3">
                            <span class="numero-paso me-3">04</span>
                            <h3 class="fw-bold text-verde m-0">Verificación</h3>
                        </div>
                        <hr class="my-3 opacity-25">
                        <p class="text-muted mb-3">
                            <strong class="text-dark d-block mb-1">¿Qué hacemos?</strong>
                            <strong>Auditorías ISO 45001</strong> para verificación de cumplimiento, 14001, 9001 y simulacros de emergencia.
                        </p>
                        <p class="text-muted mb-0">
                            <strong class="text-dark d-block mb-1">Valor para tu empresa:</strong>
                            Evidencia sólida para fiscalización y certificación.
                        </p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card card-metodologia-carrusel shadow-lg mx-auto p-4 p-md-5">
                        <div class="d-flex align-items-center mb-3">
                            <span class="numero-paso me-3">05</span>
                            <h3 class="fw-bold text-verde m-0">Mejora continua</h3>
                        </div>
                        <hr class="my-3 opacity-25">
                        <p class="text-muted mb-3">
                            <strong class="text-dark d-block mb-1">¿Qué hacemos?</strong>
                            <strong>Indicadores, reuniones de revisión y actualización</strong> normativa permanente.
                        </p>
                        <p class="text-muted mb-0">
                            <strong class="text-dark d-block mb-1">Valor para tu empresa:</strong>
                            Sistema vivo que evoluciona con tu negocio.
                        </p>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev boton-carrusel-ajuste" type="button" data-bs-target="#carruselMetodologia" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next boton-carrusel-ajuste" type="button" data-bs-target="#carruselMetodologia" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
            
        </div>
    </div>
    </section>

        <!-- CLIENTES -->
    <section class="py-5 bg-white border-top">
        <div class="container pb-4">
            
            <!-- Título Principal -->
            <div class="text-center mb-5 animar-scroll">
                <h2 class="fw-bold text-uppercase position-relative d-inline-block pb-3" style="font-family: 'Montserrat', sans-serif; color: #245076;">
                    Nuestros Clientes
                    <span class="titulo-linea-verde"></span>
                </h2>
                <p class="text-muted mt-3 small">Organizaciones que confían en nuestra experiencia y compromiso preventivo.</p>
            </div>

            <!-- Grilla de Clientes (5 columnas en PC, 3 en Tablet, 2 en Móvil) -->
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4 justify-content-center align-items-center mt-2">
                
                <!-- Cliente 1 -->
                <div class="col animar-scroll delay-1">
                    <div class="cliente-logo-wrapper rounded p-3 text-center position-relative">
                        <!-- Cambia la ruta cuando tengas el logo real -->
                        <img src="img/empresas/altiplano.png" alt="Cliente 1" class="img-fluid logo-cliente">
                        
                    </div>
                </div>

                <!-- Cliente 2 -->
                <div class="col animar-scroll delay-2">
                    <div class="cliente-logo-wrapper rounded p-3 text-center position-relative">
                        <img src="img/empresas/anita.png" alt="Cliente 2" class="img-fluid logo-cliente">
                        
                    </div>
                </div>

                <!-- Cliente 3 -->
                <div class="col animar-scroll delay-1">
                    <div class="cliente-logo-wrapper rounded p-3 text-center position-relative">
                        <img src="img/empresas/comet.jpg" alt="Cliente 3" class="img-fluid logo-cliente">
                        
                    </div>
                </div>

                <!-- Cliente 4 -->
                <div class="col animar-scroll delay-2">
                    <div class="cliente-logo-wrapper rounded p-3 text-center position-relative">
                        <img src="img/empresas/cumbresnorte.png" alt="Cliente 4" class="img-fluid logo-cliente">
                        
                    </div>
                </div>

                <!-- Cliente 5 -->
                <div class="col animar-scroll delay-1">
                    <div class="cliente-logo-wrapper rounded p-3 text-center position-relative">
                        <img src="img/empresas/farellon.png" alt="Cliente 5" class="img-fluid logo-cliente">
                        
                    </div>
                </div>

                <!-- Cliente 6 -->
                <div class="col animar-scroll delay-1">
                    <div class="cliente-logo-wrapper rounded p-3 text-center position-relative">
                        <img src="img/empresas/formas.png" alt="Cliente 6" class="img-fluid logo-cliente">
                        
                    </div>
                </div>

                <!-- Cliente 7 -->
                <div class="col animar-scroll delay-2">
                    <div class="cliente-logo-wrapper rounded p-3 text-center position-relative">
                        <img src="img/empresas/garage.png" alt="Cliente 7" class="img-fluid logo-cliente">
                        
                    </div>
                </div>

                <!-- Cliente 8 -->
                <div class="col animar-scroll delay-1">
                    <div class="cliente-logo-wrapper rounded p-3 text-center position-relative">
                        <img src="img/empresas/rosario.png" alt="Cliente 8" class="img-fluid logo-cliente">
                        
                    </div>
                </div>

                <!-- Cliente 9 -->
                <div class="col animar-scroll delay-2">
                    <div class="cliente-logo-wrapper rounded p-3 text-center position-relative">
                        <img src="img//empresas/ecosaz.jpg" alt="Cliente 9" class="img-fluid logo-cliente">
                        
                    </div>
                </div>

                <!-- Cliente 10 -->
                <div class="col animar-scroll delay-1">
                    <div class="cliente-logo-wrapper rounded p-3 text-center position-relative">
                        <img src="img/empresas/toro.jpg" alt="Cliente 10" class="img-fluid logo-cliente">
                        
                    </div>
                </div>

            </div>
        </div>
    </section>


</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
<?php include 'includes/footer.php'; ?>
</body>
</html>