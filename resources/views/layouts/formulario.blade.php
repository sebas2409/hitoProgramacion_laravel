<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/login.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ secure_asset('js/script.js') }}"></script>
    <title>@yield('title','Welcome')</title>
</head>
<body>
@yield('content')


<script src="{{ secure_asset('js/app.js') }}"></script>
</body>
</html>
