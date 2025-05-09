@extends('layouts.app')

@section('content')
    <section class="w-full min-h-screen bg-[#3b1f1f] py-16 px-6 text-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-extrabold text-yellow-400 text-center">Ұлттық мерекелер</h2>
            <p class="text-center text-lg mt-4 text-gray-300">
                Қазақ халқының ұлттық мерекелері — ел бірлігі мен мәдени құндылықтарын айқындайтын тарихи әрі рухани мәнге ие күндер.
            </p>

            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Наурыз -->
                <a href="{{ url('/holidays/nauryz') }}" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/nauryz.jpg') }}" alt="Наурыз мейрамы" class="w-full h-auto object-contain">
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">Наурыз мейрамы</h3>
                        <p>Көктем мен жаңарудың, ұрпақ сабақтастығы мен берекенің символы болып табылатын ежелгі түркі мейрамы.</p>
                    </div>
                </a>

                <!-- Құрбан айт -->
                <a href="{{ url('/holidays/qurban') }}" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/qurban.jpg') }}" alt="Құрбан айт" class="w-full h-auto object-contain">
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">Құрбан айт</h3>
                        <p>Ислам дініндегі маңызды мейрам, рухани тазалық пен бауырмалдықты насихаттайтын күн.</p>
                    </div>
                </a>

                <!-- Тәуелсіздік күні -->
                <a href="{{ url('/holidays/tauelsizdik') }}" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/tauelsizdik.jpg') }}" alt="Тәуелсіздік күні" class="w-full h-auto object-contain">
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">Тәуелсіздік күні</h3>
                        <p>Қазақстан Республикасының егемендігі жарияланған тарихи күн – ұлттық мақтаныштың белгісі.</p>
                    </div>
                </a>
            </div>

            <!-- Қосымша түсініктеме -->
            <div class="mt-16 max-w-3xl mx-auto text-center">
                <h3 class="text-3xl font-semibold text-yellow-400">Мерекелердің тәрбиелік мәні</h3>
                <p class="text-lg text-gray-200 mt-4 leading-relaxed">
                    Мерекелер арқылы тарих, таным мен бірлік сақталады.
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
