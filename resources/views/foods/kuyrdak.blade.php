@extends('layouts.app')

@section('content')
    <section class="py-16 bg-[#3b1f1f] text-white min-h-screen">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-yellow-400 mb-6">Қуырдақ</h2>
            <img src="{{ asset('images/kuyrdak.jpg') }}" alt="Қуырдақ" class="w-full max-h-[500px] object-cover rounded-lg mb-6">
            <p class="text-lg text-gray-300">
                Қуырдақ — дәстүрлі ет тағамдарының бірі. Көбіне сойылған малдың жаңа етінен, жүрек, бауыр, өкпе сияқты ішкі
                ағзаларынан дайындалады. Пияз, бұрыш секілді дәмдеуіштер қосылып, табада қуырылып дайындалады. Етті жақсы көретін
                қазақ халқы үшін бұл – өте дәмді әрі тез дайындалатын тағам.
            </p>

            <a href="{{ url('/#foods') }}" class="inline-block mt-8 bg-yellow-400 text-black font-semibold px-6 py-2 rounded hover:bg-yellow-300 transition">
                ← Артқа
            </a>
        </div>
    </section>
@endsection

