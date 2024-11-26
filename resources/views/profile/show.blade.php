{{--@extends('layouts.app')--}}

{{--@section('title', 'Профиль')--}}

{{--@section('content')--}}
{{--    <div class="card mx-auto" style="max-width: 600px;">--}}
{{--        <div class="card-header">--}}
{{--            <h3>Ваш профиль</h3>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <p><strong>Имя:</strong> {{ $user->name }}</p>--}}
{{--            <p><strong>Email:</strong> {{ $user->email }}</p>--}}
{{--            <a href="{{ route('profile.edit') }}" class="btn btn-warning">Редактировать профиль</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

@extends('layouts.app')

@section('title', 'Профиль')

@section('content')
    <style>
        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .profile-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 100%;
            margin-bottom: 20px;
        }

        .profile-header {
            margin-bottom: 15px;
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
            border: 2px solid #007bff;
        }

        .profile-email {
            color: #555;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .profile-body p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .profile-stats {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            text-align: center;
        }

        .stats-cards {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }

        .stats-card {
            background: #007bff;
            color: white;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            width: 100px;
        }

        .stats-card h5 {
            margin-bottom: 5px;
            font-size: 16px;
        }

        .stats-card p {
            font-size: 20px;
            font-weight: bold;
        }

    </style>
    <div class="profile-container mx-auto" style="max-width: 600px; margin-top: 50px;">
        <div class="profile-card">
            <div class="profile-header">

                <h3>Добро пожаловать, {{ $user->name }}!</h3>
                <p class="profile-email">{{ $user->email }}</p>
            </div>
            <div class="profile-body">
                <p><strong>Дата регистрации:</strong> {{ $user->created_at->format('d.m.Y') }}</p>
                <p><strong>Последний вход:</strong> {{ $user->last_login ?? 'Неизвестно' }}</p>
                <a href="{{ route('profile.edit') }}" class="btn btn-warning">Редактировать профиль</a>
            </div>
        </div>

        <div class="profile-stats">
            <h4>Ваша активность</h4>
            <div class="stats-cards">
                <div class="stats-card">
                    <h5>Посты</h5>
                    <p>12</p>
                </div>
                <div class="stats-card">
                    <h5>Комментарии</h5>
                    <p>45</p>
                </div>
                <div class="stats-card">
                    <h5>Посещения</h5>
                    <p>23</p>
                </div>
            </div>
        </div>
    </div>
@endsection
