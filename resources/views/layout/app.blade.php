<!DOCTYPE html>
<html lang="es-419">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto - @yield('title')</title>
</head>
<body>
    <!-- Cabecera común -->
    @include('partials.header')

    <!-- Contenido dinámico -->
    <main>
        @yield('content')
    </main>

    <!-- Pie de página común -->
    @include('partials.footer')
</body>
</html>
