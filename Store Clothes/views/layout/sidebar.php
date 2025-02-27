<aside id="lateral">
    <div id="login" class="block_aside">

    <?php if(!isset($_SESSION['identity'])) : ?>
        <h3>Iniciar Sesión</h3>
        <form action="index.php?controller=user&action=login" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" placeholder="Contraseña">
            <input type="submit" value="Iniciar Sesión">
        </form>
        <a href="index.php?controller=user&action=register">Registrate aqui</a>
    <?php else : ?>

        <h3>Bienvenido <?=$_SESSION['identity']->getNombre()?></h3>

        <a href="#">Mis pedidos</a>
        <?php if(isset($_SESSION['admin'])) : ?>
            <a href="index.php?controller=category&action=create">Gestionar pedidos</a>
            <a href="#">Gestionar categorias</a>
            <a href="#">Gestionar productos</a>
        <?php endif; ?>
        <a href="index.php?controller=user&action=logout">Cerrar Sesión</a>
    <?php endif; ?>
    </div>
</aside>