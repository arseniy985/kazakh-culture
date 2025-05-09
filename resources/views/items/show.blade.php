@extends('layouts.app')

@section('content')
<section class="py-16 bg-[#3b1f1f] text-white min-h-screen">
    <div class="max-w-6xl mx-auto px-4">
        <nav class="flex justify-between items-center mb-6">
            <a href="{{ route('categories.show', $item->category->slug) }}" class="text-yellow-400 hover:text-yellow-300 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Артқа
            </a>
            <span class="text-gray-400">{{ $item->category->title }}</span>
        </nav>

        <h1 class="text-4xl font-bold text-yellow-400 mb-4">{{ $item->title }}</h1>

        <div class="w-full max-w-full mb-8">
            <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full max-h-[600px] object-contain rounded-lg shadow-md mx-auto">
        </div>

        <div class="prose prose-lg prose-invert max-w-none">
            {!! $item->content !!}
        </div>

        @if($relatedItems->count() > 0)
            <div class="mt-16">
                <h3 class="text-2xl font-bold text-yellow-400 mb-6">Басқа {{ $item->category->title }}</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($relatedItems as $related)
                        <a href="{{ route('items.show', ['categorySlug' => $related->category->slug, 'itemSlug' => $related->slug]) }}" class="bg-[#2a1717] rounded-lg overflow-hidden hover:bg-[#3c2424] transition">
                            <div class="h-[120px] min-h-[100px] max-h-[200px] w-full">
                                <img src="{{ $related->image_url }}" alt="{{ $related->title }}" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4">
                                <h4 class="text-xl font-semibold text-yellow-400">{{ $related->title }}</h4>
                                <p class="text-gray-400 mt-2 line-clamp-2">
                                    {{ strip_tags(Str::limit($related->content, 100)) }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>
@endsection 