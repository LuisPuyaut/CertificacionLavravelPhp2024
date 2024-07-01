@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success fade show" id="success-message"
         data-bs-dismiss="alert" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form class="row g-3"  action="{{ route('estudiantes_grupos.index') }}" method="GET">
        @csrf
        <div class="mt-5 text-center bg-light">
            <h2>Lista de Estudiante Grupo </h2>
        </div>

        <div class="col-sm-4">
            <label for="estudiante_id" class="form-label">Estudiante</label>
            <select name="estudiante_id" class="form-control">
                <option value="">Seleccione un estudiante</option>
                @foreach ($estudiantes as $estudiante)
                    <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="col-lg-3 col-12 justify-content-center d-flex align-items-end mt-2">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i> Buscar
            </button>
            <span style="margin-left: 10px;"></span>
            <button onclick="window.location.href = '{{ route('estudiantes_grupos.create') }}'" type="button" class="btn btn-secondary">
                <i class="fas fa-user-plus"></i> Nuevo
            </button>
        </div>
    </form>
    <div class="row justify-content-center mt-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Grupo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantesGrupos as $estudianteGrupo)
                <tr>
                    <td>{{ $estudianteGrupo->estudiante->nombre }} {{ $estudianteGrupo->estudiante->apellido }}</td>
                    <td>{{ $estudianteGrupo->grupo->nombre }}</td>
                    <td>
                        <table>
                            <td>
                                <a href="{{ route('estudiantes_grupos.edit', $estudianteGrupo->id) }}" class="btn btn-warning">Editar</a>
                            </td>
                            <td>
                                <a href="{{ route('estudiantes_grupos.show', $estudianteGrupo->id) }}" class="btn btn-info">Ver</a>
                            </td>
                            <td>
                                <a href="{{ route('estudiantes_grupos.delete', $estudianteGrupo->id) }}" class="btn btn-danger">Eliminar</a>
                            </td>
                        </table>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-12">
            {{ $estudiantesGrupos->links() }}
        </div>
    </div>
    </div>
    
@endsection