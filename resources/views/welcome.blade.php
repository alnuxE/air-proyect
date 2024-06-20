<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @livewireStyles
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @vite('resources/css/app.css')
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
       @livewire('Esp32')
       @livewireScripts
    </body>
</html>
