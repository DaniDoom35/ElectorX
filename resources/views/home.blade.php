@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Candidata 1 - Laura Pérez</div>
                <div class="card-body text-center"> <!-- Aplicando text-center para centrar el contenido -->
                    <img src="{{ asset('storage/1.jpg') }}" alt="Candidata 1 - Laura Pérez" class="img-fluid d-block mb-3">
                    <p>Manifiesto de Laura Pérez: Soy una defensora de la educación y la igualdad de oportunidades.</p>
                    <form action="" method="">
                        @csrf
                        <input type="hidden" name="candidato" value="1">
                        <button type="submit" class="btn btn-primary">Votar por Candidata 1</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Candidata 2 - María Rodríguez</div>
                <div class="card-body text-center"> <!-- Aplicando text-center para centrar el contenido -->
                    <img src="{{ asset('storage/2.jpg') }}" alt="Candidata 2 - María Rodríguez" class="img-fluid d-block mb-3">
                    <p>Manifiesto de María Rodríguez: Trabajaré por la inclusión social y el desarrollo sostenible.</p>
                    <form action="" method="">
                        @csrf
                        <input type="hidden" name="candidato" value="2">
                        <button type="submit" class="btn btn-primary">Votar por Candidata 2</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Candidata 3 - Ana Gómez</div>
                <div class="card-body text-center"> <!-- Aplicando text-center para centrar el contenido -->
                    <img src="{{ asset('storage/3.jpg') }}" alt="Candidata 3 - Ana Gómez" class="img-fluid d-block mb-3">
                    <p>Manifiesto de Ana Gómez: Promoveré políticas de salud pública y bienestar comunitario.</p>
                    <form action="" method="">
                        @csrf
                        <input type="hidden" name="candidato" value="3">
                        <button type="submit" class="btn btn-primary">Votar por Candidata 3</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-header">Voto Nulo</div>
                <div class="card-body text-center"> <!-- Aplicando text-center para centrar el contenido -->
                    <p>Selecciona esta opción si deseas anular tu voto.</p>
                    <form action="" method="">
                        @csrf
                        <input type="hidden" name="candidato" value="0"> <!-- Valor 0 para voto en blanco -->
                        <button type="submit" class="btn btn-danger">Anular Voto</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-header">Voto Personalizado</div>
                <div class="card-body text-center"> <!-- Aplicando text-center para centrar el contenido -->
                    <p>Ingresa el nombre de alguien para votar por él/ella.</p>
                    <form action="" method="">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Votar por Nombre</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="notification" class="alert alert-success" style="display: none;">
    Gracias por tu voto.
</div>
@endsection


