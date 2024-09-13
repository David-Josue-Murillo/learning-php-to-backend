<h1>Categorias</h1>
<h3><a href="{{ route('create') }}">Crear Categoria</a></h3>

@if (session('status'))
    <p style="background: red; color:white;">
        {{ session('status') }}
    </p>
@endif


<ul>
    @foreach ($categories as $category)
        <li>
            <a href="{{ route('getCategory', ['id' => $category->id]) }}">
                {{ $category->nombre }}
            </a>
        </li>
    @endforeach
</ul>