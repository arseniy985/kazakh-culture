@extends('layouts.app')

@section('content')
    <section class="py-16 bg-[#3b1f1f] text-white min-h-screen">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-yellow-400 mb-6">Құрбан айт</h2>
            <img src="{{ asset('images/qurban.jpg') }}" alt="Құрбан айт" class="w-full max-h-[500px] object-cover rounded-lg mb-6">
            <p class="text-lg text-gray-300">
                Құрбан айт — ислам дініндегі қасиетті мейрамдардың бірі. Бұл күндері мұсылмандар Алланың разылығы үшін мал шалып, мұқтаж жандарға көмектеседі. Құрбан айтта адамдар бір-біріне қонаққа барып, ізгі тілектерін айтып, жақсылық жасауға асығады. Мейрам рухани тазалық пен бауырмалдықты дәріптейді.
            </p>
        </div>
        <div class="text-center mt-6">
            <a href="{{ url('/#holidays') }}" class="inline-block bg-yellow-400 text-black font-semibold px-5 py-2 rounded hover:bg-yellow-300 transition">
                ← Артқа
            </a>
        </div>
    </section>
@endsection
