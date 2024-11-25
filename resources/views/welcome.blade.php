<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="container mx-auto px-4 h-screen font-sans bg-gray-100 text-orange-500">
    <main class="mt-6">
        <h1>Bem vindo: {{ $name }}</h1>
        <h2>Seu nome está {{ $name == 'Gilberto' ? 'correto' : 'Incorreto'}}</h2>

        <p class="mt-4 border-t-2 border-red-800 text-lime-600 ">Condicional if e else</p>
            @if ($name == 'Gilberto')
                <h2>Seu nome está correto</h2>
            @else
                <h2>Seu nome está incorreto</h2>
            @endif
    </main>
</body>

</html>
