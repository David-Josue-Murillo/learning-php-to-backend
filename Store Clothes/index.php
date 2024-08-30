<?php

require_once 'autoload.php';

if(isset($_GET['controller'])) {
    $nameController = $_GET['controller'].'Controller';
    $userController = new $nameController();

    if(isset($_GET['action']) && method_exists($userController, $_GET['action'])) {
        $action = $_GET['action'];
        $userController->$action();
    } else {
        echo "No existe la acción";
    }
} else {
    echo 'La pagina no existe';
    exit();
}
