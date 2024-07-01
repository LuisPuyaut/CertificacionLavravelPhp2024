@extends('layouts.app')

@section('content')
    <form  class="row g-3">
        <div class="mt-5 text-center bg-light">
            <h2> Ver Estudiante </h2>
        </div>
        
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" value="{{ $estudiante->nombre }}" disabled>
        </div>
        <div class="col-md-6">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" value="{{ $estudiante->apellido }}" disabled>
        </div>
    

        <div class="col-md-6">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $estudiante->email }}" disabled>
        </div>
       
        <br>
        <div class="col-lg-12 col-12 text-center mt-3">
            <a href="{{ route('estudiantes.index') }}" class="btn btn-primary">Retornar</a>
        </div>
    </form>
    
@endsection