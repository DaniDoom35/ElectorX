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


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
