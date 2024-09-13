@if (isset($category) && is_object($category))
    <h1>Editar Categoria</h1>
@else
    <h1>Nueva Categoria</h1>
@endif

<form action="{{ isset($category) ? route('update') : route('save') }}" method="post">
    {{ csrf_field() }}

    @if (isset($category) && is_object($category))
    <input type="hidden" name="id" value="{{ $category->id }}" />
    @endif

    <label for="name">Nombre de la categoria</label>
    <input type="text" name="name" value="{{ isset($category) ? $category->nombre : '' }}">

    <input type="submit" value="Enviar">
</form>