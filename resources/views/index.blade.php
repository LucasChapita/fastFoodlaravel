<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start And Break</title>
    <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" href="{{ asset('../resources/css/styles.css') }}">
</head>

<body>
    <header>
        <nav>
            <ul class="nav-left">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#menu">Menú</a></li>
            </ul>
            <ul class="nav-right">
                <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                <li><a href="{{ route('registro') }}">Registrarse</a></li>
            </ul>
        </nav>
    </header>

    <section id="inicio" class="hero">
        <div class="hero-content">
            <h2>Start and Break</h2>
            <p>Tomate un tiempo para descansar y disfruta un break.</p>
        </div>
    </section>

    <section id="menu" class="menu-item">
        <h2>Menú</h2>

        @include('sections.comidas')
        
        @include('sections.bebidas')
        
        @include('sections.combos')
        
    </section>

    <footer>
        <p>&copy; 2024 Start and Break. Todos los derechos reservados.</p>
    </footer>

    <!-- Script JavaScript para actualizar precios -->
    <!-- Archivo JavaScript para actualizar precios -->
    <script src="{{ asset('../resources/js/menu.js') }}"></script>
</body>

</html>
