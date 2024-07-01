@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success fade show" id="success-message"
         data-bs-dismiss="alert" role="alert">
            {{ session('success') }}
        </div>
    @endif 

    <form class="row g-3"  action="{{ route('docentes_grupos.index') }}" method="GET">
        @csrf
        <div class="mt-5 text-center bg-light">
            <h2>Lista de Docente Grupo </h2>
        </div>

        <div class="col-sm-4">
            <label for="docente_id" class="form-label">Docente</label>
            <select name="docente_id" class="form-control">
                <option value="">Seleccione un docente</option>
                @foreach ($docentes as $docente)
                    <option value="{{ $docente->id }}">{{ $docente->nombre }} {{ $docente->apellido }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="col-lg-3 col-12 justify-content-center d-flex align-items-end mt-2">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i> Buscar
            </button>
            <span style="margin-left: 10px;"></span>
            <button onclick="window.location.href = '{{ route('docentes_grupos.create') }}'" type="button" class="btn btn-secondary">
                <i class="fas fa-user-plus"></i> Nuevo
            </button>
        </div>
    </form>
    <div class="row justify-content-center mt-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Docente</th>
                <th>Grupo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($docentesGrupos as $docenteGrupo)
                <tr>
                    <td>{{ $docenteGrupo->docente->nombre }} {{ $docenteGrupo->docente->apellido }}</td>
                    <td>{{ $docenteGrupo->grupo->nombre }}</td>
                    <td>
                        <table>
                            <td>
                                <a href="{{ route('docentes_grupos.edit', $docenteGrupo->id) }}" class="btn btn-warning">Editar</a>
                            </td>
                            <td>
                                <a href="{{ route('docentes_grupos.show', $docenteGrupo->id) }}" class="btn btn-info">Ver</a>
                            </td>
                            <td>
                                <a href="{{ route('docentes_grupos.delete', $docenteGrupo->id) }}" class="btn btn-danger">Eliminar</a>
                            </td>
                        </table>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-12">
            {{ $docentesGrupos->links() }}
        </div>
    </div>
    </div>
    
@endsection