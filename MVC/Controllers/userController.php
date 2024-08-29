<?php

class UsuarioController {
    public function showAll() {
        require_once 'Models/usuario.php';

        // Instancia
        $user = new Usuario();
        $allUsers = $user->getAll();

        // Vista
        require_once 'Views/users/showAll.php';
    }

    public function createUsers() {
        require_once 'Views/users/create.php';
    }
}