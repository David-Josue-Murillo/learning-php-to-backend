<?php

class Usuario {
    public $nombre;
    public $email;

    public function __construct() {
        echo "Constructor";
    }

    public function __destruct() {
        echo "Destructor";
    }
}

$user = new Usuario();