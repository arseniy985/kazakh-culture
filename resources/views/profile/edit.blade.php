{{--@extends('layouts.app')--}}

{{--@section('title', 'Редактирование профиля')--}}

{{--@section('content')--}}
{{--    <div class="card mx-auto" style="max-width: 600px;">--}}
{{--        <div class="card-header">--}}
{{--            <h3>Редактировать профиль</h3>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <form action="{{ route('profile.update') }}" method="POST">--}}
{{--                @csrf--}}
{{--                @method('PUT')--}}
{{--                <div class="mb-3">--}}
{{--                    <label for="name" class="form-label">Имя</label>--}}
{{--                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>--}}
{{--                </div>--}}
{{--                <div class="mb-3">--}}
{{--                    <label for="email" class="form-label">Email</label>--}}
{{--                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-success">Сохранить изменения</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

@extends('layouts.app')

@section('title', 'Редактирование профиля')

@section('content')
    <style>
        .profile-edit-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .profile-edit-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            text-align: center;
        }

        .profile-edit-header {
            margin-bottom: 20px;
        }

        .profile-edit-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
            border: 2px solid #007bff;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
            margin-top: 5px;
        }

        .btn-success {
            background: #28a745;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-success:hover {
            background: #218838;
        }

    </style>
    <div class="profile-edit-container mx-auto" style="max-width: 600px; margin-top: 50px;">
        <div class="profile-edit-card">
            <div class="profile-edit-header text-center">
                <img src="{{ asset('images/avatar.png') }}" alt="Аватар" class="profile-edit-avatar">
                <h3>Редактирование профиля</h3>
            </div>
            <div class="profile-edit-body">
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" id="name" name="name" class="form-control"
                               value="{{ old('name', $user->name) }}" placeholder="Введите ваше имя" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control"
                               value="{{ old('email', $user->email) }}" placeholder="Введите ваш email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="avatar" class="form-label">Аватар</label>
                        <input type="file" id="avatar" name="avatar" class="form-control">
                        <p class="form-text">Загрузите новый аватар (по желанию).</p>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Сохранить изменения</button>
                </form>
            </div>
        </div>
    </div>
@endsection
