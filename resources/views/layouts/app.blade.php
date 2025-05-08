<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<header class="bg-blue-600 text-white shadow">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-2xl font-bold">Kazakh Culture</a>
        <nav class="flex gap-6">
            <a href="{{ url('/traditions') }}" class="text-lg hover:underline">Салт-дәстүрлер</a>
            <a href="{{ url('/games') }}" class="text-lg hover:underline">Ұлттық ойындар</a>
            <a href="{{ url('/foods') }}" class="text-lg hover:underline">Ұлттық тағамдар</a>
            <a href="{{ url('/patterns') }}" class="text-lg hover:underline">Ою-өрнек</a>
            <a href="{{ url('/holidays') }}" class="text-lg hover:underline">Ұлттық мерекелер</a>
            <a href="{{ url('/figures') }}" class="text-lg hover:underline">Тұлғалар мен тарих</a>
            <a href="{{ url('/chatbot') }}" class="text-lg hover:underline">Чат-бот</a>
        </nav>
    </div>
</header>

<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @isset($header)
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endisset

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>
</div>
</body>
</html>
