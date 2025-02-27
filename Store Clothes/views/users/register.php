
<div class="form_container">
    <h1 class="title__register">Registrarse</h1>
    
    <?php
        if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete') {
            echo '<div class="alert_green">Registro completado</div>';
        } elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failded') {
            echo '<div class="alert_red">Error al registrar</div>';
        } elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'empty') {
            Utils::deleteSession('register');
        }
    ?>

    <form action="index.php?controller=user&action=save" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" required>

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Contraseña" required>

        <input type="submit" value="Registrarse">
    </form>
</div>