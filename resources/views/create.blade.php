<!DOCTYPE html>
<html>
<head>
    <title>Agregar Estudiante</title>
</head>
<body>
    <form action="{{ route('estudiante.store') }}" method="POST">
        @csrf
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
        </div>
        <div>
            <label>Apellido:</label>
            <input type="text" name="apellido" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>

