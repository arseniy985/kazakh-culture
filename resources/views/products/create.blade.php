@extends('layouts.app')

@section('content')
    <h1>Добавить товар</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Название:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="description">Описание:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div>
            <label for="price">Цена:</label>
            <input type="number" id="price" name="price" required>
        </div>
        <div>
            <label for="image">Изображение:</label>
            <input type="file" id="image" name="image">
        </div>
        <button type="submit">Добавить</button>
    </form>
@endsection
