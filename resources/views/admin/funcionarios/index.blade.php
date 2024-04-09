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
                        @foreach ($Usuarios as $votante)
                        <tr>
                            <td>{{ $votante->clave_elector }}</td>
                            <td>{{ $votante->name }}</td>
                            <td>{{ $votante->curp }}</td>
                            <td>
                                @if ($votante->vigencia < 2008)
                                    <span style="color: red;">No puede votar</span>
                                @else
                                     {{ $votante->vigencia }}
                                @endif
                            </td>
                            <td>
                                @if ($votante->vigencia > 2015)
                                    <a href="" class="btn btn-success">Votar</a>
                                @else
                                    <button type="button" class="btn btn-danger" disabled>No puede votar</button>
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
