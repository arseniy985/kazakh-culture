@extends('layouts.app')

@section('content')
    <section class="py-16 bg-[#3b1f1f] text-white min-h-screen">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-yellow-400 mb-6">Абай Құнанбайұлы</h2>
            <img src="{{ asset('images/abai.jpg') }}" alt="Абай Құнанбайұлы" class="mx-auto rounded-lg mb-6 max-w-[500px] h-auto">
            <p class="text-lg text-gray-300 mb-4">
                Абай Құнанбайұлы – қазақтың ұлы ақыны, композиторы және ағартушысы. Ол ХІХ ғасырдың екінші жартысында өмір сүріп, қазақ әдебиетін жаңа деңгейге көтерді.
            </p>
            <p class="text-lg text-gray-300 mb-4">
                Оның шығармаларында халықты білімге, еңбекке, адамгершілікке үндейтін терең философиялық ойлар бар. Абай орыс әдебиетімен танысып, Пушкин, Лермонтов сынды ақындарды қазақ тіліне аударған.
            </p>
            <p class="text-lg text-gray-300">
                Абайдың шығармашылығы – қазақ руханияты мен мәдениетінің алтын қазынасы. Оның "Қара сөздері" — ұрпақ тәрбиесінде маңызды рөл атқарады.
            </p>

            <a href="{{ url('/#figures') }}" class="inline-block mt-8 bg-yellow-400 text-black font-semibold px-6 py-2 rounded hover:bg-yellow-300 transition">
                ← Артқа
            </a>
        </div>
    </section>
@endsection
