<!-- resources/views/candidatos/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Candidatos</title>
</head>
<body>
    <h1>Lista de Candidatos</h1>
    
    <ul>
        @foreach($candidatos as $candidato)
            <li>{{ $candidato->nombre }}</li>
            <!-- Mostrar otros datos del candidato según tu estructura de datos -->
        @endforeach
    </ul>
</body>
</html>
