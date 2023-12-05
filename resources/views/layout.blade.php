<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Otros elementos head -->
</head>
<body>
    <div class="top-bar">
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/login">Inicio de Sesión</a></li>
                <li><a href="/ayuda">Ayuda</a></li>
                <li><a href="/candidatos">Candidatos</a></li>
            </ul>
        </nav>
    </div>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
