@extends('layouts.app')

@section('content')
    <section class="w-full min-h-screen bg-[#3b1f1f] py-16 px-6 text-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-extrabold text-yellow-400 text-center">Салт-дәстүрлер</h2>

            <p class="text-center text-lg mt-4 text-gray-300 max-w-4xl mx-auto leading-relaxed">
                Қазақ халқының салт-дәстүрлері — ғасырлар бойы қалыптасқан өмір сүру салтының, тұрмыс-тіршілігінің және рухани байлығының айнасы.
                Олар ұрпақтар сабақтастығын қамтамасыз етіп, ұлттық болмысты сақтауға үлкен үлес қосады.
            </p>

            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Тұсаукесер -->
                <a href="{{ url('/traditions/tusaukeser') }}" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/tusaukeser.jpg') }}" alt="Тұсаукесер" class="w-full h-[300px] object-cover">
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">Тұсаукесер</h3>
                        <p>Бала алғаш қадам басқан кезде жасалатын рәсім. Жақсы тілекпен, игі ниетпен тұсауы кесіледі.</p>
                    </div>
                </a>

                <!-- Бесікке салу -->
                <a href="{{ url('/traditions/besikke-salu') }}" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/besikke.jpg') }}" alt="Бесікке салу" class="w-full h-[300px] object-cover">
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">Бесікке салу</h3>
                        <p>Жаңа туған нәрестені бесікке бөлеп, оны жұрт алдында таныстыру дәстүрі. Халық тәрбиесінің бастауы.</p>
                    </div>
                </a>

                <!-- Қыз ұзату -->
                <a href="{{ url('/traditions/qyz-uzatu') }}" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/qyz-uzatu.jpg') }}" alt="Қыз ұзату" class="w-full h-[300px] object-cover">
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">Қыз ұзату</h3>
                        <p>Қыз баланы ұзатып, жаңа өмірге шығарып салу салты. Қоштасу, тілек айту, әдеп пен ұятты сақтаудың белгісі.</p>
                    </div>
                </a>
            </div>

            <!-- Қосымша түсініктеме -->
            <div class="mt-16 max-w-4xl mx-auto text-center">
                <h3 class="text-3xl font-semibold text-yellow-400">Дәстүрлердің тәрбиелік маңызы</h3>
                <p class="text-lg text-gray-200 mt-4 leading-relaxed">
                    Қазақтың дәстүрлері ұлттың рухани коды. Олар арқылы ұрпақ тәрбиесі, адамгершілік, отбасылық және қоғамдық құндылықтар беріледі.
                    Бұл дәстүрлер — ұлттың тарихи жадын сақтап, мәдени мұраны болашаққа жеткізудің тетігі.
                </p>
            </div>
        </div>
    </section>
@endsection
