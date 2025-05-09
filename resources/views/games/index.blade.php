@extends('layouts.app')

@section('content')
    <section class="w-full min-h-screen bg-[#3b1f1f] py-16 px-6 text-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-extrabold text-yellow-400 text-center">Ұлттық ойындар</h2>
            <p class="text-center text-lg mt-4 text-gray-300">
                Қазақтың ұлттық ойындары – халықтың мәдениетінің, ойлау жүйесінің, батырлық пен зерделіліктің көрінісі.
            </p>

            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Көкпар -->
                <a href="/games/kokpar" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/kokpar.jpg') }}" alt="Көкпар" class="w-full h-56 object-cover">
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">Көкпар</h3>
                        <p>Көкпар — ат үстіндегі шапшаңдықты, батырлықты және командалық рухты талап ететін ұлттық ат ойыны.</p>
                    </div>
                </a>

                <!-- Асық ату -->
                <a href="/games/asyk" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/asyk.jpg') }}" alt="Асық ату" class="w-full h-56 object-cover">
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">Асық ату</h3>
                        <p>Асық — қазақ балаларының дәлдікке, шапшаңдыққа және төзімділікке үйрететін ертеден келе жатқан ойыны.</p>
                    </div>
                </a>

                <!-- Тоғызқұмалақ -->
                <a href="/games/togyzkumalak" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/togyzkumalak.jpg') }}" alt="Тоғызқұмалақ" class="w-full h-56 object-cover">
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">Тоғызқұмалақ</h3>
                        <p>Тоғызқұмалақ — логикалық және стратегиялық ойлауды дамытатын ұлттық зияткерлік ойын.</p>
                    </div>
                </a>
            </div>

            <!-- Қосымша түсініктеме -->
            <div class="mt-16 max-w-3xl mx-auto text-center">
                <h3 class="text-3xl font-semibold text-yellow-400">Ұлттық ойындардың маңызы</h3>
                <p class="text-lg text-gray-200 mt-4 leading-relaxed">
                    Ұлттық ойындар халық даналығының, мәдениетінің және тәрбие саласының маңызды бөлігі. Оларды үйрену мен сақтау келешек ұрпаққа үлкен мұра қалдыру болып табылады.
                </p>
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
