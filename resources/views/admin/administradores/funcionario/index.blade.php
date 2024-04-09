<!-- funcionario/funcionarioistradores/index.blade.php -->

@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Listado de funcionarioistradores</h1>

    <a href="{{ route('funcionario.funcionarioistradores.create') }}" class="btn btn-primary mb-3">Crear Nuevo funcionarioistrador</a>

    @if ($funcionarioistradores->isEmpty())
        <p>No hay funcionarioistradores registrados.</p>
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
                @foreach ($funcionarios as $funcionario)
                    <tr>
                        <td>{{ $funcionario->id }}</td>
                        <td>{{ $funcionario->name }}</td>
                        <td>{{ $funcionario->email }}</td>
                        <td>
                            <a href="{{ route('funcionario.funcionarioistradores.show', $funcionario->id) }}" class="btn btn-info">Ver Detalles</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
