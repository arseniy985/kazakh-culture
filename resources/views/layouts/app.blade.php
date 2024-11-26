
{{--    <!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>@yield('title', 'Мой сайт')</title>--}}
{{--    <link rel="stylesheet" href="{{ asset('css/style.css') }}">--}}
{{--    <style>--}}
{{--        /* Общий стиль для всей страницы */--}}
{{--        body {--}}
{{--            font-family: Arial, sans-serif;--}}
{{--            margin: 0;--}}
{{--            padding: 0;--}}
{{--            background-color: #f9f9f9;--}}
{{--            color: #333;--}}
{{--        }--}}

{{--        header {--}}
{{--            background-color: #007bff;--}}
{{--            padding: 15px 0;--}}
{{--            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);--}}
{{--        }--}}

{{--        header nav {--}}
{{--            display: flex;--}}
{{--            justify-content: center;--}}
{{--            gap: 20px;--}}
{{--        }--}}

{{--        header nav a {--}}
{{--            color: #fff;--}}
{{--            text-decoration: none;--}}
{{--            font-size: 18px;--}}
{{--            font-weight: bold;--}}
{{--            transition: color 0.3s;--}}
{{--        }--}}

{{--        header nav a:hover {--}}
{{--            color: #ffd700;--}}
{{--        }--}}

{{--        main {--}}
{{--            max-width: 1200px;--}}
{{--            margin: 20px auto;--}}
{{--            padding: 20px;--}}
{{--            background-color: #fff;--}}
{{--            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);--}}
{{--            border-radius: 10px;--}}
{{--        }--}}

{{--        footer {--}}
{{--            background-color: #333;--}}
{{--            color: #fff;--}}
{{--            text-align: center;--}}
{{--            padding: 10px 0;--}}
{{--            margin-top: 20px;--}}
{{--        }--}}

{{--        footer p {--}}
{{--            margin: 0;--}}
{{--            font-size: 14px;--}}
{{--        }--}}

{{--        /* Адаптивность */--}}
{{--        @media (max-width: 768px) {--}}
{{--            header nav {--}}
{{--                flex-direction: column;--}}
{{--            }--}}

{{--            header nav a {--}}
{{--                font-size: 16px;--}}
{{--                margin: 5px 0;--}}
{{--            }--}}

{{--            main {--}}
{{--                padding: 15px;--}}
{{--            }--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<header>--}}
{{--    <nav>--}}
{{--        <a href="{{ route('main') }}">Главная</a>--}}
{{--        <a href="{{ route('about') }}">Обо мне</a>--}}
{{--        <a href="{{ route('support') }}">Поддержка</a>--}}
{{--        <a href="{{ route('products') }}">Товары</a>--}}
{{--        <a href="{{ route('profile') }}">Профиль</a>--}}
{{--    </nav>--}}
{{--</header>--}}

{{--<main>--}}
{{--    @yield('content')--}}
{{--</main>--}}

{{--<footer>--}}
{{--    <a href="{{ route('main') }}" class="back-to-menu">Назад к меню</a>--}}
{{--    <p>&copy; 2024 Nurzhol. Все права защищены.</p>--}}
{{--</footer>--}}
{{--</body>--}}
{{--</html>--}}

{{--    <!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>@yield('title', 'Мой сайт')</title>--}}
{{--    <link rel="stylesheet" href="{{ asset('css/style.css') }}">--}}
{{--    <style>--}}
{{--        body {--}}
{{--            font-family: Arial, sans-serif;--}}
{{--            margin: 0;--}}
{{--            padding: 0;--}}
{{--            background-color: #f9f9f9;--}}
{{--            color: #333;--}}
{{--        }--}}

{{--        header {--}}
{{--            background-color: #007bff;--}}
{{--            padding: 15px 0;--}}
{{--            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);--}}
{{--        }--}}

{{--        header nav {--}}
{{--            display: flex;--}}
{{--            justify-content: center;--}}
{{--            gap: 20px;--}}
{{--        }--}}

{{--        header nav a {--}}
{{--            color: #fff;--}}
{{--            text-decoration: none;--}}
{{--            font-size: 18px;--}}
{{--            font-weight: bold;--}}
{{--            transition: color 0.3s;--}}
{{--        }--}}

{{--        header nav a:hover {--}}
{{--            color: #ffd700;--}}
{{--        }--}}

{{--        main {--}}
{{--            max-width: 1200px;--}}
{{--            margin: 20px auto;--}}
{{--            padding: 20px;--}}
{{--            background-color: #fff;--}}
{{--            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);--}}
{{--            border-radius: 10px;--}}
{{--        }--}}

{{--        footer {--}}
{{--            background-color: #333;--}}
{{--            color: #fff;--}}
{{--            text-align: center;--}}
{{--            padding: 20px 0;--}}
{{--            margin-top: 20px;--}}
{{--        }--}}

{{--        footer p {--}}
{{--            margin: 0;--}}
{{--            font-size: 14px;--}}
{{--        }--}}

{{--        .back-to-menu {--}}
{{--            margin-top: 10px;--}}
{{--            display: inline-block;--}}
{{--            padding: 10px 20px;--}}
{{--            background-color: #007bff;--}}
{{--            color: #fff;--}}
{{--            text-decoration: none;--}}
{{--            font-weight: bold;--}}
{{--            border-radius: 5px;--}}
{{--            transition: background-color 0.3s;--}}
{{--        }--}}

{{--        .back-to-menu:hover {--}}
{{--            background-color: #0056b3;--}}
{{--        }--}}

{{--        /* Адаптивность */--}}
{{--        @media (max-width: 768px) {--}}
{{--            header nav {--}}
{{--                flex-direction: column;--}}
{{--            }--}}

{{--            header nav a {--}}
{{--                font-size: 16px;--}}
{{--                margin: 5px 0;--}}
{{--            }--}}

{{--            main {--}}
{{--                padding: 15px;--}}
{{--            }--}}

{{--            .back-to-menu {--}}
{{--                font-size: 14px;--}}
{{--                padding: 8px 16px;--}}
{{--            }--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<header>--}}
{{--    <nav>--}}
{{--        <a href="{{ route('main') }}">Главная</a>--}}
{{--        <a href="{{ route('about') }}">Обо мне</a>--}}
{{--        <a href="{{ route('support') }}">Поддержка</a>--}}
{{--        <a href="{{ route('products') }}">Товары</a>--}}
{{--        <a href="{{ route('profite') }}">Продукты</a>--}}
{{--    </nav>--}}
{{--</header>--}}

{{--<main>--}}
{{--    @yield('content')--}}
{{--</main>--}}

{{--<footer>--}}
{{--    <p>&copy; 2024 Nurzhol. Все права защищены.</p>--}}
{{--    <a href="{{ route('main') }}" class="back-to-menu">Назад к меню</a>--}}
{{--</footer>--}}
{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Мой сайт')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">



    <style>
        /* Общий стиль для всей страницы */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #007bff;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header nav {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        header nav a, header nav form button {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            background: none;
            border: none;
            cursor: pointer;
            transition: color 0.3s;
        }

        header nav a:hover, header nav form button:hover {
            color: #ffd700;
        }

        main {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }

        /* Адаптивность */
        @media (max-width: 768px) {
            header nav {
                flex-direction: column;
            }

            header nav a {
                font-size: 16px;
                margin: 5px 0;
            }

            main {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
<header>
    <nav>
        <a href="{{ route('main') }}">Главная</a>
        <a href="{{ route('about') }}">Обо мне</a>
        <a href="{{ route('support') }}">Поддержка</a>
        <a href="{{ route('products') }}">Товары</a>
        <a href="{{ route('profile') }}">Профиль</a>

        @auth
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit">Выйти</button>
            </form>
        @endauth
        @guest
            <a href="{{ route('login') }}">Войти</a>
            <a href="{{ route('register') }}">Регистрация</a>
        @endguest
    </nav>
</header>

<main>
    @yield('content')

</main>
<div class="back-to-menu-wrapper">
    <a href="{{ route('main') }}" class="back-to-menu">Назад к меню</a>
</div>
<footer>
    <p>&copy; 2024 Nurzhol. Все права защищены.</p>
</footer>

</body>
</html>
