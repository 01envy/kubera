<?php include 'includes/header.php'; ?>

<section class="py-5 bg-light text-center">
    <div class="container pt-4 pb-2">
        <h1 class="fw-bold text-uppercase position-relative d-inline-block pb-3 mb-4" style="font-family: 'Montserrat', sans-serif; color: #245076; font-size: 2.5rem;">
            Contáctanos
            <span class="titulo-linea-verde"></span>
        </h1>
        <p class="lead text-muted fw-medium mx-auto" style="max-width: 700px;">
            ¿Tienes alguna duda o necesitas asesoría para tu empresa? Comunícate con nosotros y nuestro equipo de expertos te responderá a la brevedad.
        </p>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container pb-5">
        <div class="row g-5 align-items-start">
            
            <!-- Columna Izquierda -->
            <div class="col-lg-5 animar-scroll delay-1">
                <h3 class="fw-bold mb-4" style="color: #245076; font-family: 'Montserrat', sans-serif;">Información Directa</h3>
                <p class="text-muted small mb-5">
                    Puedes escribirnos directamente a nuestro correo, llamarnos o visitar nuestro perfil profesional en LinkedIn.
                </p>
                <div class="d-flex align-items-center mb-4 p-3 bg-light rounded shadow-sm border-start border-4 borde-verde-custom">
                    <div class="me-4">
                        <div class="bg-white rounded d-flex align-items-center justify-content-center shadow-sm" style="width: 50px; height: 50px; color: #55a828; font-weight: 800; font-size: 1.5rem; font-family: 'Montserrat', sans-serif;">
                            @
                        </div>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1 text-dark">Correo Electrónico</h6>
                        <a href="mailto:contacto@kuberaconsultores.cl" class="text-muted text-decoration-none small enlace-contacto">contacto@kuberaconsultores.cl</a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 p-3 bg-light rounded shadow-sm border-start border-4 borde-verde-custom">
                    <div class="me-4">
                        <div class="bg-white rounded d-flex align-items-center justify-content-center shadow-sm" style="width: 50px; height: 50px; color: #55a828; font-weight: 800; font-size: 1.5rem;">
                            ✆
                        </div>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1 text-dark">Teléfono</h6>
                        <a href="tel:+56 912345678" class="text-muted text-decoration-none small enlace-contacto">+56 9 4029 2437</a>
                    </div>
                </div>

                <div class="d-flex align-items-center p-3 bg-light rounded shadow-sm border-start border-4 borde-verde-custom">
                    <div class="me-4">
                        <div class="bg-white rounded d-flex align-items-center justify-content-center shadow-sm" style="width: 50px; height: 50px; color: #55a828; font-weight: 800; font-size: 1.2rem; font-family: 'Montserrat', sans-serif;">
                            in
                        </div>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1 text-dark">LinkedIn</h6>
                        <a href="#" class="text-muted text-decoration-none small enlace-contacto">Kubera Consultores</a>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha -->
            <div class="col-lg-7 animar-scroll delay-2">
                <!-- Tarjeta del formulario con borde superior azul corporativo -->
                <div class="p-4 p-md-5 bg-white rounded shadow-lg border-top border-4" style="border-color: #245076 !important;">
                    <h3 class="fw-bold mb-4" style="color: #245076; font-family: 'Montserrat', sans-serif;">Envíanos un mensaje</h3>
                    
                    
                    <form action="mailto:mvelizduarte@kuberaconsultores.cl" method="post" enctype="text/plain">
                        <div class="row g-4">        
                            <div class="col-md-6">
                                <label for="nombre" class="form-label small fw-bold text-muted mb-1">Nombre completo</label>
                                <input type="text" class="form-control bg-light border-0 py-2 custom-input" id="nombre" name="Nombre" placeholder="Ej. Juan Pérez" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="empresa" class="form-label small fw-bold text-muted mb-1">Empresa (Opcional)</label>
                                <input type="text" class="form-control bg-light border-0 py-2 custom-input" id="empresa" name="Empresa" placeholder="Ej. Minera Sur">
                            </div>                         
                            <div class="col-12">
                                <label for="email" class="form-label small fw-bold text-muted mb-1">Correo electrónico</label>
                                <input type="email" class="form-control bg-light border-0 py-2 custom-input" id="email" name="Correo" placeholder="nombre@empresa.com" required>
                            </div>
                            
                            <div class="col-12">
                                <label for="mensaje" class="form-label small fw-bold text-muted mb-1">¿En qué podemos ayudarte?</label>
                                <textarea class="form-control bg-light border-0 py-2 custom-input" id="mensaje" name="Mensaje" rows="5" placeholder="Escribe los detalles de tu consulta aquí..." required></textarea>
                            </div>
                            
                            <div class="col-12 mt-4 text-end">
                                <button type="submit" class="btn text-white px-5 py-2 fw-bold shadow-sm btn-enviar">
                                    Enviar Mensaje
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>