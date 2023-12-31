<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Inicio de Seccion</title>
        <link rel="icon" href="Vista/icono/personaLogin.png">
        <link rel="stylesheet" href="Vista/css/index.css">
    </head>

    <body>
        
        <section class="login">
            <ul>
                <li>
                    <h1>Login</h1>
                </li>

                <li>
                    <img src="Vista/icono/personaLogin.png" width="15%">
                </li>

                <li>
                    <input type="text" name="user" id="user" placeholder="Usuario">
                </li>

                <li>
                    <input type="password" name="pass" id="pass" placeholder="Contraseña">
                </li>
                
                <li>
                    <a href="Vista/administrador/mAdmin.php">
                        <button type="button">
                            Ingresar
                        </button>
                    </a>
                </li>

                <li>
                    <div class="olvide">
                        <a href="Vista/correro.php">
                            <p>Olvide Usuario</p>
                        </a>
                </li>

                <li>
                        <a href="Vista/password.php">
                            <p>Olvide mi Contraseña</p>
                        </a>
                    </div>
                </li>
            </ul>
        </section>

    </body>

</html>