<!-- resources/views/registrarse.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('../resources/css/styles.css') }}">
</head>
<body class="body-registro">
    <nav class="navbar-registro">
        <a href="{{ route('volver') }}" class="navbar-brand">Volver</a>
    </nav>
    <div class="container">
        <h2>Registro de Usuario</h2>

        <!-- Mostrar mensaje flash -->
        @if(session('mensaje'))
            <div style="display: none;" id="success-message">{{ session('mensaje') }}</div>
        @endif

        <form class="registro-form" action="{{ route('registrarse.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nombre de usuario" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Registrarse</button>
        </form>
        <a href="{{ route('login') }}">¿Ya tienes una cuenta? Inicia sesión</a>
    </div>

    <!-- Incluir archivo JavaScript -->
    <script src="{{ asset('../resources/js/mensaje-exito.js') }}"></script>
</body>
</html>
