<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Título - @yield('titulo')</title>
</head>
<body>
    @section('header')
        CABECERA DE LA WEB (master)
    @show

    <div class="container">
        @yield('content')
    </div>

    @section('footer')
        PIDE DE PÁGINA (master)
    @show
</body>
</html>