<?php
$conn = new mysqli("localhost", "root", "", "bdsupreco");

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Establecer el conjunto de caracteres correctamente
if (!$conn->set_charset("utf8")) {
    printf("Error al cargar el conjunto de caracteres utf8: %s\n", $conn->error);
    exit();
}

?>
