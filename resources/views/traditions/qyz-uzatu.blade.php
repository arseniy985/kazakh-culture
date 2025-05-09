@extends('layouts.app')

@section('content')
    <section class="min-h-screen bg-[#3c1e1e] text-white py-12 px-6">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-3xl sm:text-4xl font-bold text-yellow-400 mb-8">Қыз ұзату</h1>

            <div class="w-full max-w-full overflow-hidden rounded-lg shadow-md mb-8">
                <img src="{{ asset('images/qyz-uzatu.jpg') }}" alt="Қыз ұзату" class="w-full max-h-[500px] object-contain mx-auto">
            </div>

            <p class="text-lg leading-relaxed mb-6">
                Қыз ұзату — қазақ халқындағы маңызды дәстүрдің бірі. Бұл рәсім қыз баланы өз отбасынан шығарып, басқа әулетке аманаттап тапсыруды білдіреді.
            </p>

            <p class="text-lg leading-relaxed mb-6">
                Ұзатылатын қызға ақ жол тілеп, арнайы той өткізіледі. Бұл тойда қалыңдықпен қоштасу, ананың ақ батасы, «сыңсу» жыры секілді элементтер маңызды рөл атқарады.
            </p>

            <a href="{{ url('/#traditions') }}" class="inline-block mt-6 bg-yellow-400 text-black font-semibold px-5 py-2 rounded hover:bg-yellow-300 transition">
                ← Артқа
            </a>
        </div>
    </section>
@endsection
