@extends('layouts.app')

@section('content')
    <form class="row g-3" action="{{ route('docentes_grupos.update', $docenteGrupo->id) }}" method="POST">
        @csrf
        <div class="mt-5 text-center bg-light">
            <h2> Editar Docente Grupo </h2>
        </div>
        
        <div class="col-md-6">
            <label for="docente_id" class="form-label">Docente</label>
            <select name="docente_id" class="form-control" required>
                <option value="">Seleccione un docente</option>
                @foreach ($docentes as $docente)
                <option value="{{ $docente->id }}" @if($docente->id == $docenteGrupo->docente_id) selected @endif>
                    {{ $docente->nombre }} {{ $docente->apellido }}</option>
            @endforeach
            </select>
        </div>


        <div class="col-md-4">
            <label for="grupo_id" class="form-label">Grupo</label>
            <select name="grupo_id" class="form-control" required>
                <option value="">Seleccione un grupo</option>
                @foreach ($grupos as $grupo)
                <option value="{{ $grupo->id }}" @if($grupo->id == $docenteGrupo->grupo_id) selected @endif>
                    {{ $grupo->nombre }}</option>
                @endforeach
            </select>
        </div>
    <br>

        <div class="col-lg-12 col-12 text-center mt-3">
            <button type="submit" class="btn btn-primary">Modificar</button>
            <a href="{{ route('docentes_grupos.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>

    </form>
@endsection