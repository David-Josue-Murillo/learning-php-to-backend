<h1>Bienvendio a mi web con MVC</h1>
<?php

require_once 'Controllers/usuario.php';

$usuarioController = new UsuarioController();

if(isset($_GET['action'])) {
    $action = $_GET['action'];
    $usuarioController->$action();
}