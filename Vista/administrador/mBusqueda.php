<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="css/barraA.css">
        <link rel="stylesheet" href="css/barraB.css">
        <link rel="stylesheet" href="css/mBusqueda.css">
    </head>

    <body>
        <header class="barra">

            <ul class="izquierda">
                <li>
                    <a href="mAdmin.html">
                        <img src="iconos/home.png" width="45">
                    </a>
                </li>
            </ul>

            <ul class="centro">
                <li>
                    <a href="mPuesto.html">
                        PUESTO
                    </a>
                </li>
                
                <li >
                    <a href="mInduccion.html">
                        INDUCCIONES
                    </a>
                </li>

                <li>
                    <a href="mEmpleado.html">
                        EMPLEADO
                    </a>
                </li>
            </ul>
            
            <ul class="derecha">
                <li>
                    <a href="../../index.html">
                        <img src="iconos/cerrar-sesion.png" width="40">
                    </a>
                </li>
            </ul>
        </header>

       <section class="cbusqueda">

            <ul>
                <li>
                    <select name="busqueda" id="busqueda" class="busqueda">
                        <option value="0">NOMBRE EMPLEADO</option>
                        <option value="1">DECENDENTE</option>
                        <option value="2">ASENDENTE</option>
                    </select>   
                </li> 

                <li>
                    <select name="busqueda" id="busqueda" class="busqueda">
                        <option value="0">TIPO DE ROL</option>
                        <option value="1">DEPARTAMENTO/PUESTO</option>
                        <option value="2">DEPARTAMENTO</option>
                        <option value="3">PUESTO</option>
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

       <h1>LISTADO DE INDUCCION DE PERSONAL</h1>

       <section class="resultados">
        <table>
            <thead>
                <tr>
                    <th>Resultados de la Búsqueda</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fila 1</td>
                </tr>
                <tr>
                    <td>Fila 2</td>
                </tr>
                <tr>
                    <td>Fila 3</td>
                </tr>
                <tr>
                    <td>Fila 4</td>
                </tr>
                <tr>
                    <td>Fila 5</td>
                </tr>
                <tr>
                    <td>Fila 6</td>
                </tr>
            </tbody>
        </table>
    </section>

       <footer class="barraBaja">
            <div class="c">
                <p> PROYECTO DE ANALISIS DE SISTEMAS II </p>
            </div>
        </footer>

    </body>
</html>