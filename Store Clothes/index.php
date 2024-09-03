<?php
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'helpers/utils.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';


if(isset($_GET['controller'])) {
    $nameController = $_GET['controller'].'Controller';
    $userController = new $nameController();

    if(isset($_GET['action']) && method_exists($userController, $_GET['action'])) {
        $action = $_GET['action'];
        $userController->$action();
    } elseif (!isset($_GET['controller']) && isset($_GET['action'])) {
        $actionDefault = controllerDefault.'Controller';
    } else {
        $error->index();
    }
} elseif (!isset($_GET['controller']) && isset($_GET['action'])) {
    $nameController = controllerDefault.'Controller';
} else {
    $error = new errorController();
    $error->index();
}

require_once 'views/layout/footer.php';
