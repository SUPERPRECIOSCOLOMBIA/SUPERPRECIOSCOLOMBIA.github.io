<?php
session_start();
$error = '';
if(isset($_SESSION['error'])){
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio de sesión </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 96px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
            background-color: rgba(103, 181, 199, 0.44); /* Fondo azul clarito */
            background-image: url("Imagenes/fondo.PNG");
            background-size: contain;
            background-position: center 1px;
            background-repeat: no-repeat; 
            background-attachment: scroll;
            min-height: 70vh;
            margin-bottom: 0;
            text-align: center;
        }

        .container {
            display: none;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px black;
            max-width: 300px;
            margin: auto;
            margin-top: 50px;
        }
        .container .content{
            display: none;
            background: rgba(255, 300, 255, 0.8);
            background-image: url(IMG/Inicio.png);
            padding: 100px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }

        .active {
            display: block;
        }
        h2 {
            color: #000000c6;
            margin-top: 10px;
        }
        form {
            display: flex;
            flex-direction: center;
            gap: 10px;
            margin: 10px;
            padding: 5px;
            flex-wrap: wrap;
            gap: 10px;
            max-width: 90%;
            margin-top: 10px;
        }
        label{
            margin-bottom: 5px;
        }
        input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #000000c6;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        button {
            padding: 10px;
            text-align: center;
            font-size: 20px;
            color: #000000;
            background-color: #a2a19e97; 
            border: 1px solid black;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            margin-left: 60px;
            margin-top: 7px;
        }
        button:hover {
            background-color:  #cfe2f3; 
        }
        
        .content {
            text-align: center;
            padding: 100px;
            border: 2px solid  ; /* Borde azul */
            border-radius: 10px;
            background-color: #ffffff; /* Blanco */
            margin-bottom: 20px;
        }
        .next-button {
            display: block;
            margin: auto;
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color:  #aeafb0; /* Azul */
            border: 1px solid #000000c6;
            border-radius: 5px;
            cursor: pointer;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
    
    <div id="login" class="container active">
        <h2>INICIAR SESION</h2>
        <?php
        if($error){
            echo '<p class="error">'.$error.'</p>';
        }
        ?>
        <form action="verificarlogin.php" method="post">
            <label for="correo">Correo electronico:</label>
            <input type="email" name="correo" required>
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" required>
            <button type="submit">Iniciar sesion</button>
        </form>
    </div>

    <script>
        const users = [];

        function showLogin() {
            document.getElementById('login').classList.add('active');
            document.getElementById('register').classList.remove('active');
        }

        function showRegister() {
            document.getElementById('register').classList.add('active');
            document.getElementById('login').classList.remove('active');
        }

        function showHome() {
            document.getElementById('home').classList.add('active');
            document.getElementById('login').classList.remove('active');
            document.getElementById('register').classList.remove('active');
        }

        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('loginUsername').value;
            const password = document.getElementById('loginPassword').value;
            const user = users.find(user => user.username === username && user.password === password);
            if (user) {
                showHome();
            } else {
                alert('USUARIO NO REGISTRADO');
                showRegister();
            }
        });

        document.getElementById('registerForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('registerUsername').value;
            const password = document.getElementById('registerPassword').value;
            users.push({ username, password });
            alert('Registro exitoso. Ahora puedes iniciar sesión.');
            showLogin();
        });


        // Inicializar con el login visible
        showLogin();
    </script>
</body>
</html>


