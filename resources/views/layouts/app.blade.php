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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/marked@4.3.0/marked.min.js"></script>
    <style>
        body {
            background-color: #3b1f1f;
            position: relative;
        }
        .ornament-left {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-image: url('{{ asset('images/erasebg-transformed.png') }}');
            background-repeat: repeat-y;
            opacity: 0.3;
            z-index: 1;
            pointer-events: none;
        }
        .ornament-right {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-image: url('{{ asset('images/erasebg-transformed.png') }}');
            background-repeat: repeat-y;
            opacity: 0.3;
            z-index: 1;
            pointer-events: none;
            transform: scaleX(-1);
        }
        .content-container {
            position: relative;
        }
        .site-nav {
            position: sticky; 
            top: 0;
            z-index: 1000;
            background-color: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        footer {
            position: relative;
            z-index: 100;
        }
        .about-project, .project-about, .about, #about {
            position: relative;
            z-index: 100;
        }
        main .container h1, main .container h2, main .container h3, main .container section {
            position: relative;
            z-index: 100;
        }
    </style>
</head>
<body class="font-sans antialiased">
<div class="ornament-left"></div>
<div class="ornament-right"></div>
<div class="min-h-screen content-container">
    <!-- Navigation -->
    <nav class="site-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/qr-qoshqar.png') }}" alt="Logo" class="h-10 w-auto">
                        </a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="{{ route('categories.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('categories.*') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} text-sm font-medium">
                            Барлық санаттар
                        </a>
                        <a href="{{ url('/traditions') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->path() == 'traditions' ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} text-sm font-medium">
                            Салт-дәстүрлер
                        </a>
                        <a href="{{ url('/games') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->path() == 'games' ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} text-sm font-medium">
                            Ұлттық ойындар
                        </a>
                        <a href="{{ url('/foods') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->path() == 'foods' ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} text-sm font-medium">
                            Ұлттық тағамдар
                        </a>
                        <a href="{{ url('/patterns') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->path() == 'patterns' ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} text-sm font-medium">
                            Ою-өрнек
                        </a>
                        <a href="{{ url('/holidays') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->path() == 'holidays' ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} text-sm font-medium">
                            Ұлттық мерекелер
                        </a>
                        <a href="{{ url('/figures') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->path() == 'figures' ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} text-sm font-medium">
                            Тұлғалар мен тарих
                        </a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    @auth
                        <div class="ml-3 relative" x-data="{ open: false }">
                            <div>
                                <button @click="open = !open" type="button" class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </button>
                            </div>
                            <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Ваш профиль</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Выйти</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="space-x-4">
                            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-900">Кіру</a>
                            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-900">Тіркелу</a>
                        </div>
                    @endauth
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" class="bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="bg-[#3b1f1f]">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h3 class="text-xl font-bold">Қазақ дәстүрлері</h3>
                    <p class="text-gray-400 mt-2">© {{ date('Y') }} Барлық құқықтар қорғалған.</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <span class="sr-only">Facebook</span>
                        <img src="{{ asset('images/facebook.jpeg') }}" alt="Facebook" class="h-6 w-6">
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <span class="sr-only">Instagram</span>
                        <img src="{{ asset('images/instagram.jpeg') }}" alt="Instagram" class="h-6 w-6">
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <span class="sr-only">Twitter</span>
                        <img src="{{ asset('images/twitter.jpeg') }}" alt="Twitter" class="h-6 w-6">
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Чат-виджет -->
<x-chat-widget />

<!-- Скрипты -->
@stack('scripts')
</body>
</html>
