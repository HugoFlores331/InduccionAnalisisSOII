//LISTA DE VALORES (PUESTO)
<?php
	include("conexion.php");
	$db_conexion = mysqli_connect($servername, $username, $password, $database);
	$db_conexion ->real_query("select idPuesto as id, puesto from bd_analisis.puestos;");
	$resultado = $db_conexion->use_result();
	while($fila =$resultado->fetch_assoc()){
		echo"<option value=". $fila['id'] . ">". $fila['puesto']. "</option>"
	}
	$db_conexion ->close();
?>

//LISA DE VALORES busqueda
<?php
    include("conexion.php");
    $db_conexion = mysqli_connect($servername, $username, $password, $database);
    $db_conexion->real_query("select idPuesto as id, puesto from bd_analisis.puestos;");
    $resultado = $db_conexion->use_result();
    while ($fila = $resultado->fetch_assoc()) {
        echo "<option value=" . $fila['id'] . ">" . $fila['puesto'] . "</option>";
    }
    $db_conexion->close();
    ?>

//LISTA DE VALORES (DEPARTAMENTO)
<?php
include("conexion.php");
$db_conexion = mysqli_connect($servername, $username, $password, $database);
$db_conexion->real_query("SELECT idDepartamento as id, nombre FROM departamento;");
$resultado = $db_conexion->use_result();
while ($fila = $resultado->fetch_assoc()) {
    echo "<option value='" . $fila['id'] . "'>" . $fila['nombre'] . "</option>";
}
$db_conexion->close();
?>

//MOSTRAR TABLA EMPLEADOS
<?php
	include("conexion.php");
	$db_conexion = mysqli_connect($servername, $username, $password, $database);
	$db_conexion ->real_query("SELECT e.id_empleado as id,e.nombre, e.apellido,e.fechaNacimiento,e.correo,e.telefono,e.departamento,e.municipio,e.direccion;");
	$resultado = $db_conexion->use_result();
	while($fila =$resultado->fetch_assoc()){
		echo"<tr data-id=". $fila['id'].">";
		echo"<td>". $fila['cui']."</td>";
		echo"<td>". $fila['nombre']."</td>";
		echo"<td>". $fila['apellido']."</td>";
		echo"<td>". $fila['fechaNacimiento']."</td>";
		echo"<td>". $fila['correo']."</td>";
		echo"<td>". $fila['telefono']."</td>";
        echo"<td>". $fila['departamento']."</td>";
        echo"<td>". $fila['municipio']."</td>";
        echo"<td>". $fila['direccion']."</td>";
		echo"<tr>";
	}
	$db_conexion ->close();
?>

//MOSTRAR TABLA USUARIOS
<?php
include("conexion.php");
$db_conexion = mysqli_connect($servername, $username, $password, $database);
$db_conexion->real_query("SELECT u.idUsuario as id, u.nombre, u.email FROM usuarios u;");
$resultado = $db_conexion->use_result();
while ($fila = $resultado->fetch_assoc()) {
    echo "<tr data-id=" . $fila['id'] . ">";
    echo "<td>" . $fila['id'] . "</td>";
    echo "<td>" . $fila['nombre'] . "</td>";
    echo "<td>" . $fila['email'] . "</td>";
    echo "</tr>";
}
$db_conexion->close();
?>

//MOSTRAR TABLA PUESTOS
<?php
include("conexion.php");
$db_conexion = mysqli_connect($servername, $username, $password, $database);
$db_conexion->real_query("SELECT p.idPuesto as id, p.puesto FROM puestos p;");
$resultado = $db_conexion->use_result();
while ($fila = $resultado->fetch_assoc()) {
    echo "<tr data-id=" . $fila['id'] . ">";
    echo "<td>" . $fila['id'] . "</td>";
    echo "<td>" . $fila['puesto'] . "</td>";
    echo "</tr>";
}
$db_conexion->close();
?>

//MOSTRAR TABLA INDUCCION
<?php
include("conexion.php");
$db_conexion = mysqli_connect($servername, $username, $password, $database);
$db_conexion->real_query("SELECT i.idInduccion as id, i.nombreInduccion, i.fechaInicio, i.fechaFinalizacion, i.idDepartamento, i.idPuesto, i.documentoInduccion, i.encuestaInduccion FROM induccion i;");
$resultado = $db_conexion->use_result();
while ($fila = $resultado->fetch_assoc()) {
    echo "<tr data-id=" . $fila['id'] . ">";
    echo "<td>" . $fila['nombreInduccion'] . "</td>";
    echo "<td>" . $fila['fechaInicio'] . "</td>";
    echo "<td>" . $fila['fechaFinalizacion'] . "</td>";
    echo "<td>" . $fila['idDepartamento'] . "</td>";
    echo "<td>" . $fila['idPuesto'] . "</td>";
    echo "<td>" . $fila['documentoInduccion'] . "</td>";
    echo "<td>" . $fila['encuestaInduccion'] . "</td>";
    echo "</tr>";
}
$db_conexion->close();
?>

