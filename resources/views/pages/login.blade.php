<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="{{ asset('../resources/css/styles.css') }}">
</head>
<body class="body-login">
    <nav class="navbar navbar-login">
        <a href="{{ route('volver') }}" class="navbar-brand">Volver</a>
    </nav>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form class="login-form" action="tu_ruta_de_inicio_de_sesion" method="POST">
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
        <a href="{{ route('registro') }}">¿No tienes una cuenta? Regístrate aquí</a>
    </div>
</body>
</html>
