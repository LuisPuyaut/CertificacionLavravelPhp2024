@extends('Layouts.app')

@section('content')
    <form class="row g-3" action="{{ route('grupos.destroy', $grupo->id) }}" method="POST">
        @csrf 
        <div class="mt-5 text-center bg-light">
            <h2> Eliminar Grupo </h2>
        </div>
        
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre"
                name="nombre" value="{{ $grupo->nombre }}" disabled>
        </div>
    
    
        <div class="col-md-6">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" 
                name="descripcion" disabled>{{ $grupo->descripcion }}</textarea>
        </div>
    
         <br>
    
        <div class="col-lg-12 col-12 text-center mt-3">
            <button type="submit" class="btn btn-primary">Eliminar</button>
            <a href="{{ route('grupos.index')}}" class="btn btn-secondary">Cancelar</a>
        </div>
    
    </form>
@endsection