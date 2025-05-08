@extends('layouts.app')

@section('content')
    <section class="py-16 bg-[#3b1f1f] text-white min-h-screen">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-yellow-400 mb-6">Тәуелсіздік күні</h2>
            <img src="{{ asset('images/tauelsizdik.jpg') }}" alt="Тәуелсіздік күні"
                 class="w-full max-h-[500px] object-cover rounded-lg mb-6">
            <p class="text-lg text-gray-300">
                Тәуелсіздік күні – Қазақстан Республикасының ең басты мемлекеттік мерекелерінің бірі.
                1991 жылдың 16 желтоқсанында Қазақстан өз тәуелсіздігін жариялап, дербес мемлекетке айналды.
                Бұл күн — халқымыздың азаттық жолындағы күресінің нәтижесі, егемен ел болудың жарқын символы.
                Әр жылы бұл мереке ел көлемінде кең көлемде аталып өтіледі, түрлі мәдени және патриоттық іс-шаралар ұйымдастырылады.
            </p>
        </div>
        <div class="text-center mt-6">
            <a href="{{ url('/#holidays') }}" class="inline-block bg-yellow-400 text-black font-semibold px-5 py-2 rounded hover:bg-yellow-300 transition">
                ← Артқа
            </a>
        </div>
    </section>
@endsection
