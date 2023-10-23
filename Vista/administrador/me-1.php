<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/barraA.css">
        <link rel="stylesheet" href="css/barraB.css">
        <link rel="stylesheet" href="css/me-1.css">
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

        <div class="titulo">
            <h1>Crear Empleado</h1>
        </div>

        <section class="contenido">
                <ul class="ce1">

                    <h3>Datos Personales:</h3>

                        <li>
                            <input type="text" name="cui" id="cui" placeholder="Ingrese Cui">
                        </li>

                        <li>
                            <input type="text" name="nombre" id="nombre" placeholder="Nombres Completos">
                        </li>

                        <li>
                            <input type="text" name="apellido" id="apellido" placeholder="Apellidos Completos">
                        </li>

                        <li>
                            <label for="text">Fecha de Nacimiento:</label>
                        </li>

                        <li>
                            <input type="date" name="fechaNacimiento" id="fechaNacimiento">
                        </li>

                        <li>                            
                            <input type="email" name="correo" id="corre" placeholder="Correo Electronico">
                        </li>

                        <li>
                            <input type="number" name="telefono" id="telefono" placeholder="Numero de Telefono">
                        </li>

                        <li>
                            <select name="departamento" id="departamento">
                                <option value="null">DEPARTAMENTO</option>
                                <option value="ALTA VERAPAZ">ALTA VERAPAZ</option>
                                <option value="BAJA VERAPAZ">BAJA VERAPAZ</option>
                                <option value="CHIMALTENANGO">CHIMALTENANGO</option>
                                <option value="CHIQUIMULA">CHIQUIMULA</option>
                                <option value="EL PROGRESO">EL PROGRESO</option>
                                <option value="ESCUINTLA">ESCUINTLA</option>
                                <option value="GUATEMALA">GUATEMALA</option>
                                <option value="HUEHUETENANGO">HUEHUETENANGO</option>
                                <option value="IZABAL">IZABAL</option>
                                <option value="JALAPA">JALAPA</option>
                                <option value="JUTIAPA">JUTIAPA</option>
                                <option value="PETÉN">PETÉN</option>
                                <option value="QUETZALTENANGO">QUETZALTENANGO</option>
                                <option value="QUICHÉ">QUICHÉ</option>
                                <option value="RETALHULEU">RETALHULEU</option>
                                <option value="SACATEPÉQUEZ">SACATEPÉQUEZ</option>
                                <option value="SAN MARCOS">SAN MARCOS</option>
                                <option value="SANTA ROSA">SANTA ROSA</option>
                                <option value="SOLOLÁ">SOLOLÁ</option>
                                <option value="SUCHITEPÉQUEZ">SUCHITEPÉQUEZ</option>
                                <option value="TOTONICAPÁN">TOTONICAPÁN</option>
                                <option value="ZACAPA">ZACAPA</option>
                            </select>
                        </li>

                        <li>
                            <input type="text" name="municipio" id="municipio" placeholder="Municipio"></li>
                        </li>

                        <li>
                            <input type="text" name="direccion" id="direccion" placeholder="Direccion Exacta">
                        </li>
                </ul>

                <ul class="ce2">
                    <h3>Vacante</h3>

                        <li>
                            <label for="text">Fecha de Inicio Laboral</label>
                        </li>

                        <li>
                            <input type="date" name="fechaInicio" id="fechaInicio">
                        </li>

                        <li>
                            <select name="depto" id="depto">
                                <option value="0">DEPARTAMENTO</option>
                                <option value="1">1.</option>
                            </select>
                        </li>

                        <li>
                            <select name="puesto" id="puesto">
                                <option value="0">PUESTO</option>
                                <option value="1">1.</option>
                            </select>
                        </li>

                        <li>
                            <input type="number" name="salario" id="salario" placeholder="Salario">
                        </li>

                        <li>
                            <label for="text">Adjuntar CV</label>
                        </li>

                        <li>
                            <input type="file" name="vitae" id="vitae" accept=".pdf">
                        </li>
                </ul>
        </section>

        <div class="btn">
            <a href="mU-1.php">
                <button type="button">
                    <img src="iconos/guardar.png" width="10%">
                    GUARDAR
                </button>
            </a>
        </div>

        <footer class="barraBaja">
            <div class="c">
                <p> PROYECTO DE ANALISIS DE SISTEMAS II </p>
            </div>
        </footer>

    </body>

</html>