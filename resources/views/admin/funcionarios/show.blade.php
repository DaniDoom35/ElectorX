<!-- admin/administradores/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Administrador</h1>

    <p><strong>Nombre:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>

    <a href="{{ route('admin.administradores.index') }}" class="btn btn-secondary">Volver al Listado</a>
</div>
@endsection
