<!-- admin/administradores/index.blade.php -->

@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Listado de Administradores</h1>

    <a href="{{ route('admin.administradores.create') }}" class="btn btn-primary mb-3">Crear Nuevo Administrador</a>

    @if ($administradores->isEmpty())
        <p>No hay administradores registrados.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administradores as $admin)
                    <tr>
                        <td>{{ $admin->id }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>
                            <a href="{{ route('admin.administradores.show', $admin->id) }}" class="btn btn-info">Ver Detalles</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
