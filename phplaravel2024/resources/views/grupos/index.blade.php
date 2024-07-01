@extends('Layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert alert-success fade show" id="success-message"
         data-bs-dismiss="alert" role="alert">
            {{ session('success')}}
        </div>    
    @endif
    <form class="row g-3" action="{{ route('grupos.index') }}" method="GET">
        @csrf 
        <div class="mt-5 text-center bg-light">
            <h2>Lista de Grupos</h2>
        </div>
       
        <div class="col-sm-4">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        </div>
        <br>
       
        <div class="col-lg-3 col-12 justify-content-center d-flex align-items-end mt-2"">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i> Buscar
            </button>
            <span style="margin-left: 10px;"></span>
            <button onclick="window.location.href = '{{ route('grupos.create') }}'" type="button" class="btn btn-secondary">
                <i class="fas fa-user-plus"></i> Nuevo
            </button>
        </div>
       

    </form>

    <div class="row justify-content-center mt-3">
    <table class="table table-striped">
        <thead > 
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grupos as $grupo)
                <tr>
                    <td>{{ $grupo->nombre }}</td>
                    <td>{{ $grupo->descripcion }}</td>
                    <td>
                        <table>
                            <td>
                                <a href="{{ route('grupos.edit', $grupo->id) }}" class="btn btn-warning">Editar</a>
                            </td>
                            <td>
                                <a href="{{ route('grupos.show', $grupo->id) }}" class="btn btn-info">Ver</a>
                            </td>
                            <td>
                                <a href="{{ route('grupos.delete', $grupo->id) }}" class="btn btn-danger">Eliminar</a>
                            </td>
                        </table>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-12">
            {{ $grupos->links()}}
        </div>
    </div>
    </div>
    
@endsection