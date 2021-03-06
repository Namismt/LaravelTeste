<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'Meu Site') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fontes -->
        <link href="https://fonts.googleapis.com/css2?family=Besley&display=swap" rel="stylesheet">

        <!-- Styles -->
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>

            <div id="app" class="w-100 h-100">
                @include('layouts.navegador')
                @yield('content')
            </div>

    </body>
</html>
