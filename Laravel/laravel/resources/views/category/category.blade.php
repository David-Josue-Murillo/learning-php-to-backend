<h1> {{ $category->nombre }}</h1>
<p>Descripción de la categoria</p>

<a href=" {{ route('delete', ['id' => $category->id]) }}">Eliminar</a>
<a href=" {{ route('edit', ['id' => $category->id]) }}">Actualizar</a>