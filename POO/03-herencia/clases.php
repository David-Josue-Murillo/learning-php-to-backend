<?php

class Persona {

    private $nombre;
    private $apellido;
    private $edad;
    private $altura;

    public function __construct($nombre, $apellido, $edad, $altura) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->altura = $altura;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }
}

class Programador extends Persona {

    private $lenguajes;
    private $salario;

    public function __construct(array $lenguajes, float $salario) {
        $this->lenguajes = $lenguajes;
        $this->salario = $salario;
    }


    public function programarCodigo() {
        return "Escribiendo codigo";
    }

    public function mostrarLenguajes() {
        return "Lenguajes que dominas: $this->lenguajes";
    }

    public function verSalario() {
        return "Tu salario es: $this->salario";
    }
}