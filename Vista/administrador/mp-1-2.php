<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Crear Puesto/Empleado</title>
        <link rel="stylesheet" href="css/barraA.css">
        <link rel="stylesheet" href="css/barraB.css">
        <link rel="stylesheet" href="css/mp-1.css">
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
            <h1>CREAR PUESTO</h1>


            <div class="rol">
                <input type="text" name="puestoopt" id="puestopt" placeholder="Ingrese Puesto">
            </div>

            <div class="rol">
                <select name="descripcion" id="descripcion">
                    <option value="0">SELECIONE DEPARTAMENTO</option>
                        <?php
                            include("../../Controlador/conexion.php");

                            $cn = mysqli_connect($servername,$username,$password,$database);
                            $cn ->real_query("select iddepartamento as id,departamentocol from bd_analisis.departamento;");

                            $resultado = $conn->use_result();

                            while ($fila = $resultado->fetch_assoc()) {
                                echo "<option value=" . $fila['id'] . ">" . $fila['descripcion'] . "</option>";
                            }
                            $cn ->close();
                        ?>
                </select>
            </div>

            <div class="btn">
                <a href="mp-2.php">
                    <button type="button">
                        <img src="iconos/guardar.png" width="10%">
                        GUARDAR
                    </button>
                </a>
            </div>
        </section>

        <footer class="barraBaja">
            <div class="c">
                <p> PROYECTO DE ANALISIS DE SISTEMAS II </p>
            </div>
        </footer>

    </body>
</html>