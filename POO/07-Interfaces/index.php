<?php

interface Ordenadr {

    public function encender();
    public function apagar();   
    public function reiniciar();
}

class PcAsus implements Ordenadr {
    public $software;

    public function arrancarSoftware() {
        $this->software = true;
    }

    public function encender() {
        $this->encendido = true;
    }

    public function apagar() {
        $this->encendido = false;
    }

    public function reiniciar() {
        $this->encendido = false;
        $this->software = false;
    }
}

$myPc = new PcAsus();
$myPc->arrancarSoftware();
$myPc->encender();

echo $myPc->software;
$myPc->apagar();
$myPc->reiniciar();