@extends('layouts.formulario')
@section('title','Login Page')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-4">
        <div class="container">
            <a class="navbar-brand">Bienvenido</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{ route('login') }}">Acceso</a>
                    <a class="nav-link active" href="{{ route('registro') }}">Regsitro</a>
                </div>
            </div>
        </div>
    </nav>
    <header class="masthead bg-secondary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>Si no tienes una cuenta, debes registrarte primero</h2>
        </div>
    </header>
    <form method="GET" action="" id="formulario">
        @csrf
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">👤</span>
                </div>
                <label for="usuario"></label>
                <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario">
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">🔐</span>
                </div>
                <label for="password"></label>
                <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password">
            </div>
        </div>

        <div class="col-12 mt-3" id="boton-registrarse">
            <button class="btn btn-primary" type="submit" id="iniciarSesion" name="iniciarSesion">Iniciar sesión</button>
        </div>
    </form>
@endsection
