<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h2 class="text-2xl font-bold text-center text-yellow-400 mb-6">Жүйеге кіру</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-yellow-300">Электрондық пошта</label>
            <input id="email" class="block mt-1 w-full rounded-md border-yellow-400/50 bg-white/10 text-white focus:border-yellow-400 focus:ring focus:ring-yellow-400/20 focus:ring-opacity-50 shadow-sm" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block text-sm font-medium text-yellow-300">Құпия сөз</label>

            <input id="password" class="block mt-1 w-full rounded-md border-yellow-400/50 bg-white/10 text-white focus:border-yellow-400 focus:ring focus:ring-yellow-400/20 focus:ring-opacity-50 shadow-sm"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-yellow-400/50 bg-white/10 text-yellow-500 shadow-sm focus:ring-yellow-400 focus:ring-opacity-50" name="remember">
                <span class="ms-2 text-sm text-gray-300">Мені есте сақтау</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-6">
            @if (Route::has('password.request'))
                <a class="text-sm text-yellow-400 hover:text-yellow-300 underline" href="{{ route('password.request') }}">
                    Құпия сөзді ұмыттыңыз ба?
                </a>
            @endif

            <button type="submit" class="inline-flex items-center px-6 py-2 bg-yellow-400 border border-transparent rounded-md font-semibold text-black hover:bg-yellow-500 active:bg-yellow-600 focus:outline-none focus:border-yellow-600 focus:ring ring-yellow-300 disabled:opacity-25 transition">
                Кіру
            </button>
        </div>
        
        <div class="mt-6 text-center">
            <span class="text-gray-300">Тіркелу жасамадыңыз ба? </span>
            <a class="text-yellow-400 hover:text-yellow-300 font-medium" href="{{ route('register') }}">
                Тіркелу
            </a>
        </div>
    </form>
</x-guest-layout>
