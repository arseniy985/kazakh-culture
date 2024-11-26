{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <h1>Все товары</h1>--}}
{{--    <a href="{{ route('products.create') }}" class="btn btn-success">Добавить товар</a>--}}

{{--    @foreach ($products as $product)--}}

{{--        <div>--}}
{{--            <h3>{{ $product->name }}</h3>--}}
{{--            <p>{{ $product->description }}</p>--}}
{{--            <p>Цена: {{ $product->price }} тг</p>--}}
{{--            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">--}}
{{--            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Редактировать</a>--}}
{{--            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">--}}

{{--                @csrf--}}
{{--                @method('DELETE')--}}
{{--                <button type="submit" class="btn btn-danger">Удалить</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    @endforeach--}}
{{--@endsection--}}

@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">Все товары</h1>
    <div class="text-end mb-3">
        <a href="{{ route('products.create') }}" class="btn btn-success">Добавить товар</a>
    </div>

    <div class="product-grid">
        @foreach ($products as $product)
            <div class="product-card">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
                <div class="product-info">
                    <h5 class="product-name">{{ $product->name }}</h5>
                    <p class="product-price">{{ $product->price }} тг</p>
                </div>
                <div class="product-actions">
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Редактировать</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                    </form>
                </div>
                <div class="text-center mt-4">
                    <a href="/" class="btn btn-secondary">Назад к меню</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

