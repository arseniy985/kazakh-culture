@extends('layouts.app')

@section('content')

<style>
    #about {
        z-index: 11 !important;
    }

</style>

{{--    <!-- Background Image Section -->--}}
{{--    <section class="relative w-full h-[80vh] bg-cover bg-center" style="background-image: url('/images/salt-dastur.jpg');">--}}
{{--        <div class="absolute inset-0 bg-black opacity-50"></div>--}}
{{--        <div class="relative z-10 flex justify-center items-center w-full h-full">--}}
{{--            <div class="text-center text-white px-4">--}}
{{--                <h1 class="text-4xl font-bold">Добро пожаловать в Казахстан</h1>--}}
{{--                <p class="mt-4 text-lg">Исследуйте богатое наследие и культуру казахского народа</p>--}}
{{--                <a href="#traditions" class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white rounded-lg text-lg">Вперёд</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
<!-- Background Image Section -->
<!-- Background Image Section -->
{{--<section class="relative w-full h-[100vh] bg-cover bg-center" style="background-image: url('/images/salt-dastur.jpg');">--}}
{{--    <div class="absolute inset-0 bg-black opacity-50"></div>--}}
{{--    <div class="relative z-10 flex justify-center items-center w-full h-full">--}}
{{--        <div class="text-center text-white px-4">--}}
{{--            <h1 class="text-5xl fonbg-[#3b1f1f]
{{--    </div>--}}
{{--</section>--}}

{{--<section class="relative w-full h-[80vh] bg-cover bg-center" style="background-image: url('/images/salt-dastur.jpg');">--}}
{{--    <div class="absolute inset-0 bg-black opacity-50"></div>--}}
{{--    <div class="relative z-10 flex justify-center items-center w-full h-full">--}}
{{--        <div class="text-center text-white px-4">--}}
{{--            <h1 class="text-4xl font-bold">Добро пожаловать в Казахстан</h1>--}}
{{--            <p class="mt-4 text-lg">Исследуйте богатое наследие и культуру казахского народа</p>
{{--            <a href="#traditions" class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white rounded-lg text-lg">Вперёд</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<section id="about" class="relative bg-[#3b1f1f] w-full h-[100vh] bg-cover bg-center" style="background-image: url('/images/salt-dastur.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative z-10 flex flex-col justify-center items-center h-full text-center px-4">
        <div class="bg-black bg-opacity-40 p-8 rounded-xl shadow-xl max-w-3xl">
            <h2 class="text-5xl font-extrabold mb-6 text-yellow-300 tracking-wide">Жоба туралы</h2>
            <p class="text-white text-lg leading-relaxed mb-4">
                Бұл платформа – қазақ халқының бай мәдени мұрасын цифрлық түрде сақтап, келесі ұрпаққа жеткізуді мақсат етеді.
            </p>
            <p class="text-white text-lg leading-relaxed mb-4">
                Мұнда салт-дәстүрлер, ұлттық ойындар, тағамдар, қолөнер, тарихи тұлғалар және чат-бот арқылы пайдалы ақпарат алуға болады.
            </p>
            <p class="text-white text-lg leading-relaxed">
                Жасанды интеллект көмегімен жасалған бұл жоба дәстүрлерді зерттеу мен үйренуді оңайлатуды көздейді.
            </p>
            <a href="{{ route('categories.index') }}" class="mt-6 inline-block px-6 py-3 bg-yellow-400 hover:bg-yellow-500 text-black font-semibold rounded-lg transition duration-300 shadow-md">
                Барлық санаттар
            </a>
        </div>
    </div>
</section>

<div class="fixed bottom-6 left-6 z-50">
    <button id="startButton" class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-6 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
        Бастау
    </button>

    <!-- Аудио-плеер -->
    <div id="audioPlayer" class="hidden mt-4 bg-black bg-opacity-70 rounded-lg p-3 text-white shadow-xl">
        <div class="flex items-center align-center justify-center">
            <div class="mr-2 flex items-center align-center justify-center">
                <button id="playPauseButton" class="text-white focus:outline-none">
                    <svg id="playIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <svg id="pauseIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>
            <div class="text-sm font-medium">Қазақ музыкасы</div>
        </div>

        <audio id="audioElement" src="{{ asset('audio/music.mp3') }}"></audio>
    </div>
</div>

    <!-- Main Content -->
    <main class="py-10">
        <div class="max-w-7xl mx-auto px-4">

            @php
                $traditionsCategory = \App\Models\Category::where('slug', 'traditions')->first();
                $traditions = $traditionsCategory ? $traditionsCategory->items()->limit(3)->get() : collect();
            @endphp

            <!-- Салт-дәстүрлер -->
            @if($traditionsCategory)
                <section id="traditions" class="w-full min-h-screen bg-[#3b1f1f] py-12 px-6">
                    <h2 class="text-4xl font-bold text-center text-blue-600">{{ $traditionsCategory->title }}</h2>
                    <p class="text-center text-lg mt-2 text-gray-100">
                        {{ $traditionsCategory->description }}
                    </p>

                    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($traditions as $item)
                            <a href="{{ route('items.show', [$traditionsCategory->slug, $item->slug]) }}" class="block bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                                @if($item->image)
                                    <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full h-56 object-cover">
                                @endif
                                <div class="p-6">
                                    <h3 class="text-2xl font-semibold text-gray-800">{{ $item->title }}</h3>
                                    <p class="text-gray-600 mt-2">{{ Str::limit(strip_tags($item->content), 100) }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    <div class="text-center mt-8">
                        <a href="{{ route('categories.show', $traditionsCategory->slug) }}" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-500 transition">
                            Толығырақ
                        </a>
            @endif

            @php
                $gamesCategory = \App\Models\Category::where('slug', 'games')->first();
                $games = $gamesCategory ? $gamesCategory->items()->limit(3)->get() : collect();
            @endphp

            <!-- Ұлттық ойындар -->
            @if($gamesCategory)
                <section id="games" class="w-full min-h-screen bg-[#3b1f1f] py-16 px-6 text-white">
                    <div class="max-w-7xl mx-auto">
                        <h2 class="text-4xl font-extrabold text-yellow-400 text-center">{{ $gamesCategory->title }}</h2>
                        <p class="text-center text-lg mt-4 text-gray-300">
                            {{ $gamesCategory->description }}
                        </p>

                        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                            @foreach($games as $item)
                                <a href="{{ route('items.show', [$gamesCategory->slug, $item->slug]) }}" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                                    @if($item->image)
                                        <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full h-56 object-cover">
                                    @endif
                                    <div class="p-6 text-gray-800">
                                        <h3 class="text-2xl font-bold mb-2">{{ $item->title }}</h3>
                                        <p>{{ Str::limit(strip_tags($item->content), 100) }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>

                        <div class="text-center mt-10">
                            <a href="{{ route('categories.show', $gamesCategory->slug) }}" class="inline-block px-6 py-3 bg-yellow-400 text-black font-semibold rounded-lg transition duration-300">
                                Барлық ойындарды көру
                            </a>
                        </div>
                    </div>
                </section>
            @endif

            @php
                $foodsCategory = \App\Models\Category::where('slug', 'foods')->first();
                $foods = $foodsCategory ? $foodsCategory->items()->limit(3)->get() : collect();
            @endphp

            <!-- Ұлттық тағамдар -->
            @if($foodsCategory)
                <section id="foods" class="py-16 bg-[#3b1f1f] text-white">
                    <div class="max-w-7xl mx-auto px-4">
                        <h2 class="text-4xl font-extrabold text-yellow-400 text-center">{{ $foodsCategory->title }}</h2>
                        <p class="text-center text-lg mt-4 text-gray-300">
                            {{ $foodsCategory->description }}
                        </p>

                        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                            @foreach($foods as $item)
                                <a href="{{ route('items.show', [$foodsCategory->slug, $item->slug]) }}" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                                    @if($item->image)
                                        <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full h-56 object-cover">
                                    @endif
                                    <div class="p-6 text-gray-800">
                                        <h3 class="text-2xl font-bold mb-2">{{ $item->title }}</h3>
                                        <p>{{ Str::limit(strip_tags($item->content), 100) }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>

                        <div class="text-center mt-8">
                            <a href="{{ route('categories.show', $foodsCategory->slug) }}" class="inline-block bg-yellow-400 text-gray-900 font-semibold px-6 py-2 rounded hover:bg-yellow-300 transition">Толығырақ</a>
                        </div>
                    </div>
                </section>
            @endif

            @php
                $patternsCategory = \App\Models\Category::where('slug', 'patterns')->first();
                $patterns = $patternsCategory ? $patternsCategory->items()->limit(3)->get() : collect();
            @endphp

            <!-- Ою-өрнек -->
            @if($patternsCategory)
                <section id="patterns" class="py-16 bg-[#3b1f1f] text-white">
                    <div class="max-w-7xl mx-auto px-4">
                        <h2 class="text-4xl font-extrabold text-yellow-400 text-center mb-4">{{ $patternsCategory->title }}</h2>
                        <p class="text-center text-lg text-gray-300 mb-10">
                            {{ $patternsCategory->description }}
                        </p>

                        @if($patterns->count() > 0)
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                                @foreach($patterns as $pattern)
                                    <a href="{{ route('items.show', ['categorySlug' => $patternsCategory->slug, 'itemSlug' => $pattern->slug]) }}" class="bg-[#2a1717] rounded-lg overflow-hidden hover:bg-[#3c2424] transition" style="z-index: 2;">
                                        <div class="h-[200px] min-h-[150px] max-h-[300px] w-full">
                                            <img src="{{ $pattern->image_url }}" alt="{{ $pattern->title }}" class="w-full h-full object-contain">
                                        </div>
                                        <div class="p-6">
                                            <h3 class="text-xl font-bold text-yellow-400 mb-2">{{ $pattern->title }}</h3>
                                            <p class="text-gray-400 line-clamp-3">
                                                {{ strip_tags(Str::limit($pattern->content, 150)) }}
                                            </p>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @endif

                        <div class="text-center mt-8">
                            <a href="{{ route('categories.show', $patternsCategory->slug) }}" class="inline-block bg-yellow-400 text-gray-900 font-semibold px-6 py-2 rounded hover:bg-yellow-300 transition">Ою-өрнектерді көру</a>
                        </div>
                    </div>
                </section>
            @endif

            <!-- Ұлттық мерекелер -->
            <section id="holidays" class="py-16 bg-[#3b1f1f] text-white">
                <div class="max-w-7xl mx-auto px-4">
                    <h2 class="text-4xl font-extrabold text-yellow-400 text-center mb-4">Ұлттық мерекелер</h2>
                    <p class="text-center text-lg text-gray-300 mb-10">
                        Қазақ халқының ұлттық мерекелері — тарих пен рухани құндылықтардың көрінісі.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

                        <!-- Наурыз -->
                        <a href="{{ route('items.show', ['holidays', 'nauryz']) }}"
                           class="bg-white rounded-lg overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300 block">
                            <img src="{{ asset('images/nauryz.jpg') }}" alt="Наурыз" class="w-full h-64 object-cover">
                            <div class="p-4 text-gray-800">
                                <h3 class="text-xl font-bold mb-2">Наурыз мейрамы</h3>
                                <p class="text-sm">Көктем мен жаңарудың белгісі.</p>
                            </div>
                        </a>

                        <!-- Құрбан айт -->
                        <a href="{{ route('items.show', ['holidays', 'qurban']) }}"
                           class="bg-white rounded-lg overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300 block">
                            <img src="{{ asset('images/qurban.jpg') }}" alt="Құрбан айт" class="w-full h-64 object-cover">
                            <div class="p-4 text-gray-800">
                                <h3 class="text-xl font-bold mb-2">Құрбан айт</h3>
                                <p class="text-sm">Құрбан шалу мен жан тазалығының күні.</p>
                            </div>
                        </a>

                        <!-- Тәуелсіздік күні -->
                        <a href="{{ route('items.show', ['holidays', 'tauelsizdik']) }}"
                           class="bg-white rounded-lg overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300 block">
                            <img src="{{ asset('images/tauelsizdik.jpg') }}" alt="Тәуелсіздік күні" class="w-full h-64 object-cover">
                            <div class="p-4 text-gray-800">
                                <h3 class="text-xl font-bold mb-2">Тәуелсіздік күні</h3>
                                <p class="text-sm">Азаттық пен ұлттық рухтың символы.</p>
                            </div>
                        </a>

                    </div>
                </div>
            </section>

            <!-- Тұлғалар мен тарих -->
            <section id="figures" class="py-16 bg-[#3b1f1f] text-white">
                <div class="max-w-7xl mx-auto px-4">
                    <h2 class="text-4xl font-extrabold text-yellow-400 text-center mb-4">Тұлғалар мен тарих</h2>
                    <p class="text-center text-lg text-gray-300 mb-10">
                        Қазақ халқының тарихына елеулі үлес қосқан ұлы тұлғалармен танысыңыз.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Абай Құнанбайұлы -->
                        <a href="{{ route('items.show', ['figures', 'abai']) }}" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('images/abai.jpg') }}"   alt="Абай Құнанбайұлы"  class="w-full h-80 object-cover rounded-t-lg">                            <div class="p-6 text-gray-800">
                                <h3 class="text-2xl font-bold mb-2">Абай Құнанбайұлы</h3>
                                <p>Қазақ әдебиетінің негізін қалаушы, ұлы ақын және ойшыл.</p>
                            </div>
                        </a>

                        <!-- Керей мен Жәнібек -->
                        <a href="{{ route('items.show', ['figures', 'kerey-zhanybek']) }}" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('images/kerey-zhanybek.jpg') }}" alt="Керей мен Жәнібек" class="w-full h-64 object-cover">
                            <div class="p-6 text-gray-800">
                                <h3 class="text-2xl font-bold mb-2">Керей мен Жәнібек хандар</h3>
                                <p>Қазақ хандығының негізін қалаушылар.</p>
                            </div>
                        </a>

                        <!-- Әлихан Бөкейханов -->
                        <a href="{{ route('items.show', ['figures', 'alikhan']) }}" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('images/alikhan.jpg') }}" alt="Әлихан Бөкейханов" class="w-full h-64 object-cover">
                            <div class="p-6 text-gray-800">
                                <h3 class="text-2xl font-bold mb-2">Әлихан Бөкейханов</h3>
                                <p>Алаш қозғалысының көшбасшысы, қоғам және мемлекет қайраткері.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
            const startButton = document.getElementById('startButton');
            const audioPlayer = document.getElementById('audioPlayer');
            const audioElement = document.getElementById('audioElement');
            const playPauseButton = document.getElementById('playPauseButton');
            const playIcon = document.getElementById('playIcon');
            const pauseIcon = document.getElementById('pauseIcon');

            startButton.addEventListener('click', function() {
                audioPlayer.classList.remove('hidden');
                audioElement.play();
                playIcon.classList.add('hidden');
                pauseIcon.classList.remove('hidden');
            });

            playPauseButton.addEventListener('click', function() {
                if (audioElement.paused) {
                    audioElement.play();
                    playIcon.classList.add('hidden');
                    pauseIcon.classList.remove('hidden');
                } else {
                    audioElement.pause();
                    pauseIcon.classList.add('hidden');
                    playIcon.classList.remove('hidden');
                }
            });
        });
    function openModal(title, description, image) {
        document.getElementById('modalTitle').innerText = title;
        document.getElementById('modalDescription').innerText = description;
        document.getElementById('modalImage').src = "/" + image;
        document.getElementById('patternModal').classList.remove('hidden');
        document.getElementById('patternModal').classList.add('flex');
    }

    function closeModal() {
        document.getElementById('patternModal').classList.remove('flex');
        document.getElementById('patternModal').classList.add('hidden');
    }

</script>

    <!-- Modal терезе -->
    <div id="patternModal" class="fixed inset-0 bg-black bg-opacity-60 hidden justify-center items-center z-50">
        <div class="bg-white rounded-lg max-w-2xl p-6 text-gray-800 relative">
            <button onclick="closeModal()" class="absolute top-2 right-2 text-2xl text-gray-500 hover:text-red-600">&times;</button>
            <h3 id="modalTitle" class="text-2xl font-bold mb-4"></h3>
            <img id="modalImage" src="" alt="" class="w-full h-64 object-contain mb-4">
            <p id="modalDescription" class="text-lg"></p>
        </div>
    </div>

@endsection
