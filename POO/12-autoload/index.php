<?php

require_once 'autoload.php';

/*$user = new Usuario();
echo $user->nombre. "<br/>";

$categoria = new Categoria("Reviews");
echo $categoria->nombre. "<br/>";

$entrada = new Entrada();
echo $entrada->titulo. "<br/>";
echo $entrada->fecha. "<br/>";
 */

 use MisClases\Categoria;
 use MisClases\Entrada;
 use MisClases\Usuario;

 class Principal {
    public$usuario;
    public $categoria;
    public $entrada;

    public function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria("Reviews");
        $this->entrada = new Entrada();
    }
 }

 $principal = new Principal();
 var_dump($principal->usuario);