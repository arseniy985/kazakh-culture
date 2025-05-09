@extends('layouts.app')

@section('content')
    <section class="py-16 bg-[#3b1f1f] text-white min-h-screen">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-yellow-400 mb-6">Әлихан Бөкейханов</h2>
            <div class="w-full max-w-full overflow-hidden rounded-lg mb-6">
                <img src="{{ asset('images/alikhan.jpg') }}" alt="Әлихан Бөкейханов"
                     class="w-full max-h-[500px] object-contain mx-auto">
            </div>
            <p class="text-lg text-gray-300">
                Әлихан Бөкейханов — қазақтың алғашқы саяси қайраткерлерінің бірі, Алаш партиясының көшбасшысы.
                Ол Алаш Орда үкіметін басқарып, қазақ қоғамын жаңғырту, тәуелсіздікке жеткізу үшін аянбай еңбек етті.
                Оның еңбегі — білім беру, ғылым, экономика, мәдениет салаларын дамытуда ерекше орын алады.
            </p>
        </div>
        <div class="text-center mt-8">
            <a href="{{ url('/#figures') }}"
               class="inline-block bg-yellow-400 text-black font-semibold px-5 py-2 rounded hover:bg-yellow-300 transition">
                ← Артқа
            </a>
        </div>
    </section>
@endsection
