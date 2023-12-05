<!-- resources/views/inicio.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Página de inicio - Voto Electrónico</title>
    <style>
        /* Estilos opcionales para la barra de navegación */
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 15px;
        }

        .navbar a {
            color: #fff;
            margin-right: 15px;
            text-decoration: none;
        }

        .navbar a:hover {
            color: #ccc;
        }

        /* Estilos adicionales según tus necesidades */
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <div class="navbar">
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('ayuda') }}">Ayuda</a>
        <!-- Otros enlaces según sea necesario -->
    </div>

    <!-- Contenido de la página de inicio -->
    <div class="container">
        <h1>Bienvenido al Sistema de Voto Electrónico</h1>
        <p>Esta es la página de inicio del sistema de voto electrónico.</p>
        <!-- Puedes agregar más contenido según tus necesidades -->
    </div>
</body>
</html>
