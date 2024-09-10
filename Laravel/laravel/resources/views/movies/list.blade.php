@include('includes.header')

    {{-- COMENTARIO --}}
    @if (isset($title))
        <h1> {{$title}} </h1>
    @else
        <h1> Listado de peliculas 2024 </h1>
    @endif

    <ul>
        @foreach($lists as $list)
            <li>{{ $list }}</li>
        @endforeach
    </ul>

    @include('includes.footer')
</body>
</html>