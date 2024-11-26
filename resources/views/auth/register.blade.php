
{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="register-container">--}}
{{--        <div class="register-box">--}}
{{--            <h1>Регистрация</h1>--}}
{{--            <form action="{{ route('register') }}" method="POST">--}}
{{--                @csrf--}}
{{--                <div class="form-group">--}}
{{--                    <label for="name">Имя</label>--}}
{{--                    <input type="text" id="name" name="name" placeholder="Введите ваше имя" required>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="email">Email</label>--}}
{{--                    <input type="email" id="email" name="email" placeholder="Введите ваш email" required>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="password">Пароль</label>--}}
{{--                    <input type="password" id="password" name="password" placeholder="Введите ваш пароль" required>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="password_confirmation">Подтверждение пароля</label>--}}
{{--                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Подтвердите ваш пароль" required>--}}
{{--                </div>--}}
{{--                <button type="submit" class="register-button">Зарегистрироваться</button>--}}
{{--                <div class="login-link">--}}
{{--                    <p>Уже есть аккаунт? <a href="{{ route('login') }}">Войти</a></p>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}


@extends('layouts.app')

@section('content')
    <style>
        body {
            background: url('{{ asset('images/images.jpeg') }}') no-repeat center center;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        /*.register-container {*/
        /*    display: flex;*/
        /*    justify-content: center;*/
        /*    align-items: center;*/
        /*    height: 100vh;*/
        /*    width: 100vw;*/
        /*}*/

        .register-box {
            background: rgba(255, 255, 255, 0.8); /* Полупрозрачный белый фон */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3); /* Лёгкая тень */
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .register-box h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #000;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #000;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .register-button {
            width: 100%;
            padding: 10px;
            background: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .login-link {
            margin-top: 20px;
        }

        .login-link a {
            color: #007bff;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>

    <div class="register-container">
        <div class="register-box">
            <h1>Регистрация</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" id="name" name="name" placeholder="Введите ваше имя" required>
                </div>
                <div class="form-group">
                    <label for="email">Эл.Почта</label>
                    <input type="email" id="email" name="email" placeholder="Введите ваш email" required>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password" placeholder="Введите ваш пароль" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Подтверждение пароля</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Подтвердите ваш пароль" required>
                </div>
                <button type="submit" class="register-button">Зарегистрироваться</button>
                <div class="login-link">
                    <p>Уже есть аккаунт? <a href="{{ route('login') }}">Войти</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection

