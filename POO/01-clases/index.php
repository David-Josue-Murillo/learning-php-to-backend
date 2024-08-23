<?php 
// Programación orientada a objetos

class Coche {
    
    // Atributos
    public $brand; // Marca
    public $model; // Modelo
    public $color;
    public $speed; // Velocidad


    // Métodos
    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function accelerate() {
        $this->speed++;
    }

    public function brake() {
        $this->speed--;
    }
 

    public function getSpeed() {
        return $this->speed;
    }
}

// Instancia
$mycar = new Coche();

// Usando metodos
$mycar->accelerate();