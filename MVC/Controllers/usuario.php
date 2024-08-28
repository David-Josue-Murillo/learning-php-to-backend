<?php

class UsuarioController {
    public function showAll() {
        require_once '../Models/usuario.php';

        // Instancia
        $user = new Usuario();
        $user->getAll();
    }
}