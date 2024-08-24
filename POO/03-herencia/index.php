<?php

require_once ('clases.php');


$lenguajes = ["Java", "JavaScript", "PHP", "Python"];

$persona = new Persona("David", "Murillo", 21, 1.63);
$informatico = new Programador($lenguajes, 1200.99);
var_dump($informatico);