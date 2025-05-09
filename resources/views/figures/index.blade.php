@extends('layouts.app')

@section('content')
    <section class="w-full min-h-screen bg-[#3b1f1f] py-16 px-6 text-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-extrabold text-yellow-400 text-center">Тұлғалар мен тарих</h2>

            <p class="text-center text-lg mt-4 text-gray-300 max-w-4xl mx-auto">
                Қазақ халқының тарихи тұлғалары — елдің мәдени, рухани және саяси дамуына ерекше үлес қосқан, ұлттың болашағын ойлаған,
                оның тәуелсіздігі мен біртұтастығы үшін күрескен дара азаматтар. Олардың өмірі мен еңбектері — бүгінгі ұрпаққа үлгі,
                ұлттық сананы оятатын, жас буынды отансүйгіштікке тәрбиелейтін рухани қазына.
            </p>

            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Абай Құнанбайұлы -->
                <a href="{{ url('/figures/abai') }}" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/abai.jpg') }}" alt="Абай Құнанбайұлы" class="w-full h-[300px] object-cover">
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">Абай Құнанбайұлы</h3>
                        <p>Ұлы ақын, философ және ағартушы. Қазақ жазба әдебиетінің негізін қалаушы, халықты білім мен ғылымға үндеген ойшыл тұлға.</p>
                    </div>
                </a>

                <!-- Керей мен Жәнібек -->
                <a href="{{ url('/figures/kerey-zhanybek') }}" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/kerey-zhanybek.jpg') }}" alt="Керей мен Жәнібек" class="w-full h-[300px] object-cover">
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">Керей мен Жәнібек</h3>
                        <p>Қазақ хандығының негізін қалаған алғашқы хандар. Тарихта алғаш рет дербес қазақ мемлекетін құрып, ұлт болмысының іргесін қалаған қайраткерлер.</p>
                    </div>
                </a>

                <!-- Әлихан Бөкейхан -->
                <a href="{{ url('/figures/alikhan') }}" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/alikhan.jpg') }}" alt="Әлихан Бөкейхан" class="w-full h-[300px] object-cover">
                    <div class="p-6 text-gray-800">
                        <h3 class="text-2xl font-bold mb-2">Әлихан Бөкейхан</h3>
                        <p>Алаш көсемі, ұлт-азаттық қозғалысының жетекшісі, саясаткер, ғалым және қоғам қайраткері. Ол қазақ мемлекеттілігін жаңғырту жолында еңбек етті.</p>
                    </div>
                </a>
            </div>

            <!-- Қосымша түсініктеме -->
            <div class="mt-16 max-w-4xl mx-auto text-center">
                <h3 class="text-3xl font-semibold text-yellow-400">Ұлттық сана мен рухтың негізі</h3>
                <p class="text-lg text-gray-200 mt-4">
                    Бұл тұлғалар — елдің сан ғасырлық тарихы мен еркіндік жолындағы күресін бейнелейтін рухани тіректер.
                    Олардың ерлігі, даналығы, ғылым мен саясаттағы үлесі арқылы ұлттық сана қалыптасты. Бүгінгі Тәуелсіз Қазақстанның
                    іргетасы осы тұлғалардың қажырлы еңбегі мен күресі нәтижесінде қаланды. Жас ұрпақ осындай тарихи мұрагерлік арқылы
                    болашаққа сеніммен қарай алады.
                </p>
            </div>

            <p class="text-lg text-gray-300 mt-4 max-w-4xl mx-auto leading-relaxed">
                Ұлы тұлғалар елінің рухын көтеріп, мәдениетін байытты. Олардың еңбегі ұрпақтан-ұрпаққа жалғасуда.
            </p>

            <!-- Кнопка Артқа -->
            <div class="mt-10 text-center">
                <a href="{{ url('/') }}" class="inline-block px-6 py-3 bg-yellow-400 text-black font-semibold rounded-lg transition duration-300 hover:bg-yellow-500">
                    Артқа
                </a>
            </div>
        </div>
    </section>
@endsection
