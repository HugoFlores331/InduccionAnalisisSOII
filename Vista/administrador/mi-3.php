<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/barraA.css">
    <link rel="stylesheet" href="css/barraB.css">
    <link rel="stylesheet" href="css/mi-3.css">
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
            <h1>ASIGNACION DE INDUCCION AL PERSONAL</h1>   

            <input type="text" name="idAsignacionInduccion" id="idAsignacionInduccion" placeholder="Ingrese el ID de la Induccion">

            <input type="text" name="asignacionPersonalGeneral" id="asignacionPersonalGeneral" placeholder="Ingrese el ID del Empleado,Departamento o Puesto">

            <button type="button">GENERAR</button>
        </section>

        <footer class="barraBaja">
            <div class="c">
                <p> PROYECTO DE ANALISIS DE SISTEMAS II </p>
            </div>
        </footer>
    </body>

</html>