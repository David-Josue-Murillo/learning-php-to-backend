<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - @yield('title')</title>
</head>
<body>
    @section('header')
        CABECERA DE LA WEB 
    @show
    <hr>

    <div class="container">
        @yield('content')
    </div>
    <hr>

    @section('footer')
        PIE DE PAGINA DE LA WEB
    @show
</body>
</html>