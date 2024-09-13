<h1>Categorias</h1>

<ul>
    @foreach ($categories as $category)
        <li>{{ $category->nombre }}</li>
    @endforeach
</ul>