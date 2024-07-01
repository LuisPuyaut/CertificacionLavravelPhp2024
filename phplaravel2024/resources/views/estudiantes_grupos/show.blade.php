@extends('layouts.app')

@section('content')
    <form  class="row g-3">
            <div class="mt-5 text-center bg-light">
                <h2> Ver Docente Grupo </h2>
            </div>
        
            <div class="col-md-6">
                <label for="estudiante_nombre" class="form-label">Docente</label>
                <input type="text" class="form-control" id="docente_nombre" value=" {{ $estudianteGrupo->estudiante->nombre }} {{ $estudianteGrupo->estudiante->apellido }}" disabled>
            </div>
    
    
            <div class="col-md-4">
                <label for="grupo_nombre" class="form-label">Grupo</label>
                <input type="text" class="form-control" id="grupo_nombre" value=" {{ $estudianteGrupo->grupo->nombre }}" disabled>
            </div>
    
                <br>
    
            <div class="col-lg-12 col-12 text-center mt-3">
                <a href="{{ route('estudiantes_grupos.index') }}" class="btn btn-primary">Retornar</a>
            </div>
       
    </form>
   
@endsection