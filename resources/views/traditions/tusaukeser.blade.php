@extends('layouts.app')

@section('content')
    <section class="min-h-screen bg-[#3c1e1e] text-white py-12 px-6">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-3xl sm:text-4xl font-bold text-yellow-400 mb-8">Тұсаукесер</h1>

            <img src="{{ asset('images/tusaukeser.jpg') }}" alt="Тұсаукесер" class="w-full max-h-[500px] object-cover rounded-lg shadow-md mb-8">

            <p class="text-lg leading-relaxed mb-6">
                Тұсаукесер — баланың алғашқы қадамына арналған дәстүр. Бұл сәтте бала жүре бастаған кезде, оның тұсауын кесу арқылы жақсы ниет, тілек білдіріледі.
            </p>

            <p class="text-lg leading-relaxed mb-6">
                Тұсауды кесетін адам – ел ішінде сыйлы, адал, өмір жолы жақсы біреу болады. Бұл – баланың өмір жолы сол кісі сияқты жақсы болсын деген тілекпен жасалатын ырымы.
            </p>

            <a href="{{ url('/#traditions') }}" class="inline-block mt-6 bg-yellow-400 text-black font-semibold px-5 py-2 rounded hover:bg-yellow-300 transition">
                ← Артқа
            </a>
        </div>
    </section>
@endsection
