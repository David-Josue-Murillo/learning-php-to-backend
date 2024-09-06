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
    <?php else : ?>

        <h3>Bienvenido <?=$_SESSION['identity']->getNombre()?></h3>

        <a href="#">Mis pedidos</a>
        <a href="#">Gestionar pedidos</a>
        <a href="#">Gestionar categorias</a>
    <?php endif; ?>
    </div>
</aside>