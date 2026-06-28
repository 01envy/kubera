<!-- SECCIÓN FOOTER -->
    <!-- SECCIÓN FOOTER -->
    <footer class="footer-corporativo pt-5 pb-3">
        <div class="container">
            <div class="row align-items-start">
                
                <!-- Columna Izquierda: Logo y Título -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center mb-3">
                        <img src="img/tu-logo-blanco.png" alt="" height="45" class="me-2">
                        <div class="brand-text-footer">
                            <span class="brand-title-footer">KUBERA</span><br>
                            <span class="brand-subtitle-footer">consultores</span>
                        </div>
                    </div>
                    <!-- Quitamos text-muted y usamos nuestra clase footer-texto -->
                    <p class="footer-texto small pe-lg-4">
                        Expertos en Prevención de Riesgos y Medio Ambiente. Entregamos soluciones estratégicas y a la medida para el cumplimiento normativo de tu empresa.
                    </p>
                </div>

                <!-- Columna Central: Menú de Navegación -->
                <div class="col-lg-4 mb-4 mb-lg-0 d-flex justify-content-lg-center">
                    <div>
                        <h6 class="text-uppercase fw-bold text-white mb-3 ">Enlaces Rápidos</h6>
                        <ul class="list-unstyled mb-0 small footer-separador">
                            <li class="mb-2"><a href="index.php" class="footer-link">Inicio</a></li>
                            <li class="mb-2"><a href="quienes-somos.php" class="footer-link">¿Quiénes Somos?</a></li>
                            <li class="mb-2"><a href="servicios.php" class="footer-link">Servicios</a></li>
                            <li class="mb-0"><a href="contacto.php" class="footer-link">Contacto</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Columna Derecha: Información de Contacto -->
                <div class="col-lg-4">
                    <h6 class="text-uppercase fw-bold text-white mb-3">Contacto</h6>
                    <!-- Quitamos text-muted y usamos footer-texto -->
                    <ul class="list-unstyled footer-texto small">
                        <li class="mb-2">
                            <strong class="text-white">Teléfono:</strong> +56 9 1234 5678
                        </li>
                        <li class="mb-2">
                            <strong class="text-white">Correo:</strong> contacto@kuberaconsultores.cl
                        </li>
                        <li class="mb-0">
                            <strong class="text-white">LinkedIn:</strong> <a href="#" class="footer-link d-inline">Kubera Consultores</a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Línea separadora adaptada al fondo -->
            <hr class="footer-separador my-4">

            <!-- Copyright -->
            <div class="text-center footer-texto small">
                &copy; <?php echo date('Y'); ?> Kubera Consultores. Todos los derechos reservados.
            </div>
        </div>
    </footer>

    <!-- Scripts de la página (El tuyo de animaciones y el de Bootstrap) -->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>