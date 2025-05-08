@extends('layouts.app')

@section('content')
    <section class="py-16 bg-[#3b1f1f] text-white min-h-screen">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-yellow-400 mb-6">Қос алқа</h2>
            <img src="{{ asset('images/oyu3.jpg') }}" alt="Қос алқа" class="w-full max-h-[400px] object-contain mx-auto mb-6 bg-white p-2 rounded-lg">
            <p class="text-lg text-gray-300">
                Қос алқа — бірлік пен үйлесімділіктің белгісі. Бұл ою халықтың бірлігін, тату өмір сүруін бейнелейді. Негізінен сырмақтар мен кілемдерге, ұлттық киімдерге салынады.
            </p>
        </div>
        <div class="text-center mt-6">
            <a href="{{ url('/#patterns') }}" class="bg-yellow-400 text-black px-6 py-2 rounded hover:bg-yellow-300 transition">← Артқа</a>
        </div>
    </section>
@endsection
