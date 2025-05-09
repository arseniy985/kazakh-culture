@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-[#3c1e1e] text-white py-12 px-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl sm:text-4xl font-bold text-yellow-400 mb-8">{{ $item->title }}</h1>

        @if($item->image)
            <div class="w-full max-w-full overflow-hidden mb-8 rounded-lg shadow-md">
                <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full max-h-[500px] object-contain mx-auto">
            </div>
        @endif

        <div class="prose prose-lg prose-invert max-w-none">
            {!! $item->content !!}
        </div>

        @if($relatedItems->count() > 0)
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-yellow-400 mb-6">Тағы қараңыз</h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    @foreach($relatedItems as $relatedItem)
                        <a href="{{ route('items.show', [$category->slug, $relatedItem->slug]) }}" class="bg-white bg-opacity-10 rounded-lg p-4 hover:bg-opacity-20 transition">
                            @if($relatedItem->image)
                                <div class="w-full aspect-[2/1] relative overflow-hidden mb-3 rounded-lg">
                                    <img src="{{ $relatedItem->image_url }}" alt="{{ $relatedItem->title }}" class="w-full h-full object-contain mx-auto">
                                </div>
                            @endif
                            <h3 class="text-xl font-semibold text-yellow-300">{{ $relatedItem->title }}</h3>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="mt-12 flex space-x-4">
            <a href="{{ route('categories.show', $category->slug) }}" class="inline-block px-6 py-3 bg-yellow-400 text-black font-semibold rounded-lg transition duration-300 hover:bg-yellow-500">
                ← {{ $category->title }} санатына оралу
            </a>
            <a href="{{ url('/') }}" class="inline-block px-6 py-3 bg-yellow-400 text-black font-semibold rounded-lg transition duration-300 hover:bg-yellow-500">
                Артқа
            </a>
        </div>
    </div>
</section>
@endsection 