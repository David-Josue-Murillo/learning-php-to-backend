<?php

class Categoria {
    public $nombre;
    public $descripcion;

    public function __construct($nombre) {
        $this->nombre = $nombre;
        $this->descripcion = "Categoria enfocada a la review de los productos";
    }
}