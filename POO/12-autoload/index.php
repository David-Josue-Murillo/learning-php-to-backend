<?php

require_once 'autoload.php';

$user = new Usuario();
echo $user->nombre. "<br/>";

$categoria = new Categoria("Reviews");
echo $categoria->nombre. "<br/>";

$entrada = new Entrada();
echo $entrada->titulo. "<br/>";
echo $entrada->fecha. "<br/>";