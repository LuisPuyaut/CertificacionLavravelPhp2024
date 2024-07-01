@extends('layouts.app')

@section('content')
   
    <form class="row g-3" action="{{ route('docentes.update', $docente->id) }}" method="POST">
        @csrf
        <div class="mt-5 text-center bg-light">
            <h2> Editar Docente </h2>
        </div>
      
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $docente->nombre }}"
                required>
        </div>
        <div class="col-md-6">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $docente->apellido }}"
                required>
        </div>
       
        <div class="col-md-6">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $docente->email }}"
                required>
        </div>
    
        <br>
       
        <div class="col-lg-12 col-12 text-center mt-3">
            <button type="submit" class="btn btn-primary">Modificar</button>
            <a href="{{ route('docentes.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>

    </form>
@endsection