<?php

require_once 'autoload.php';

if(isset($_GET['controller'])) {
    $nameController = $_GET['controller'].'Controller';
} else {
    echo 'La pagina no existe';
    exit();
}

