<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Crear Puesto/Empleado</title>
        <link rel="stylesheet" href="css/barraA.css">
        <link rel="stylesheet" href="css/barraB.css">
        <link rel="stylesheet" href="css/mU-1.css">
    </head>

    <body>

        <header class="barra">

            <ul class="izquierda">
                <li>
                    <a href="mAdmin.php">
                        <img src="iconos/home.png" width="45">
                    </a>
                </li>
            </ul>

            <ul class="centro">
                <li>
                    <a href="mPuesto.php">
                        PUESTO
                    </a>
                </li>
                
                <li >
                    <a href="mInduccion.php">
                        INDUCCIONES
                    </a>
                </li>

                <li>
                    <a href="mEmpleado.php">
                        EMPLEADO
                    </a>
                </li>
            </ul>
            
            <ul class="derecha">
                <li>
                    <a href="../../index.php">
                        <img src="iconos/cerrar-sesion.png" width="40">
                    </a>
                </li>
            </ul>
        </header>

        <section class="contenido">
            <h1>CREAR USUARIO</h1>


            <div class="rol">
                <input type="text" name="rol" id="rol" placeholder="ID Empleado">
            </div>

            <div class="rol">
                <select name="fromRol" id="fromRol">
                    <option value="0">TIPO DE USUARIO</option>
                    <option value="1">ADMINISTRADOR</option>
                    <option value="2">CAPACITADOR</option>
                    <option value="3">APRENDIZ</option>
                </select>
            </div>

            <div class="btn">
                <button type="button">
                    <img src="iconos/agregar-usuario.png" width="15%">
                    CREAR USUARIO
                </button>
            </div>
        </section>

        <footer class="barraBaja">
            <div class="c">
                <p> PROYECTO DE ANALISIS DE SISTEMAS II </p>
            </div>
        </footer>

    </body>
</html>