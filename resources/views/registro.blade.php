@extends('layouts.formulario')
@section('title','Register Page')
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
    <form action="" method="post" id="formulario">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">👤</span>
                </div>
                <label for="usuario"></label>
                <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario" required>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="input-group">
                <label for="email"></label>
                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                <div class="input-group-append">
                    <span class="input-group-text">📬</span>
                </div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">🔐</span>
                </div>
                <label for="password"></label>
                <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password"
                       required>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">🔗</span>
                </div>
                <label for="link"></label>
                <input type="url" class="form-control" placeholder="Ingrese el link" name="link" id="link" required>
            </div>
        </div>
        <div class="col-12 mt-3" id="boton-registrarse">
            <button class="btn btn-primary" type="submit" name="registrarse">Crear cuenta</button>
        </div>
    </form>
@endsection
