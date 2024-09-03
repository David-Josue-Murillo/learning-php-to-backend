
<div class="form_container">
    <h1 class="title__register">Registrarse</h1>
    <form action="<?=url?>user/save" method="post">
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