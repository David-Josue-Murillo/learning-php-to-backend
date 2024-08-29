

<h1>Listado de notas</h1>

<?php
foreach ($notas as $nota) {
    echo "<h3>".$nota['titulo']."</h3>";
    echo "<p>".$nota['descripcion']."</p>";
}
?>
