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
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="font-sans text-gray-200 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#3b1f1f] bg-gradient-to-b from-[#3b1f1f] to-[#2a1515]">
            <div class="mb-4">
                <a href="/" class="flex flex-col items-center">
                    <span class="text-2xl font-bold text-yellow-400">Қазақ дәстүрлері</span>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-8 py-6 bg-white/10 backdrop-blur-sm shadow-xl overflow-hidden sm:rounded-xl border border-yellow-400/30">
                {{ $slot }}
            </div>
            
            <div class="mt-8 text-gray-400">
                <a href="{{ url('/') }}" class="text-yellow-400 hover:text-yellow-300 underline transition">← Бастапқы бетке оралу</a>
            </div>
        </div>
    </body>
</html>
