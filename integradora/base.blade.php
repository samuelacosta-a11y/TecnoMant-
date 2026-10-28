<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pasteleria La Espiga</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

<header>
    <h1>Pasteleria La Espiga</h1>
    <p>Registro y control de tortas</p>
    <button type="button" id="btn-tema">🌙 Modo oscuro</button>
</header>

<nav>
    <button type="button" id="btn-menu">☰ Menú</button>

    <ul>
        <li><a href="/inicio">Inicio</a></li>
        <li><a href="#">Equipos</a></li>
        <li><a href="#">Mantenimientos</a></li>
        <li><a href="#">Historial</a></li>
        <li><a href="#">Reportes</a></li>
        <li><a href="/contacto">Contacto</a></li>
    </ul>
</nav>

<main>

    @yield('contenido')

</main>

<footer>
    <p>Integradora - SAMUEL ACOSTA PERALTA - 27 de octubre de 2026</p>
</footer>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>