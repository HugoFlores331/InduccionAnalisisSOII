<?php
$servername = "localhost";
$username = "USR_AS";
$password = "12345";
$database = "CN_AS";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
