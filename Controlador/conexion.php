<?php
$servername = "localhost";
$username = "analisis";
$password = "12345";
$database = "bd_analisis";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
