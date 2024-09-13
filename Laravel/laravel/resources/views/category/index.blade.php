<h1>Categorias</h1>

<ul>
    @foreach ($categories as $category)
        <li>
            <a href="{{ route('getCategory', ['id' => $category->id]) }}">
                {{ $category->nombre }}
            </a>
        </li>
    @endforeach
</ul>