<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparador de Precios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="estilo.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #dbe9f6;
        }

        header {
            height: 100px;
            /* Ajusta esta altura según tus necesidades */
            display: flex;
            background-color: rgba(103, 181, 199, 0.44);
            align-items: center;
            /* Centra el logo verticalmente */
            padding: 0 2px;
            /* Espaciado lateral opcional */
        }

        .logo {
            max-height: 100%;
            /* Ajusta la altura del logo al 100% de la altura del header */
            max-width: auto;
            /* Mantiene la proporción del logo */
        }

        header img {
            height: 90px;
        }

        header h1 {
            margin: 0;
            padding: 0 20px;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #ffffff;
        }

        nav a {
            margin: 0 15px;
            padding: 15px;
            text-decoration: none;
            color: rgb(0, 0, 0);
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: rgba(103, 181, 199, 0.44);
        }

        .category-section {
            display: none;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        .category-section h2 {
            text-align: center;
            color: rgba(0, 0, 0, 0.8);
            /* Ajuste de transparencia */
        }

        .subcategory-section {
            margin: 20px 0;
        }

        .subcategory-section h3 {
            color: rgba(0, 0, 0, 0.8);
            /* Ajuste de transparencia */
        }

        .subcategory-section table {
            width: 100%;
            /* Ajuste para no desbordar */
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .subcategory-section th,
        .subcategory-section td {
            border: 1px solid #000000;
            padding: 10px;
            text-align: center;
        }

        .subcategory-section th {
            background-color: rgba(103, 181, 199, 0.44);
            color: rgb(0, 0, 0);
        }

        .subcategory-section img {
            max-width: 100px;
            height: auto;
        }

        .store-logo {
            max-width: 40px;
            max-height: 90px;
        }

        .add-button {
            background: rgba(103, 181, 199, 0.44);
            color: rgb(0, 0, 0);
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .add-button:hover {
            background: rgba(103, 181, 199, 0.44);
        }

        .footer {
            padding: 50px 0;
            background-color: rgba(103, 181, 199, 0.44);
            margin-top: 50px;
            /* Ajuste para evitar mucho espacio en blanco */
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
        }

        .link h3 {
            color: #000000;
            font-size: 17px;
            margin-bottom: 10px;
        }

        .link a {
            color: #000000;
            font-size: 15px;
            display: block;
            margin-bottom: 10px;
        }

        .link a:hover {
            color: gray;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            width: 300px;
            border: 1px solid #000000;
            /* Corregido a 'solid' */
            border-radius: 5px;
        }

        .search-bar button {
            padding: 10px;
            border: none;
            background-color: rgba(103, 181, 199, 0.44);
            color: rgb(0, 0, 0);
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #000000;
        }
    </style>
</head>

<body>
    <header>
        <img src="IMAGEN/logo.png" alt="Logo" class="logo"> <!-- Corregido nombre del archivo -->
        <h1>SUPER PRECIOS COLOMBIA</h1>
    </header>

    <nav>
        <a href="#" onclick="showCategory('lacteos')">LACTEOS</a>
        <a href="#" onclick="showCategory('despensa')">DESPENSA</a>
        <a href="#" onclick="showCategory('carnes')">CARNES</a>
        <a href="#" onclick="showCategory('aseo')">ASEO</a>
        <a href="#" onclick="showCategory('higiene')">HIGIENE PERSONAL</a>
        <a href="#" onclick="showCategory('snacks')">SNACKS</a>
        <a href="#" onclick="showCategory('productos_agregados')">PRODUCTOS AGREGADOS</a>
    </nav>

    <div class="search-bar">
        <input type="text" id="search-input" placeholder="Buscar subcategoría...">
        <button onclick="searchCategory()">Buscar</button>
    </div>

    <!-- Sección de productos por categoría -->
    <div id="category-sections">
        <!-- Lácteos -->
        <div id="lacteos" class="category-section">
            <h2>LACTEOS Y HUEVOS</h2>
            <div class="subcategory-section" id="leche">
                <h3>LECHE</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Tienda</th>
                            <th>Agregar</th>
                        </tr>
                    </thead>
                    <tbody id="product-list-leche"></tbody>
                </table>
            </div>
            <div class="subcategory-section" id="yogurt">
                <h3>YOGURT</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Tienda</th>
                            <th>Agregar</th>
                        </tr>
                    </thead>
                    <tbody id="product-list-yogurt"></tbody>
                </table>
            </div>
            <div class="subcategory-section" id="Avenas">
                <h3>AVENAS</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Tienda</th>
                            <th>Agregar</th>
                        </tr>
                    </thead>
                    <tbody id="product-list-Avenas"></tbody>
                </table>
            </div>
            <div class="subcategory-section" id="Huevos">
                <h3>HUEVOS</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Tienda</th>
                            <th>Agregar</th>
                        </tr>
                    </thead>
                    <tbody id="product-list-huevos"></tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Snacks -->
    <div id="snacks" class="category-section">
        <h2>SNACKS</h2>
        <div class="subcategory-section" id="chocolates">
            <h3>CHOCOLATES</h3>
            <table>
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Tienda</th>
                        <th>Agregar</th>
                    </tr>
                </thead>
                <tbody id="product-list-chocolates"></tbody>
            </table>
        </div>
        <div class="subcategory-section" id="galletas">
            <h3>GALLETAS</h3>
            <table>
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Tienda</th>
                        <th>Agregar</th>
                    </tr>
                </thead>
                <tbody id="product-list-galletas"></tbody>
            </table>
        </div>
        <div class="subcategory-section" id="chitos">
            <h3>CHITOS</h3>
            <table>
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Tienda</th>
                        <th>Agregar</th>
                    </tr>
                </thead>
                <tbody id="product-list-chitos"></tbody>
            </table>
        </div>
    </div>

    <!-- Productos Agregados -->
    <section id="productos-agregados">
        <h2>Productos Agregados</h2>
        <table id="added-products-table" class="added-products-table">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Tienda</th>
                </tr>
            </thead>
            <tbody>
                <!-- Added products will appear here -->
            </tbody>
        </table>
    </section>

    </div>
    </div>
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

    <script>
        const categories = {
            lacteos: ['leche', 'yogurt', 'avenas', 'huevos'],
            despensa: ['arroz', 'granos', 'avena', 'harinas', 'pastas', 'cafe', 'azucar', 'aceite', 'sal'],
            carnes: ['res', 'cerdo', 'pescado', 'pollo'],
            aseo: ['jabon_polvo', 'lavaplatos', 'limpiapisos', 'jabón_barra', 'papel_higienico', 'crema_dental'],
            higiene: ['shampoo', 'toallas_higienicas', 'desodorante', 'talco', 'jabon_de_baño'],
            snacks: ['chocolates', 'galletas', 'chitos'],
        };

        const products = {
            leche: [{
                    name: 'Leche Alpina',
                    price: '5000',
                    store: 'Ara',
                    image: 'leche_alpina.jpg'
                },
                {
                    name: 'Leche Colanta',
                    price: '5200',
                    store: 'Éxito',
                    image: 'leche_colanta.jpg'
                },
            ],
            yogurt: [{
                    name: 'Yogurt Alpina',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'yogurt_alpina.jpg'
                },
                {
                    name: 'Yogurt Colanta',
                    price: '3200',
                    store: 'Uno',
                    image: 'yogurt_colanta.jpg'
                },
            ],
            avenas: [{
                    name: 'Avena Alpina',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'avena_alpina.jpg'
                },
                {
                    name: 'Avena Colanta',
                    price: '3200',
                    store: 'Uno',
                    image: 'avena_colanta.jpg'
                },
            ],
            huevos: [{
                    name: 'Huevos',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'huevos.jpg'
                },
                {
                    name: 'Huevos',
                    price: '3200',
                    store: 'Uno',
                    image: 'huevos.jpg'
                },
            ],
            arroz: [{
                    name: 'Arroz Diana',
                    price: '4000',
                    store: 'Metro',
                    image: 'arroz_diana.jpg'
                },
                {
                    name: 'Arroz Roa',
                    price: '4200',
                    store: 'Isimo',
                    image: 'arroz_roa.jpg'
                },
            ],
            granos: [{
                    name: 'Granos Diana',
                    price: '4000',
                    store: 'Metro',
                    image: 'granos_diana.jpg'
                },
                {
                    name: 'Granos Roa',
                    price: '4200',
                    store: 'Isimo',
                    image: 'granos_roa.jpg'
                },
            ],
            avena: [{
                    name: 'Avena',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'avena.jpg'
                },
                {
                    name: 'Avena',
                    price: '3200',
                    store: 'Uno',
                    image: 'avena.jpg'
                },
            ],
            harinas: [{
                    name: 'Harinas Alpina',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'harinas_alpina.jpg'
                },
                {
                    name: 'Harinas',
                    price: '3200',
                    store: 'Uno',
                    image: 'harinas_colanta.jpg'
                },
            ],
            pastas: [{
                    name: 'Pastas',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'pastas.jpg'
                },
                {
                    name: 'Pastas Colanta',
                    price: '3200',
                    store: 'Uno',
                    image: 'pastas.jpg'
                },
            ],
            cafe: [{
                    name: 'Café',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'cafe.jpg'
                },
                {
                    name: 'Café',
                    price: '3200',
                    store: 'Uno',
                    image: 'cafe.jpg'
                },
            ],
            azucar: [{
                    name: 'Azúcar',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'azucar.jpg'
                },
                {
                    name: 'Azúcar',
                    price: '3200',
                    store: 'Uno',
                    image: 'azucar.jpg'
                },
            ],
            aceite: [{
                    name: 'Aceite',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'aceite.jpg'
                },
                {
                    name: 'Aceite',
                    price: '3200',
                    store: 'Uno',
                    image: 'aceite.jpg'
                },
            ],
            sal: [{
                    name: 'Sal',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'sal.jpg'
                },
                {
                    name: 'Sal',
                    price: '3200',
                    store: 'Uno',
                    image: 'sal.jpg'
                },
            ],
            res: [{
                    name: 'Carne de Res',
                    price: '15000',
                    store: 'Jumbo',
                    image: 'carne_res.jpg'
                },
                {
                    name: 'Carne de Res Premium',
                    price: '20000',
                    store: 'Uno',
                    image: 'carne_res_premium.jpg'
                },
            ],
            cerdo: [{
                    name: 'Carne de Cerdo',
                    price: '12000',
                    store: 'Metro',
                    image: 'carne_cerdo.jpg'
                },
                {
                    name: 'Costillas de Cerdo',
                    price: '18000',
                    store: 'Isimo',
                    image: 'costillas_cerdo.jpg'
                },
            ],
            pescado: [{
                    name: 'Pescado',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'pescado.jpg'
                },
                {
                    name: 'Pescado',
                    price: '3200',
                    store: 'Uno',
                    image: 'pescado.jpg'
                },
            ],
            pollo: [{
                    name: 'Pollo',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'pollo.jpg'
                },
                {
                    name: 'Pollo',
                    price: '3200',
                    store: 'Uno',
                    image: 'pollo.jpg'
                },
            ],
            jabon_polvo: [{
                    name: 'Jabón en Polvo Ariel',
                    price: '15000',
                    store: 'Ara',
                    image: 'jabon_ariel.jpg'
                },
                {
                    name: 'Jabón en Polvo Ace',
                    price: '14000',
                    store: 'Éxito',
                    image: 'jabon_ace.jpg'
                },
            ],
            lavaplatos: [{
                    name: 'Lavaplatos Axion',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'lavaplatos_axion.jpg'
                },
                {
                    name: 'Lavaplatos Dawn',
                    price: '3500',
                    store: 'Uno',
                    image: 'lavaplatos_dawn.jpg'
                },
            ],
            limpiapisos: [{
                    name: 'limpiapisos',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'limpiapisos.jpg'
                },
                {
                    name: 'limpiapisos',
                    price: '3200',
                    store: 'Uno',
                    image: 'limpiapisos.jpg'
                },
            ],
            jabon_barra: [{
                    name: 'jabon_barra',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'jabon_barra.jpg'
                },
                {
                    name: 'jabon_barra',
                    price: '3200',
                    store: 'Uno',
                    image: 'jabon_barra.jpg'
                },
            ],
            papel_higinico: [{
                    name: 'papel_higienico',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'papel_higiencico.jpg'
                },
                {
                    name: 'papel_higienico',
                    price: '3200',
                    store: 'Uno',
                    image: 'papel_higienico.jpg'
                },
            ],
            crema_dental: [{
                    name: 'crema_dental',
                    price: '3000',
                    store: 'Jumbo',
                    image: 'crema_dental.jpg'
                },
                {
                    name: 'crema_dental',
                    price: '3200',
                    store: 'Uno',
                    image: 'crema_dental.jpg'
                },
            ],
            shampoo: [{
                    name: 'Shampoo Sedal',
                    price: '8000',
                    store: 'Metro',
                    image: 'shampoo_sedal.jpg'
                },
                {
                    name: 'Shampoo Pantene',
                    price: '9000',
                    store: 'Isimo',
                    image: 'shampoo_pantene.jpg'
                },
            ],
            toallas_higienicas: [{
                    name: 'Toallas Higiénicas Nosotras',
                    price: '6000',
                    store: 'Ara',
                    image: 'toallas_nosotras.jpg'
                },
                {
                    name: 'Toallas Higiénicas Kotex',
                    price: '6500',
                    store: 'Éxito',
                    image: 'toallas_kotex.jpg'
                },
            ],
            desodorante: [{
                    name: 'desodorante',
                    price: '6000',
                    store: 'Ara',
                    image: 'desodorante.jpg'
                },
                {
                    name: 'desodorante',
                    price: '6500',
                    store: 'Éxito',
                    image: 'desodorante.jpg'
                },
            ],
            talco: [{
                    name: 'talco',
                    price: '6000',
                    store: 'Ara',
                    image: 'talco.jpg'
                },
                {
                    name: 'talco',
                    price: '6500',
                    store: 'Éxito',
                    image: 'talco.jpg'
                },
            ],
            jabon_bano: [{
                    name: 'jabon_bano',
                    price: '6000',
                    store: 'Ara',
                    image: 'jabon_bano.jpg'
                },
                {
                    name: 'jabon_bano',
                    price: '6500',
                    store: 'Éxito',
                    image: 'jabon_bano.jpg'
                },
            ],

            chocolates: [{
                    name: 'Chocolate Jet',
                    price: '1000',
                    store: 'Jumbo',
                    image: 'chocolate_jet.jpg'
                },
                {
                    name: 'Chocolate Ferrero',
                    price: '5000',
                    store: 'Uno',
                    image: 'chocolate_ferrero.jpg'
                },
            ],
            galletas: [{
                    name: 'Galletas Festival',
                    price: '2000',
                    store: 'Metro',
                    image: 'galletas_festival.jpg'
                },
                {
                    name: 'Galletas Ducales',
                    price: '3000',
                    store: 'Isimo',
                    image: 'galletas_ducales.jpg'
                },
            ],
            chitos: [{
                    name: 'chitos',
                    price: '6000',
                    store: 'Ara',
                    image: 'chitos.jpg'
                },
                {
                    name: 'chitos',
                    price: '6500',
                    store: 'Éxito',
                    image: 'chitos.jpg'
                },
            ],
        };

        const productListAgregados = [];

        function showCategory(category) {
            document.querySelectorAll('.category-section').forEach(section => {
                section.style.display = 'none';
            });

            document.getElementById(category).style.display = 'block';

            if (category !== 'productos_agregados') {
                categories[category].forEach(subcategory => {
                    const productList = document.getElementById(`product-list-${subcategory}`);
                    productList.innerHTML = '';

                    products[subcategory].forEach(product => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                        <td><img src="IMAGEN/${product.image}" alt="${product.name}"></td>
                        <td>${product.name}</td>
                        <td>${product.price}</td>
                        <td>${product.store}</td>
                        <td><button class="add-button" onclick="addProduct('${subcategory}', '${product.name}', '${product.price}', '${product.store}', '${product.image}')">AGREGAR</button></td>
                    `;
                        productList.appendChild(row);
                    });
                });
            } else {
                renderAddedProducts();
            }
        }

        function addProduct(subcategory, name, price, store, image) {
            productListAgregados.push({
                subcategory,
                name,
                price,
                store,
                image
            });
            alert(`${name} agregado a la lista de productos.`);
            renderAddedProducts(); // Actualizar la lista de productos agregados
        }

        function renderAddedProducts() {
            const productListAgregadosElement = document.getElementById('product-list-agregados');
            productListAgregadosElement.innerHTML = '';

            productListAgregados.forEach(product => {
                const row = document.createElement('tr');
                row.innerHTML = `
                <td><img src="IMAGEN/${product.image}" alt="${product.name}"></td>
                <td>${product.name}</td>
                <td>${product.price}</td>
                <td>${product.store}</td>
            `;
                productListAgregadosElement.appendChild(row);
            });
        }

        function searchCategory() {
            const searchInput = document.getElementById('search-input').value.toLowerCase();
            let found = false;

            document.querySelectorAll('.category-section').forEach(section => {
                section.style.display = 'none';
            });

            Object.keys(categories).forEach(category => {
                let categoryVisible = false;

                categories[category].forEach(subcategory => {
                    if (subcategory.includes(searchInput)) {
                        document.getElementById(category).style.display = 'block';
                        document.getElementById(`product-list-${subcategory}`).parentElement.style.display = 'block';
                        categoryVisible = true;
                    } else {
                        document.getElementById(`product-list-${subcategory}`).parentElement.style.display = 'none';
                    }
                });

                if (categoryVisible) {
                    document.getElementById(category).style.display = 'block';
                }
            });

            if (!found) {
                alert('Subcategoría no encontrada.');
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            showCategory('lacteos'); // Mostrar la primera categoría por defecto
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>