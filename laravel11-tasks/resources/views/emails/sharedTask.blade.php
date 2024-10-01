<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas Compartidas</title>
</head>
<body>
    <h1>Compartiendo Tareas</h1>
    <p>Hola {{ $user->name }}, te has compartido una tarea con el usuario {{ $task->user->name }}.</p>
</body>
</html>