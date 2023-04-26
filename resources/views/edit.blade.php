<!DOCTYPE html>
<html>
<head>
    <title>Agregar Estudiante</title>
</head>
<body>
    <form action="{{ route('estudiante.update', $estudiante->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ $estudiante->nombre }}" required>
        </div>
        <div>
            <label>Apellido:</label>
            <input type="text" name="apellido" value="{{ $estudiante->apellido }}" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>
    </body>
</html>
