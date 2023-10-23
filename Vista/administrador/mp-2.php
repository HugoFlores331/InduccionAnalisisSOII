<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="css/barraA.css">
        <link rel="stylesheet" href="css/barraB.css">
        <link rel="stylesheet" href="css/mp-2.css">
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

       <section class="cbusqueda">

            <ul>
                <li>
                    <select name="busqueda" id="busqueda" class="busqueda">
                        <option value="0">Seleccion La Opcion</option>
                        <option value="1">DEPARTAMENTOS Y PUESTOS</option>
                        <option value="2">DEPARTAMENTOS</option>
                        <option value="3">PUESTOS</option>
                    </select>   
                </li> 
                
                <li>
                    <button type="button">
                        <img src="iconos/busqueda.png" width="20%">
                        BUSCAR
                    </button>
                </li>
            </ul>
       </section>

       <section class="ver">
            <h1>MOSTRAR PUESTO-DEPARTAMENTO</h1> 
       </section>

       <footer class="barraBaja">
            <div class="c">
                <p> PROYECTO DE ANALISIS DE SISTEMAS II </p>
            </div>
        </footer>

    </body>
</html>