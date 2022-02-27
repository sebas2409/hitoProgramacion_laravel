<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="{{ mix('js/app.js') }}"></script>
    <title>@yield('title','Pagina Principal')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="{{ route('app.principal')}}">Página Principal</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="navbar-brand " aria-current="page" href="{{ route('mostrar.show') }}">Mostrar Datos</a>
                </li>
            </ul>
            <form class="d-flex" method="post" action="">
                <a href="{{ route('login') }}" class="btn btn-outline-danger" type="submit">Cerrar Sesión</a>
            </form>
        </div>
    </div>
</nav>
@yield('content')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
