@extends('layouts.app')

@section('content')
    <section class="py-16 bg-[#3b1f1f] text-white min-h-screen">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-yellow-400 mb-6">Керей мен Жәнібек</h2>
            <img src="{{ asset('images/kerey-zhanybek.jpg') }}" alt="Керей мен Жәнібек"
                 class="w-full max-h-[500px] object-cover rounded-lg mb-6">
            <p class="text-lg text-gray-300">
                Керей мен Жәнібек — XV ғасырда Қазақ хандығының негізін қалаған тарихи тұлғалар.
                Олар Әбілқайыр ханнан бөлініп, Жетісуға көшіп, Қазақ хандығын құрды.
                Бұл оқиға қазақ халқының тәуелсіз мемлекет болып қалыптасуына негіз болды.
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
