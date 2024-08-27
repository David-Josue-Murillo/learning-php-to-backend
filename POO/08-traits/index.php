<?php

trait Utilidades {
    public function mostrarNombre() {
        echo "<h1>El nombre es: ".$this->nombre."</h1>";
    }
}

class Coche {
    public $nombre;
    public $marca;

    use Utilidades;
}

class People {
    public $nombre;
    public $apellido;

    use Utilidades;
}

class VideoJuego {
    public $nombre;
    public $genero;
    
    use Utilidades;
}

$myCar = new Coche();
$myPerson = new People();
$myVideo = new VideoJuego();

$myCar->nombre = "Ferrari";
$myPerson->nombre = "David";
$myVideo->nombre = "Super Mario";

$myCar->marca = "Lamborghini";
$myPerson->apellido = "Murillo";
$myVideo->genero = "Super";


// Utilidades
$myCar->mostrarNombre();
$myPerson->mostrarNombre();
$myVideo->mostrarNombre();