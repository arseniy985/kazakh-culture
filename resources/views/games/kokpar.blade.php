@extends('layouts.app')

@section('content')
    <section class="py-16 bg-[#3b1f1f] text-white text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-extrabold text-yellow-400 mb-8">Көкпар</h2>
            <img src="{{ asset('images/kokpar.jpg') }}" alt="Көкпар" class="mx-auto rounded-lg shadow-lg mb-8 w-full max-w-3xl h-auto">
            <p class="text-lg leading-relaxed">
                Көкпар — қазақ халқының ұлттық ат спорты ойыны. Бұл ойын ер жігіттердің ептілігі мен батырлығын, атқа шебер мінуін сынайтын жарыс.
                Көкпарда бас тартқан серкені тақымға басып, қарсылас командадан қорғап қалу – негізгі міндет.
            </p>
        </div>
        <a href="{{ url('/#games') }}" class="inline-block mt-6 bg-yellow-400 text-black font-semibold px-5 py-2 rounded hover:bg-yellow-300 transition">
            ← Артқа
        </a>
    </section>
@endsection
