<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de peliculas</title>
</head>
<body>
    <h1> {{$title}} </h1>

    <ul>
        @foreach($lists as $list)
            <li>{{ $list }}</li>
        @endforeach
    </ul>
</body>
</html>