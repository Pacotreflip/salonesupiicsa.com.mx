<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Salones Upiicsa</title>
        @include('globals.css')
        @yield('css')
    </head>
    <body>
        <header>
            @include('partials.nav')
            @yield('header')
        </header>
        <div class="container" style="width: 90%;">
            @include('flash::message')
            @yield('content')
        </div>    
        @include('globals.scripts')
        @yield('scripts')
    </body>
</html>