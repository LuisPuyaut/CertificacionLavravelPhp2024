@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header text-white text-center" style="background-color: #245888">
                    <h3>Inicio de Sesión</h3>
                </div>
                <div class="card-body p-4">

                    <div class="text-center mb-4">
                        <img src="{{ asset('assets/img/ESFElogo.png') }}" alt="Login" class="img-fluid" style="max-width: 150px;">
                    </div>
                    <form action="{{ route('docentes.login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <div class="input-group">
                                <span class="input-group-text" id="email-addon"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email" required aria-describedby="email-addon">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <div class="input-group">
                                <span class="input-group-text" id="password-addon"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password" required aria-describedby="password-addon">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary w-100">Login</button>
                        @error('InvalidCredentials')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
