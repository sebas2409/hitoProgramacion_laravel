<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/login.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-4">
    <div class="container">
        <a class="navbar-brand">Aqui podras editar tus datos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<form method="POST" action="{{ route('edit.update',$user->getId()) }}" id="formulario">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="usuario">Nombre de usuario</label>
        <input type="text" class="form-control" id="usuario" name="usuario" value="{{ $user->getUsers()}}" >

    </div>
    <div class="mb-3">
        <label for="email">Correo Electronico</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ $user->getEmail() }}">
    </div>
    <div class="mb-3">
        <label for="password">Contraseña</label>
        <input type="text" class="form-control" id="password" name="pass" value="{{ $user->getPass() }}">
    </div>
    <div class="mb-3">
        <label for="link">Link</label>
        <input type="text" class="form-control" id="link" name="link" value="{{ $user->getLink() }}">
    </div>

    <button type="submit" class="btn btn-primary bg-primary">Editar</button>
</form>

<script src="{{ secure_asset('js/app.js') }}"></script>
</body>
</html>
