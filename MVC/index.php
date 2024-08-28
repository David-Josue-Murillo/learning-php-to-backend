<?php

require_once 'Controllers/usuario.php';

$usuarioController = new UsuarioController();
$usuarioController->showAll();