@extends('layouts.app')

@section('content')
    <section class="py-16 bg-[#3b1f1f] text-white min-h-screen">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-yellow-400 mb-6">Наурыз мейрамы</h2>
            <img src="{{ asset('images/nauryz.jpg') }}" alt="Наурыз мейрамы"
                 class="w-full max-h-[500px] object-cover rounded-lg mb-6">
            <p class="text-lg text-gray-300">
                Наурыз мейрамы — көктемнің келуін, жаңару мен ұрпақ сабақтастығын білдіретін ежелгі түркі мейрамы.
                Бұл мереке күн мен түннің теңелуіне сәйкес 22 наурызда тойланады.
                Адамдар бір-біріне игі тілек айтып, реніштерін кешіріп, дастархан жайып, ұлттық ойындар мен салт-дәстүрлерді жаңғыртады.
            </p>
        </div>
        <div class="text-center mt-6">
            <a href="{{ url('/#holidays') }}" class="inline-block bg-yellow-400 text-black font-semibold px-5 py-2 rounded hover:bg-yellow-300 transition">
                ← Артқа
            </a>
        </div>
    </section>
@endsection
