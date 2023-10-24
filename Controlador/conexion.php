<?php
$servername = "localhost";
$username = "Analisis";
$password = "12345";
$database = "BD_Analisis";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