//Boton Guardar induccion
<?php
if (isset($_POST["btn_guardar_induccion"])){
    include("conexion.php");
    $db_conexion = mysqli_connect($servername, $username, $password, $database);
    
    $nombreInduccion = $_POST["nombreInduccion"];
    $fechaInicio = $_POST["inicioInduccion"];
    $fechaFinalizacion = $_POST["finalInduccion"];
    $idDepartamento = $_POST["opDepartamento"];
    $idPuesto = $_POST["opPuesto"];
    $documentoInduccion = "ruta_del_archivo_pdf"; 
    $encuestaInduccion = "ruta_del_archivo_docx"; 
    
    $sql = "INSERT INTO induccion (nombreInduccion, fechaInicio, fechaFinalizacion, idDepartamento, idPuesto, documentoInduccion, encuestaInduccion)
            VALUES ('$nombreInduccion', '$fechaInicio', '$fechaFinalizacion', $idDepartamento, $idPuesto, '$documentoInduccion', '$encuestaInduccion')";

    if ($db_conexion->query($sql) === true) {
        $db_conexion->close();
        echo "Datos de Inducción Guardados Exitosamente";
        header("Refresh:0");
    } else {
        echo "Error: " . $sql . "<br>" . $db_conexion->error;
    }
}
?>

//Boton Guardar puestos
<?php
if (isset($_POST["btn_guardar_puesto"])){
    include("conexion.php");
    $db_conexion = mysqli_connect($servername, $username, $password, $database);
    
    $nombrePuesto = $_POST["nombrePuesto"];
    
    $sql = "INSERT INTO puestos (puesto) VALUES ('$nombrePuesto')";

    if ($db_conexion->query($sql) === true) {
        $db_conexion->close();
        echo "Puesto Guardado Exitosamente";
        header("Refresh:0");
    } else {
        echo "Error: " . $sql . "<br>" . $db_conexion->error;
    }
}
?>

//Boton guardar usuarios
<?php
if (isset($_POST["btn_guardar_usuario"])){
    include("conexion.php");
    $db_conexion = mysqli_connect($servername, $username, $password, $database);
    
    $nombreUsuario = $_POST["nombreUsuario"];
    $emailUsuario = $_POST["emailUsuario"];
    $contrasenaUsuario = $_POST["contrasenaUsuario"];
    
    $sql = "INSERT INTO usuarios (nombre, email, contraseña) VALUES ('$nombreUsuario', '$emailUsuario', '$contrasenaUsuario')";

    if ($db_conexion->query($sql) === true) {
        $db_conexion->close();
        echo "Usuario Guardado Exitosamente";
        header("Refresh:0");
    } else {
        echo "Error: " . $sql . "<br>" . $db_conexion->error;
    }
}
?>


//Boton guardar Empleado
<?php
    if (isset($_POST["btn_guardar"])){
        include("conexion.php");
	    $db_conexion = mysqli_connect($servername, $username, $password, $database;
        $cui = ($POST["cui"]);
        $cui = ($POST["nombre"]);
        $cui = ($POST["apellido"]);
        $cui = ($POST["fechaNacimiento"]);
        $cui = ($POST["correo"]);
        $cui = ($POST["telefono"]);
        $cui = ($POST["departamento"]);
        $cui = ($POST["municipio"]);
        $cui = ($POST["direccion"]);
        $sql = "INSERT INTO empleados(cui, nombre, apellido, fechaNacimiento, correo, telefono, departamento, municipio, direccion)
        VALUES ('". $cui ."','". $nombre."','". $apellido ."',". $fechaNacimiento .",'". $correo ."','". $telefono ."','". $departamento ."',
        '". $municipio ."','". $direccion ."',);"
        if ($db_conexion->query($sql)===true) {
            $db_conexion ->close();
            echo"Datos Guardados Exitosamente";
            header("Refresh:0");

    }else{
        echo "Error" . $sql . "<br>" . $db_conexion->close();
    }
?>