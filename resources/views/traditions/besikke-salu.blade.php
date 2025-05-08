{{--@extends('layouts.app')--}}

{{--@section('content')--}}

{{--    <section class="min-h-screen bg-[#3b1f1f] text-white py-12 px-6">--}}
{{--        <div class="max-w-4xl mx-auto">--}}
{{--            <h1 class="text-4xl font-bold text-center mb-8">Бесікке салу</h1>--}}

{{--            <img src="{{ asset('images/besikke.jpg') }}" alt="Бесікке салу" class="w-full rounded-lg shadow-lg mb-8">--}}

{{--            <p class="text-lg leading-relaxed mb-6">--}}
{{--                Бесікке салу — қазақ халқының тәрбиелік мағынасы терең, ғасырлар бойы жалғасып келе жатқан дәстүрі.--}}
{{--                Бұл рәсімде жаңа туған нәрестені бесікке бөлеп, үлкендер батасын береді.--}}
{{--                Рәсім барысында арнайы салттар орындалып, шашу шашылады, бесікке арнайы жабдықтар салынады.--}}
{{--            </p>--}}

{{--            <p class="text-lg leading-relaxed mb-6">--}}
{{--                Бесікке салу арқылы отбасы мен ұрпақтар сабақтастығы көрініс табады.--}}
{{--                Бұл дәстүр баланың өмір жолының бастауы ретінде үлкен маңызға ие.--}}
{{--            </p>--}}

{{--            <a href="{{ url('/#traditions') }}" class="inline-block mt-6 bg-yellow-400 text-black px-6 py-2 rounded hover:bg-yellow-300 transition">--}}
{{--                ← Артқа қайту--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}
@extends('layouts.app')

@section('content')
    <section class="min-h-screen bg-[#3b1f1f] text-white py-12 px-6">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold text-center mb-8 text-yellow-400">Бесікке салу</h1>

            <img src="{{ asset('images/besikke.jpg') }}" alt="Бесікке салу" class="w-full max-h-[500px] object-cover rounded-lg shadow-lg mb-8">

            <p class="text-lg leading-relaxed mb-6">
                Бесікке салу — қазақ халқының тәрбиелік мәні терең дәстүрі. Бұл рәсім бала туылғаннан кейін белгілі бір уақыттан соң жасалады.
                Жақындары мен үлкендер жиналып, арнайы бесікке бөлейді.
            </p>

            <p class="text-lg leading-relaxed mb-6">
                Дәстүр барысында арнайы ән айтылып, анаға тілек білдіріледі, шашу шашылады. Бұл баланың өміріндегі алғашқы рәсімдердің бірі болып саналады.
            </p>

            <a href="{{ url('/#traditions') }}" class="inline-block mt-6 bg-yellow-400 text-black px-6 py-2 rounded hover:bg-yellow-300 transition">
                ← Артқа
            </a>
        </div>
    </section>
@endsection
