<?php

require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

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
    $error = new errorController();
    $error->index();
}

require_once 'views/layout/footer.php';
