<?php
include 'conexion.php';

// Captura los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$repetirContrasena = $_POST['repetircontrasena'];

// Verifica si las contraseñas coinciden
if ($contrasena !== $repetirContrasena) {
    die("Las contraseñas no coinciden. Inténtalo de nuevo.");
}

// Cifrado de la contraseña
$contrasenaCifrada = password_hash($contrasena, PASSWORD_BCRYPT);

// Inserta los datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contrasenaCifrada')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO usuarios (correo, contrasena) VALUES (?, ?)");
    $stmt->bind_param("ss", $correo, $hashed_password);
    $stmt->execute();
    $stmt->close();
}


$conn->close();
?>


