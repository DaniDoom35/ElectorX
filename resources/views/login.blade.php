@extends('layout')

@section('title', 'Iniciar Sesión')

@section('content')
    <div class="login-container">
        <h2>Iniciar sesión</h2>
        <form>
            <!-- Campos de inicio de sesión: usuario y contraseña -->
            <input type="text" placeholder="CURP">
            <input type="password" placeholder="Contraseña">
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
@endsection
