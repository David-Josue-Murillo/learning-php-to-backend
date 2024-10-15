<?php

require_once '../config/conexion.php';
require_once '../model/categoria.php';

$categoria = new Categoria();

switch($_GET['op']){
    case 'GetAll':
        $data = $categoria->getCategorias();
        echo json_encode($data);
    break;

    case 'GetId':
        $data = $categoria->getCategoriasPorId();
        echo json_encode($data);

    case 'insert':
        $data = $categoria->insertCategorias($body['cat_nombre'], $body['cat_obs']);
        echo json_encode('Insertado correctamente');
    break;
}