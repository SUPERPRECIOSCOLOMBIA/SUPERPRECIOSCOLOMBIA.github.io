<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['NOMBRE'];
    $email = $_POST['EMAIL'];
    $mensaje = $_POST['MENSAJE'];

    $conexion = new mysqli("localhost", "root", "", "bdsupreco");

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    $sql = "INSERT INTO comentarios (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

    if ($conexion->query($sql) === TRUE) {
        echo "Gracias por tus comentarios.";
    } else {
        echo "error".$sql."<br>".$conexion->error;
    }
    $conexion->close();
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPER PRECIOS COLOMBIA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="estilo.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body>
    <header class="header">
        <nav>
            <ul class="menu-horizontal">
                <li>
                    <span>&#9776;</span>
                    <ul class="menu-vertical">
                        <li><a href="login.php">CERRAR SESION</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="header-content container">
            <div class="header-txt">
                <span>BIENVENIDO A SUPER PRECIOS COLOMBIA</span>
                <a href="#" class="btn-1">
                    ¿QUIENES SOMOS?
                    <br>
                    <br>
                    Somos un equipo de trabajo que tiene como finalidad, mantenerte actualizado con los distintos precios de las cadenas de mercado del pais, y conforme a esto ayudarte a ahorrar.
                    Has encontrado el sitio perfecto para tus compras; ¡Empieza a ahorrar ahora mismo!
                </a>
                <a href="#" class="btn-2">SUPERMERCADOS QUE COMPARAMOS</a>
            </div>
        </div>
        <section class="informacion container">
            <div class="sm-content">
                <div class="sm">
                    <img src="imagenes/ara.png" alt="">
                </div>
                <div class="sm">
                    <img src="imagenes/d1.png" alt="">
                </div>
                <div class="sm">
                    <img src="imagenes/jumbo.png" alt="">
                </div>
                <div class="sm">
                    <img src="imagenes/olimpica.png" alt="">
                </div>
                <div class="sm">
                    <img src="imagenes/exito.png" alt="">
                </div>
                <div class="sm">
                    <img src="imagenes/isimo.png" alt="">
                </div>
        </section>

        <main class="productos container">
            <h2>CATEGORIAS PRINCIPALES</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide producto">
                        <img src="imagenes/lacteosyhuevos.png" alt="">
                        <div class="producto-txt">
                            <h3>LACTEOS Y HUEVOS</h3>
                            <br>
                            <a href="productos.php" class="ver-mas" data-id="1">Ver más</a>
                        </div>
                    </div>
                    <div class="swiper-slide producto">
                        <img src="imagenes/despensa.png" alt="">
                        <div class="producto-txt">
                            <h3>DESPENSA</h3>
                            <br>
                            <a href="productos.php" class="ver-mas" data-id="1">Ver más</a>
                        </div>
                    </div>
                    <div class="swiper-slide producto">
                        <img src="imagenes/carnes.png" alt="">
                        <div class="producto-txt">
                            <h3>CARNES</h3>
                            <br>
                            <a href="productos.php" class="ver-mas" data-id="1">Ver más</a>
                        </div>
                    </div>
                    <div class="swiper-slide producto">
                        <img src="imagenes/aseo.png" alt="">
                        <div class="producto-txt">
                            <h3>ASEO</h3>
                            <br>
                            <a href="productos.php" class="ver-mas" data-id="1">Ver más</a>
                        </div>
                    </div>
                    <div class="swiper-slide producto">
                        <img src="imagenes/higienepersonal.png" alt="">
                        <div class="producto-txt">
                            <h3>HIGIENE PERSONAL</h3>
                            <br>
                            <a href="productos.php" class="ver-mas" data-id="1">Ver más</a>
                        </div>
                    </div>
                    <div class="swiper-slide producto">
                        <img src="imagenes/snacks.png" alt="">
                        <div class="producto-txt">
                            <h3>SNACKS</h3>
                            <br>
                            <a href="productos.php" class="ver-mas" data-id="1">Ver más</a>
                        </div>
                    </div>
                </div>
                <!-- Botones de navegación -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </main>
        <h1>DIRECCIONES</h1>
        <div class="supermarkets-container">
            <div class="supermarket" id="ara">
                <img src="imagenes/ara.png" alt="ARA">
                <h2>ARA</h2>
                <div id="ara-cities" class="cities"></div>
            </div>
            <div class="supermarket" id="d1">
                <img src="imagenes/d1.png" alt="D1">
                <h2>D1</h2>
                <div id="d1-cities" class="cities"></div>
            </div>
            <div class="supermarket" id="jumbo">
                <img src="imagenes/jumbo.png" alt="Jumbo">
                <h2>Jumbo</h2>
                <div id="jumbo-cities" class="cities"></div>
            </div>
            <div class="supermarket" id="olimpica">
                <img src="imagenes/olimpica.png" alt="Olímpica">
                <h2>Olímpica</h2>
                <div id="olimpica-cities" class="cities"></div>
            </div>
            <div class="supermarket" id="exito">
                <img src="imagenes/exito.png" alt="Éxito">
                <h2>Éxito</h2>
                <div id="exito-cities" class="cities"></div>
            </div>
            <div class="supermarket" id="isimo">
                <img src="imagenes/isimo.png" alt="Isimo">
                <h2>Isimo</h2>
                <div id="isimo-cities" class="cities"></div>
            </div>
        </div>

        <div id="comentarios-sugerencias" class="seccion">
            <h2>Comentarios y Sugerencias</h2>
            <form id="comentariosForm">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="NOMBRE" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="EMAIL" required>
                </div>
                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="MENSAJE" required></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
            <div id="respuesta"></div>
        </div>

    </header>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <ul>
                    <li><a href="#">Creado por:</a></li>
                    <li><a href="#">Julieth Tatiana Solano Hernández</a></li>
                    <li><a href="#">Diana Valentina Durán Cáceres</a></li>
                </ul>
            </div>
            <div class="link">
                <ul>
                    <li><a href="#">Correo electrónico:</a></li>
                    <li><a href="#">tatianashernandez@gmail.com</a></li>
                    <li><a href="#">dianaduran4827@gmail.com</a></li>
                </ul>
            </div>
            <div class="link">
                <ul>
                    <li><a href="#">Whatsapp:</a></li>
                    <li><a href="#">3222778006</a></li>
                    <li><a href="#">3228647970</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>