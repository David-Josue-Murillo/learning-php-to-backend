<h1>Formulario en laravel</h1>
<form action="{{ route('getFormulario') }}" method="post">
    {{ csrf_field() }}
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name">

    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <input type="submit" value="Enviar">
</form>