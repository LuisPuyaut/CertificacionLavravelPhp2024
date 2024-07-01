@extends('layouts.app')

@section('content')
    <form class="row g-3" action="{{ route('docentes_grupos.destroy', $docenteGrupo->id) }}" method="POST">
        @csrf
            <div class="mt-5 text-center bg-light">
                <h2> Eliminar Docente Grupo </h2>
            </div>
            
            <div class="col-md-6">
                <label for="docente_nombre" class="form-label">Docente</label>
                <input type="text" class="form-control" id="docente_nombre"
                    value=" {{ $docenteGrupo->docente->nombre }} {{ $docenteGrupo->docente->apellido }}" disabled>
            </div>
    
            <div class="col-md-4">
                <label for="grupo_nombre" class="form-label">Grupo</label>
                <input type="text" class="form-control" id="grupo_nombre" value=" {{ $docenteGrupo->grupo->nombre }}"
                    disabled>
            </div>
    
        <br>
        
        <div class="col-lg-12 col-12 text-center mt-3">
            <button type="submit" class="btn btn-primary">Eliminar</button>
            <a href="{{ route('docentes_grupos.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
     
    </form>
@endsection