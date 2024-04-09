<!-- admin/administradores/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Administrador</h1>

    <form method="POST" action="{{ route('admin.administradores.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear Administrador</button>
    </form>
</div>
@endsection
