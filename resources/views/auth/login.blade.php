


@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <style>
        body {
            background: url('{{ asset('images/images.jpeg') }}') no-repeat center center;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.2); /* Полупрозрачный фон */
            padding: 30px;
            border-radius: 10px;
            max-width: 400px;
            width: 100%;
            text-align: center;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3); /* Лёгкая тень */
            backdrop-filter: blur(10px); /* Эффект размытия фона */
        }
        .login-card h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #211c1c; /* Белый текст */
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #111111; /* Белый текст */
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .btn-login {
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
        .btn-register {
            color: #007bff;
            text-decoration: none;
        }
        .btn-register:hover {
            text-decoration: underline;
        }
        .back-button {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .back-button:hover {
            background: #0056b3;
        }
    </style>
    <div class="login-card">
        <h1>Hello! <br> Welcome Back</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Login</label>
                <input type="email" id="email" name="email" placeholder="Введите логин" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Пароль" required>
            </div>
            <div class="form-group">
                <a href="#" class="btn-register" style="float: right;">Forgot Password?</a>
            </div>
            <button type="submit" class="btn-login">Sign In</button>
            <p style="margin-top: 20px;">
                Don’t Have An Account? <a href="{{ route('register') }}" class="btn-register">Create Account!</a>
            </p>
        </form>

    </div>
@endsection
