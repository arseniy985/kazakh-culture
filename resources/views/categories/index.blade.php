@extends('layouts.app')

@section('content')
<section class="w-full min-h-screen bg-[#3b1f1f] py-16 px-6 text-white">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-4xl font-extrabold text-yellow-400 text-center">Барлық санаттар</h2>

        <p class="text-center text-lg mt-4 text-gray-300 max-w-4xl mx-auto leading-relaxed">
            Қазақ мәдениетінің әртүрлі аспектілерін қамтитын санаттардың толық тізімі.
        </p>

        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($categories as $category)
                <a href="{{ route('categories.show', $category->slug) }}" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    @if($category->image)
                        <div class="w-full aspect-[2/1] relative overflow-hidden">
                            <img src="{{ $category->image_url }}" alt="{{ $category->title }}" class="w-full h-full object-contain mx-auto">
                        </div>
                    @else
                        <div class="w-full aspect-[2/1] bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-400 text-2xl">Сурет жоқ</span>
                        </div>
                    @endif
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">{{ $category->title }}</h3>
                        <p>{{ Str::limit($category->description, 100) }}</p>
                    </div>
                </a>
            @endforeach
        </div>
        
        <!-- Кнопка Артқа -->
        <div class="mt-10 text-center">
            <a href="{{ url('/') }}" class="inline-block px-6 py-3 bg-yellow-400 text-black font-semibold rounded-lg transition duration-300 hover:bg-yellow-500">
                Артқа
            </a>
        </div>
    </div>
</section>
@endsection 