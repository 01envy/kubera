<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kubera Consultores</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;800&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="favicon.ico">
    
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header class="sticky-top bg-white">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container">
                
                <!-- Logo y Título de la Empresa -->
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="img/logo.png" alt="Logo Empresa" height="50">
                    <!-- Texto al lado del logo -->
                    <div class="ms-2 brand-text">
                        <span class="brand-title">Kubera</span><br>
                        <span class="brand-subtitle">consultores</span>
                    </div>
                </a>

                <!-- Botón de menú para celulares -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavegacion" aria-controls="menuNavegacion" aria-expanded="false" aria-label="Alternar navegación">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Enlaces del menú centrados y más separados -->
                <div class="collapse navbar-collapse justify-content-center" id="menuNavegacion">
                    <!-- "gap-5" aumenta considerablemente la separación entre los textos -->
                    <ul class="navbar-nav menu-espaciado">
                        <li class="nav-item">
                            <a class="nav-link active-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <!-- Cambié el texto para imitar tu imagen de referencia -->
                            <a class="nav-link" href="index.php#quienessomos">¿Quiénes Somos?</a>
                        </li>
                        
                        <!-- Menú desplegable para Servicios -->
                        <li class="nav-item dropdown">
                            <a class="nav-link custom-dropdown d-flex align-items-center" href="servicios.php" id="serviciosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Servicios
                                <img src="img/flechaheader.png" alt="Desplegar" class="icono-flecha">
                            </a>
                            <ul class="dropdown-menu shadow-sm border-0" aria-labelledby="serviciosDropdown">
                                <li><a class="dropdown-item" href="servicios.php#seguridad-laboral">Seguridad Laboral</a></li>
                                <li><a class="dropdown-item" href="servicios.php#salud-ocupacional">Salud Ocupacional</a></li>
                                <li><a class="dropdown-item" href="servicios.php#riesgos-desastres">Gestión de riesgos</a></li>
                                <li><a class="dropdown-item" href="servicios.php#acreditaciones">Acreditación para contratistas</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
    </header>