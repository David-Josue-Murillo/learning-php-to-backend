<?php
require_once '../vendor/autoload.php';

// Conexión a la base de datos
$conexion = new mysqli('localhost', 'root', 'root', 'notas_master');
$conexion->query("SET NAMES utf8");

// Consulta
$query = $conexion->query("SELECT * FROM entradas");
$numElements = $query->num_rows;
$numElementsPage = 2;

// Paginación
$pagination = new Zebra_Pagination();
$pagination->records($numElements); // Elementos a paginar
$pagination->records_per_page($numElementsPage); // Elementos por página

$page = $pagination->get_page(); // Página actual   

// Consulta
$offset = ($page-1)*$numElementsPage;
$sql = "SELECT * FROM entradas LIMIT $offset, $numElementsPage";
$notas = $conexion->query($sql);  

while ($nota = $notas->fetch_assoc()) {
    echo "<h1>".$nota['titulo']."</h1>";
    echo "<h3>".$nota['descripcion']."</h3>";
}