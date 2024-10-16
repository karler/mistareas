<?php
    require_once __DIR__.'/includes/functions.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Tarea</title>
</head>
<body>
    <h1>Agregar Nueva Tarea</h1>
    <form method="POST">
        <label>Curso:</label><br>
        <input type="text" name="curso"><br>
        <label>Descripción:</label><br>
        <input type="text" name="descripción"><br>
        <label>Fecha de entrega:</label><br>
        <input type="date" name="fechaentrega"><br>
        <input type="submit" value="Crear Tarea">
    </form><br><br>
    <a href="index.php">Volver a la lista de tareas</a>
</body>
</html>