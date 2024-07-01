@extends('layouts.app')

@section('content')
   
    <form class="row g-3" action="{{ route('estudiantes_grupos.store') }}" method="POST">
        @csrf
        <div class="mt-5 text-center bg-light">
            <h2> Nuevo Estudiante Grupo </h2>
        </div>
       
        <div class="col-md-6">
            <label for="estudiante_id" class="form-label">Estudiante</label>
            <select name="estudiante_id" class="form-control" required>
                <option value="">Seleccione un estudiante</option>
                @foreach ($estudiantes as $estudiante)
                    <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</option>
                @endforeach
            </select>
        </div>
    
        <div class="col-md-4">
            <label for="grupo_id" class="form-label">Grupo</label>
            <select name="grupo_id" class="form-control" required>
                <option value="">Seleccione un grupo</option>
                @foreach ($grupos as $grupo)
                    <option value="{{ $grupo->id }}">{{ $grupo->nombre }}</option>
                @endforeach
            </select>
        </div>
        
        <br>
        
        <div class="col-lg-12 col-12 text-center mt-3">
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{ route('estudiantes_grupos.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    
    </form>
@endsection