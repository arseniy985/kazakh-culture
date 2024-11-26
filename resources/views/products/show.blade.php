@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ $product->name }}</h1>
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid mb-4">
        <p><strong>Описание:</strong> {{ $product->description }}</p>
        <p><strong>Цена:</strong> {{ number_format($product->price, 2) }} тг</p>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Назад к товарам</a>
    </div>
@endsection
