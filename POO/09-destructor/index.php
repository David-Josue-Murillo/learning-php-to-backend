<?php

class Usuario {
    public $nombre;
    public $email;

    public function __construct() {
        echo "Constructor<br/>";
        $this->nombre = "David";
        $this->email = "david@gmail.com";
    }

    public function __tostring() {
        return "Usuario: " . $this->nombre . " - " . $this->email;
    }

    public function __destruct() {
        echo "<br/>Destructor";
    }
}

$user = new Usuario();
echo $user->__tostring();