{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <section class="w-full min-h-screen bg-[#3b1f1f] py-16 px-6 text-white">--}}
{{--        <div class="max-w-7xl mx-auto">--}}
{{--            <h2 class="text-4xl font-extrabold text-yellow-400 text-center">Ою-өрнектер</h2>--}}
{{--            <p class="text-center text-lg mt-4 text-gray-300">--}}
{{--                Қазақтың ою-өрнектері — халқымыздың дүниетанымын, эстетикалық талғамын және рухани мәдениетін бейнелейтін ұлттық өнер туындысы.--}}
{{--            </p>--}}

{{--            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">--}}
{{--                <!-- Қошқар мүйіз -->--}}
{{--                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300">--}}
{{--                    <a href="{{ url('/patterns/qoshqar-muyiz') }}">--}}
{{--                        <img src="{{ asset('images/oyu1.jpg') }}" alt="Қошқар мүйіз" class="w-full h-56 object-cover">--}}
{{--                        <div class="p-4 text-gray-800 text-center">--}}
{{--                            <h3 class="text-2xl font-bold mb-2">Қошқар мүйіз</h3>--}}
{{--                            <p class="text-sm">Молшылық пен берекенің белгісі.</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <div class="text-center pb-4">--}}
{{--                        <a href="{{ url('/patterns/qoshqar-muyiz') }}" target="_blank">--}}
{{--                            <img src="{{ asset('images/qr-qoshqar.png') }}" alt="QR - Қошқар мүйіз" class="w-16 mx-auto mt-2 hover:scale-110 transition">--}}
{{--                            <p class="text-xs text-gray-600 mt-1">QR арқылы ашу</p>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Түйе табан -->--}}
{{--                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300">--}}
{{--                    <a href="{{ url('/patterns/tuiye-taban') }}">--}}
{{--                        <img src="{{ asset('images/oyu2.jpg') }}" alt="Түйе табан" class="w-full h-56 object-cover">--}}
{{--                        <div class="p-4 text-gray-800 text-center">--}}
{{--                            <h3 class="text-2xl font-bold mb-2">Түйе табан</h3>--}}
{{--                            <p class="text-sm">Тұрақтылық пен күш-қайраттың белгісі.</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <div class="text-center pb-4">--}}
{{--                        <a href="{{ url('/patterns/tuiye-taban') }}" target="_blank">--}}
{{--                            <img src="{{ asset('images/qr-tuiyetaban.png') }}" alt="QR - Түйе табан" class="w-16 mx-auto mt-2 hover:scale-110 transition">--}}
{{--                            <p class="text-xs text-gray-600 mt-1">QR арқылы ашу</p>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Қос алқа -->--}}
{{--                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300">--}}
{{--                    <a href="{{ url('/patterns/qos-alqa') }}">--}}
{{--                        <img src="{{ asset('images/oyu3.jpg') }}" alt="Қос алқа" class="w-full h-56 object-cover">--}}
{{--                        <div class="p-4 text-gray-800 text-center">--}}
{{--                            <h3 class="text-2xl font-bold mb-2">Қос алқа</h3>--}}
{{--                            <p class="text-sm">Бірлік пен шексіздіктің символы.</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <div class="text-center pb-4">--}}
{{--                        <a href="{{ url('/patterns/qos-alqa') }}" target="_blank">--}}
{{--                            <img src="{{ asset('images/qr-qosalka.png') }}" alt="QR - Қос алқа" class="w-16 mx-auto mt-2 hover:scale-110 transition">--}}
{{--                            <p class="text-xs text-gray-600 mt-1">QR арқылы ашу</p>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Қосымша түсініктеме -->--}}
{{--            <div class="mt-16 max-w-3xl mx-auto text-center">--}}
{{--                <h3 class="text-3xl font-semibold text-yellow-400">Ою-өрнектердің маңызы</h3>--}}
{{--                <p class="text-lg text-gray-200 mt-4">--}}
{{--                    Қазақтың әрбір оюы – белгілі бір мағынаны білдіретін символ. Олар табиғат, жануарлар, рухани дүниетаным мен өмірлік құндылықтарды бейнелейді.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}
@extends('layouts.app')

@section('content')
    <style>
        div.overflow-hidden {
            z-index: 10;
        }
    </style>

    <section class="w-full min-h-screen bg-[#3b1f1f] py-16 px-6 text-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-extrabold text-yellow-400 text-center">Ою-өрнектер</h2>
            <p class="text-center text-lg mt-4 text-gray-300">
                Қазақтың ою-өрнектері — халқымыздың дүниетанымын, эстетикалық талғамын және рухани мәдениетін бейнелейтін ұлттық өнер туындысы.
            </p>

            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Қошқар мүйіз -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300">
                    <a href="{{ url('/patterns/qoshqar-muyiz') }}">
                        <img src="{{ asset('images/oyu1.jpg') }}" alt="Қошқар мүйіз" class="w-full h-48 object-contain bg-white">
                        <div class="p-4 text-gray-800 text-center">
                            <h3 class="text-2xl font-bold mb-2">Қошқар мүйіз</h3>
                            <p class="text-sm">Молшылық пен берекенің белгісі.</p>
                        </div>
                    </a>
                    <div class="text-center pb-4">
                        <a href="{{ url('/patterns/qoshqar-muyiz') }}" target="_blank">
                            <img src="{{ asset('images/qr-qoshqar.png') }}" alt="QR - Қошқар мүйіз" class="w-16 mx-auto mt-2 hover:scale-110 transition">
                            <p class="text-xs text-gray-600 mt-1">QR арқылы ашу</p>
                        </a>
                    </div>
                </div>

                <!-- Түйе табан -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300">
                    <a href="{{ url('/patterns/tuiye-taban') }}">
                        <img src="{{ asset('images/oyu2.jpg') }}" alt="Түйе табан" class="w-full h-48 object-contain bg-white">
                        <div class="p-4 text-gray-800 text-center">
                            <h3 class="text-2xl font-bold mb-2">Түйе табан</h3>
                            <p class="text-sm">Тұрақтылық пен күш-қайраттың белгісі.</p>
                        </div>
                    </a>
                    <div class="text-center pb-4">
                        <a href="{{ url('/patterns/tuiye-taban') }}" target="_blank">
                            <img src="{{ asset('images/qr-tuiye.png') }}" alt="QR - Түйе табан" class="w-16 mx-auto mt-2 hover:scale-110 transition">
                            <p class="text-xs text-gray-600 mt-1">QR арқылы ашу</p>
                        </a>
                    </div>
                </div>

                <!-- Қос алқа -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300">
                    <a href="{{ url('/patterns/qos-alqa') }}">
                        <img src="{{ asset('images/oyu3.jpg') }}" alt="Қос алқа" class="w-full h-48 object-contain bg-white">
                        <div class="p-4 text-gray-800 text-center">
                            <h3 class="text-2xl font-bold mb-2">Қос алқа</h3>
                            <p class="text-sm">Бірлік пен шексіздіктің символы.</p>
                        </div>
                    </a>
                    <div class="text-center pb-4">
                        <a href="{{ url('/patterns/qos-alqa') }}" target="_blank">
                            <img src="{{ asset('images/qr-qosalka.png') }}" alt="QR - Қос алқа" class="w-16 mx-auto mt-2 hover:scale-110 transition">
                            <p class="text-xs text-gray-600 mt-1">QR арқылы ашу</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Қосымша түсініктеме -->
            <div class="mt-16 max-w-3xl mx-auto text-center">
                <h3 class="text-3xl font-semibold text-yellow-400">Ою-өрнектердің маңызы</h3>
                <p class="text-lg text-gray-200 mt-4">
                    Қазақтың әрбір оюы – белгілі бір мағынаны білдіретін символ. Олар табиғат, жануарлар, рухани дүниетаным мен өмірлік құндылықтарды бейнелейді.
                </p>
            </div>
        </div>

        <!-- Кнопка Артқа -->
        <div class="mt-10 text-center">
            <a href="{{ url('/') }}" class="inline-block px-6 py-3 bg-yellow-400 text-black font-semibold rounded-lg transition duration-300 hover:bg-yellow-500">
                Артқа
            </a>
        </div>
    </section>
@endsection
