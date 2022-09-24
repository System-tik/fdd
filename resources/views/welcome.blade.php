<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('ressouces/css/app.css')
        @vite('ressources/js/app.js')
        @livewireStyles

    </head>
    <body class="">

        @yield('app')
        

        @livewireScripts
    </body>
</html>
