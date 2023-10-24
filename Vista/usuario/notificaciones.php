<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Vista/usuario/notificaciones.css">
    <title>Menu de Usuario</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/Vista/usuario/Induccion.html" >Documentos de Inducción</a></li>
                <li><a href="/Vista/usuario/Responsabilidades.html">Responsabilidades del Cargo</a></li>
                <li><a href="/Vista/usuario/notificaciones.html" class="active">Notificaciones</a></li>
                <li><a href="/Vista/usuario/mUsuario.html">Regresar al Inicio</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <div class="container">
            <h1 class="welcome-text">¡Bienvenido a la Sección de Alertas!</h1>
            
            <!-- Sección de Notificaciones -->
            <div class="notifications">
                <h2>Notificaciones</h2>
                <div class="notification-box">
                    <!-- Aquí se agregarán las notificaciones dinámicamente con JavaScript -->
                </div>
                <p class="no-notifications">No hay Notificaciones Recientes</p>
            </div>
        </div>
    </main>
    
    <footer>
        <p>&copy; Plataforma de Induccion.</p>
    </footer>
    
    <script src="/Vista/usuario/Notificaciones.js"></script> <!-- Asegúrate de incluir el archivo JavaScript -->
</body>
</html>
