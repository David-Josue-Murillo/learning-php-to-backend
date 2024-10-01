<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas Compartidas</title>
</head>
<body>
    <h1>Compartiendo Tareas</h1>
    <p>Este es una tarea compartida</p>
    <p><span class="font-bold">Titulo:</span> {{ $task->title }}</p>
    <p><span class="font-bold">Descripción:</span> {{ $task->description }}</p>
    <p><span class="font-bold">Usuario:</span> {{ $task->user->name }} | {{ $task->user->email }}</p>
</body>
</html>