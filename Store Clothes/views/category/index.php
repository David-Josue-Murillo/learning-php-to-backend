<h1 class="title">Gestionar Categorias</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($categories as $category) : ?>
        <tr>
            <td><?=$category['id']?></td>
            <td><?=$category['nombre']?></td>
            <td>
                <a href="#">Editar</a>
                <a href="#">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>