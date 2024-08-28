<h1>Bienvendio a mi web con MVC</h1>
<?php

require_once 'Controllers/usuario.php';

if(isset($_GET['controller']) && class_exists($_GET['controller'])) {
    $controller = $_GET['controller'];
    $usuarioController = new $controller();

    if(isset($_GET['action']) && method_exists($usuarioController, $_GET['action'])) {
        $action = $_GET['action'];
        $usuarioController->$action();
    } else {
        echo "No existe la acción";
    }
} else {
    echo "No existe el controlador";
}

