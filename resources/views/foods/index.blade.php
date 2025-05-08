@extends('layouts.app')

@section('content')
    <section class="py-16 bg-[#3b1f1f] text-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-extrabold text-yellow-400 text-center">Ұлттық тағамдар</h2>
            <p class="text-center text-lg mt-4 text-gray-300">
                Қазақтың ұлттық тағамдары – ұлт мәдениетінің ажырамас бөлігі.
            </p>

            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Бесбармақ -->
                <a href="/foods/besbarmak" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/besbarmak.jpg') }}" alt="Бесбармақ" class="w-full h-56 object-cover">
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">Бесбармақ</h3>
                        <p>Қазақтың ең кең тараған әрі сүйікті тағамы.</p>
                    </div>
                </a>

                <!-- Қуырдақ -->
                <a href="/foods/kuyrdak" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/kuyrdak.jpg') }}" alt="Қуырдақ" class="w-full h-56 object-cover">
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">Қуырдақ</h3>
                        <p>Дәмі тіл үйіретін ұлттық қуырылған тағам.</p>
                    </div>
                </a>

                <!-- Қымыз -->
                <a href="/foods/qymyz" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/qymyz.jpg') }}" alt="Қымыз" class="w-full h-56 object-cover">
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">Қымыз</h3>
                        <p>Қазақ халқының дәстүрлі әрі шипалы сусыны.</p>
                    </div>
                </a>
            </div>
        </div>
        <a href="{{ url('/#foods') }}" class="inline-block mt-6 bg-yellow-400 text-black font-semibold px-5 py-2 rounded hover:bg-yellow-300 transition">
            ← Артқа
        </a>
    </section>
@endsection
