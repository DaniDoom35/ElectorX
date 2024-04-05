@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Administradores</h1>

        <a href="{{ route('administradores.create') }}" class="btn btn-primary">Crear Administrador</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <!-- Agrega aquí más columnas si es necesario -->
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($administradores as $administrador)
                    <tr>
                        <td>{{ $administrador->id }}</td>
                        <td>{{ $administrador->name }}</td>
                        <td>{{ $administrador->email }}</td>
                        <!-- Agrega aquí más columnas si es necesario -->
                        <td>
                            <a href="{{ route('administradores.edit', $administrador->id) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route('administradores.destroy', $administrador->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
