<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Consulta para verificar usuario y contraseña
    $stmt = $conn->prepare("SELECT id, contrasena FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($contrasena, $hashed_password)) {
            // Guardar información del usuario en la sesión
            $_SESSION['id'] = $id;
            header("Location: paginaprincipal.php");
            exit();
        } else {
            // Contraseña incorrecta
            $_SESSION['error'] = "Contraseña incorrecta.";
            header("Location: login.php");
            exit();
        }
    } else {
        // Usuario no encontrado
        $_SESSION['error'] = "Usuario no encontrado.";
        header("Location: login.php");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>



