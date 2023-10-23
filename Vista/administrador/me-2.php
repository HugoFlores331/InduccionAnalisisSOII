<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/me-2.css">
    <link rel="stylesheet" href="css/barraA.css">
    <link rel="stylesheet" href="css/barraB.css">
    <title>Document</title>
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
                    <option value="1">DEPARTAMENTOS</option>
                    <option value="2">PUESTOS</option>
                    <option value="3">DEPARTAMENTOS Y PUESTOS</option>
                    <option value="4">DESENDENTE</option>
                    <option value="5">ASCENDNETE</option>
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

   <h1>DEPARTAMENTOS Y PUESTOS</h1>

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