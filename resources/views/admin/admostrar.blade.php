@extends('layouts.app')
@section('content')
    <table class="table table-bordered table-striped" id="tabla">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Usuarios</th>
            <th scope="col">Email</th>
            <th scope="col">Contraseña</th>
            <th scope="col">link</th>
            <th scope="col">Creado</th>
            <th scope="col">Actualizado</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->getId() }}</td>
                <td>{{ $user->getUsers() }}</td>
                <td>{{ $user->getEmail() }}</td>
                <td>{{ $user->getPass() }}</td>
                <td>{{ $user->getLink() }}</td>
                <td>{{ $user->getCreatedAt() }}</td>
                <td>{{ $user->getUpdate() }}</td>

            </tr>
        </tbody>
    </table>
@endsection
