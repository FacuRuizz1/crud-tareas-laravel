<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">📋 Lista de Tareas</h1>
        <a href="{{ route('tareas.create') }}" class="btn btn-primary">➕ Nueva Tarea</a>
    </div>

    @forelse($tareas as $tarea)
    <div class="card mb-3 shadow-sm">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="card-title {{ $tarea->completada ? 'text-decoration-line-through text-muted' : '' }}">
                    {{ $tarea->titulo }}
                </h5>
                <p class="card-text text-muted">{{ $tarea->descripcion }}</p>
                <span class="badge {{ $tarea->completada ? 'bg-success' : 'bg-warning text-dark' }}">
                    {{ $tarea->completada ? 'Completada ✅' : 'Pendiente ⏳' }}
                </span>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('tareas.edit', $tarea->id) }}" class="btn btn-warning btn-sm">✏️ Editar</a>
                <form action="{{ route('tareas.destroy', $tarea->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">🗑️ Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="alert alert-info">No hay tareas todavía. ¡Creá una! 😄</div>
    @endforelse
</div>
</body>
</html>