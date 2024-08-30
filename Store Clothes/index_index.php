<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>T-Shirt Shop</title>
</head>
<body>
    <header class="header" id="header">
        <div id="logo">
            <img src="assets/img/camiseta.png" alt="camiseta_logo">
            <a href="index.php">T-Shirt Shop</a>
        </div>
    </header>

    <nav id="menu">
        <ul>
            <li>
                <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="index.php">Categoria 1</a>
            </li>
            <li>
                <a href="index.php">Categoria 2</a>
            </li>
            <li>
                <a href="index.php">Categoria 3</a>
            </li>
            <li>
                <a href="index.php">Categoria 4</a>
            </li>
        </ul>
    </nav>

    <div id="content">
        <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Iniciar Sesión</h3>
                    <form action="index.php" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="Contraseña">
                        <input type="submit" value="Iniciar Sesión">
                    </form>

                    <a href="#">Mis pedidos</a>
                    <a href="#">Gestionar pedidos</a>
                    <a href="#">Gestionar categorias</a>
                </div>
        </aside>

        <div id="central">
            <div id="product">
                <img src="assets/img/camiseta.png" alt="camiseta">
                <h2>Camiseta Azul</h2>
                <p>Precio: 100.00</p>
                <a href="#">Comprar</a>
            </div>
        </div>

        <div id="central">
            <div id="product">
                <img src="assets/img/camiseta.png" alt="camiseta">
                <h2>Camiseta Azul</h2>
                <p>Precio: 100.00</p>
                <a href="#">Comprar</a>
            </div>
        </div>

        <div id="central">
            <div id="product">
                <img src="assets/img/camiseta.png" alt="camiseta">
                <h2>Camiseta Azul</h2>
                <p>Precio: 100.00</p>
                <a href="#">Comprar</a>
            </div>
        </div>

        <div id="central">
            <div id="product">
                <img src="assets/img/camiseta.png" alt="camiseta">
                <h2>Camiseta Azul</h2>
                <p>Precio: 100.00</p>
                <a href="#">Comprar</a>
            </div>
        </div>
    </div>

    <footer id="footer">
        <p>Desarrollador por David Murillo &copy; <?php echo date('Y'); ?></p>
    </footer>
</body>
</html> 