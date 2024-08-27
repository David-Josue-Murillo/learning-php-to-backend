<?php

class Person {
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    public function __call($method, $args) {
        echo "Llamada a: $method con argumentos: ";
        var_dump($args);
        echo "No existe<br/>";
    }
}

$David = new Person("David", 21, "Madrid");
echo $David->getNombre();