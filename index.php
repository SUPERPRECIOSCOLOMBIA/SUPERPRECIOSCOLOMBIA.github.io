<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 90px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
            background-color: rgba(103, 181, 199, 0.44);
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
            display: flex;
            flex-direction: row;
            background: white;
            padding: 40px;
            box-sizing: border-box;
            border-radius: 10px;
            box-shadow: 0 0 10px black;
            margin: auto;
            margin-top: 25px;
            justify-content: center;
            align-items: flex-start;
            height: 78vh;
            flex-wrap: wrap;
            gap: 11px;
            max-width: 30%;
        }

        .container .content {
            display: flex;
            flex-direction: column;
            background: rgba(255, 300, 255, 0.8);
            background-image: url(IMG/Inicio.png);
            padding: 100px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
            flex-wrap: wrap;
            max-width: 50%;
            flex-basis: 100%;
        }

        .active {
            display: block;
        }

        h2 {
            color: #000000c6;
            margin-top: -15px;
        }

        form {
            display: flex;
            flex-direction: column;
            margin: 10px;
            padding: 5px;
            flex-wrap: wrap;
            gap: 2px;
            max-width: 90%;
            margin-top: -10px;
        }

        label {
            margin-bottom: 1px;
            margin-top: -5px;
        }

        input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #000000c6;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 0;
        }

        #repetircontrasena {
            margin-top: -1px;
        }

        label[for="repetircontrasena"] {
            margin-top: -20px;
        }

        button {
            padding: 10px;
            font-size: 20px;
            color: #000000;
            background-color: #a2a19e97;
            border: 1px solid black;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            margin-top: -10px;
        }

        button:hover {
            background-color: #cfe2f3;
        }

        .content {
            text-align: center;
            padding: 100px;
            border: 2px solid;
            border-radius: 10px;
            background-color: #ffffff;
            margin-bottom: 20px;
        }

        .next-button {
            display: block;
            margin: auto;
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #aeafb0;
            border: 1px solid #000000c6;
            border-radius: 5px;
            cursor: pointer;
        }

        p {
            margin-top: -0px;
            margin-left: 10px;
        }

        .error {
            color: red;
        }

        .password-container {
            position: relative;
            width: 100%;
        }

        .password-container input {
            width: 100%;
            padding-right: 40px;
            /* Espacio para el icono */
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
        }

        .error {
            color: red;
            display: none;
            margin-top: -30px;
            margin-bottom: 10px;
            position: relative;
        }
    </style>
</head>

<body>

    <div id="register" class="container">
        <h2>REGISTRARSE</h2>
        <form action="registro.php" method="post" id="registrationForm">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required><br>

            <label for="contrasena">Contraseña:</label>
            <div class="password-container">
                <input type="password" id="contrasena" name="contrasena" required><br>
                <span id="toggleContrasena" class="toggle-password"></span>
            </div><br><br>

            <label for="repetircontrasena">Repetir Contraseña:</label>
            <div class="password-container">
                <input type="password" id="repetircontrasena" name="repetircontrasena" required><br>
                <span id="toggleRepetirContrasena" class="toggle-password"></span>
            </div><br><br>

            <p id="errorContrasena" class="error">Las contraseñas no coinciden.</p>

            <button type="submit">Registrarse</button>
            <p>¿Ya tienes cuenta?<a href="login.php">Inicia sesión aquí</a></p>
        </form>
    </div>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            var contrasena = document.getElementById('contrasena').value;
            var repetircontrasena = document.getElementById('repetircontrasena').value;
            var errorContrasena = document.getElementById('errorContrasena');

            if (contrasena !== repetircontrasena) {
                event.preventDefault(); // Previene el envío del formulario
                errorContrasena.style.display = 'block'; // Muestra el mensaje de error
            } else {
                errorContrasena.style.display = 'none'; // Oculta el mensaje de error si las contraseñas coinciden
            }
        });

        const users = [];


        function showHome() {
            document.getElementById('home').classList.add('active');
            document.getElementById('login').classList.remove('active');
            document.getElementById('register').classList.remove('active');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>