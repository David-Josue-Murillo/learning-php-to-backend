<h1>Nueva Categoria</h1>

<form action="{{ route('save') }}" method="post">
    {{ csrf_field() }}
    <label for="name">Nombre de la categoria</label>
    <input type="text" name="name">

    <input type="submit" value="Enviar">
</form>