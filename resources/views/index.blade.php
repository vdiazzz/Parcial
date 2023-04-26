<!DOCTYPE html>
<html>
<head>
    <title>Lista de estudiantes</title>
</head>
<body>
    <h1>Lista de estudiantes</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $index => $estudiante)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->apellido }}</td>
                <td>
                <form action="{{ route('estudiante.destroy', $estudiante->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('estudiante.create') }}">Agregar Estudiante</a>
</body>
</html>

