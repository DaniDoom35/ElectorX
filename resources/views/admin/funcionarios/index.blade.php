@extends('layouts.funcionario')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Inicio Funcionario - Listado de Votantes</h1>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Clave Elector</th>
                            <th>Nombre</th>
                            <th>CURP</th>
                            <th>Vigencia</th>
                            <th>Acción</th> <!-- Agregamos una columna para la acción -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->clave_elector }}</td>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->curp }}</td>
                            <td>{{ $usuario->vigencia }}</td>
                            <td>
                                @if (substr($usuario->curp, 4, 2) >= '08')
                                    <!-- La condición verifica que el año de emisión sea mayor o igual a '08' (2008) -->

                                    {{-- Dar --}}
                                    <form action="{{ route('admin.administradores.destroy', $usuario->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-success btn-sm">Dar Permiso</button>
                                    </form>
                                @else
                                    <!-- Si el año de emisión es menor a '08' (2008), el usuario no puede votar -->
                                    <span class="text-muted">No puede votar</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
