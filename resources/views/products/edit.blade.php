@extends('layouts.app')

@section('content')
    <h1>Редактировать товар</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Название:</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}" required>
        </div>
        <div>
            <label for="description">Описание:</label>
            <textarea id="description" name="description" required>{{ $product->description }}</textarea>
        </div>
        <div>
            <label for="price">Цена:</label>
            <input type="number" id="price" name="price" value="{{ $product->price }}" required>
        </div>
        <div>
            <label for="image">Изображение:</label>
            <input type="file" id="image" name="image">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
        </div>
        <button type="submit">Обновить</button>
    </form>
@endsection
