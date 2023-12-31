<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="css/barraA.css">
        <link rel="stylesheet" href="css/barraB.css">
        <link rel="stylesheet" href="css/mi-1.css">
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

        <h1>Crear Inducción</h1>

        <section class="c1">
            <ul class="l1">
                <li>
                    <input type="text" name="nameInduccion" id="nameInduccion" placeholder="Nombre de la Induccion">
                </li>

                <li>  
                    <label for="text">Fecha y Hora de Inicio</label>
                </li>

                <li>
                    <input type="datetime-local" name="inicioInduccion" id="inicioInduccion">
                </li>

                <li>
                    <label for="text">Fecha y Hora de Finalizacion</label>
                </li>

                <li>
                    <input type="datetime-local" name="finalInduccion" id="finalInduccion">
                </li>
            </ul>

                <ul class="l2">
                    <li>
                        <select name="opDepartamento" id="opDepartamento">
                            <option value="0">SELECCIONE DEPARTAMENTO</option>
                            <option value="1">1.</option>
                            <option value="2">2.</option>
                            <option value="3">3.</option>
                        </select>
                    </li>

                    <li>
                        <select name="opPuesto" id="opPuesto">
                            <option value="0">SELECCIONE PUESTO</option>
                            <option value="1">1.</option>
                            <option value="2">2.</option>
                            <option value="3">3.</option>
                        </select>
                    </li>

                    <li>
                        <label for="text">Documento de Induccion</label>
                    </li>

                    <li>
                        <input type="file" name="dInduccion" id="dInduccion" accept=".pdf">
                    </li>

                    <li>
                        <label for="text">Encuesta de Induccion</label>
                    </li>

                    <li>
                        <input type="file" name="eInduccion" id="eInduccion" accept=".docx">
                    </li>
            </ul>
        </section>

        <div class="btn">
            <button type="button">
                <img src="iconos/guardar.png" width="10%">
                GENERAR
            </button>
        </div>

        <footer class="barraBaja">
            <div class="c">
                <p> PROYECTO DE ANALISIS DE SISTEMAS II </p>
            </div>
        </footer>

    </body>
</html>