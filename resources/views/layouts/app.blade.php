<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <title>TecGram - @yield('titulo')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-gray-300">
    @auth
        @include('layouts.muro')
    @endauth

    @guest
        @include('layouts.menu')
    @endguest
    <main class="container mx-auto mt-10">
        <h1 class="font-black text-center text-2xl mb-10">@yield('titulo')</h1>
        @yield('contenido')
    </main>
    <footer class="mt-4 text-center text-gray-800 font-bold p-5">
        Tec-Gram - Todos los derechos reservados - {{ now()->year }}
    </footer>
</body>

</html>
