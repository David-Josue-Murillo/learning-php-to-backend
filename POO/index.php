<?php

abstract class Ordenador {
    
    public $encendido;

    abstract public function encender();
 
    public function apagar() {
        $this->encendido = false;
    }
}

class PcAsus extends Ordenador {
    public $software;

    public function arrancarSoftware() {
        $this->software = true;
    }

    public function encender() {
        $this->encendido = true;
    }
}


$pc = new PcAsus();
$pc->arrancarSoftware();
$pc->encender();

echo $pc->software;
$pc->apagar();