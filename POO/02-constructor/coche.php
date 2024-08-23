<?php 
// Programación orientada a objetos

class Coche {
    
    // Atributos
    public $brand; // Marca
    public $model; // Modelo
    public $color;
    public $speed; // Velocidad

    
    // Constructor
    public function __construct() {
        $this->brand = 'Ford';
        $this->model = 'Mustang';
        $this->color = 'azul';
        $this->speed = 120;
    }


    // Métodos
    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function accelerate() {
        $this->speed += 15;
    }

    public function brake() {
        $this->speed -= 10;
    }
 

    public function getSpeed() {
        return $this->speed;
    }
}
