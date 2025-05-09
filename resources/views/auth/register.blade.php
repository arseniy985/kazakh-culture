<x-guest-layout>
    <h2 class="text-2xl font-bold text-center text-yellow-400 mb-6">Тіркелу</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-yellow-300">Аты-жөні</label>
            <input id="name" class="block mt-1 w-full rounded-md border-yellow-400/50 bg-white/10 text-white focus:border-yellow-400 focus:ring focus:ring-yellow-400/20 focus:ring-opacity-50 shadow-sm" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email" class="block text-sm font-medium text-yellow-300">Электрондық пошта</label>
            <input id="email" class="block mt-1 w-full rounded-md border-yellow-400/50 bg-white/10 text-white focus:border-yellow-400 focus:ring focus:ring-yellow-400/20 focus:ring-opacity-50 shadow-sm" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block text-sm font-medium text-yellow-300">Құпия сөз</label>

            <input id="password" class="block mt-1 w-full rounded-md border-yellow-400/50 bg-white/10 text-white focus:border-yellow-400 focus:ring focus:ring-yellow-400/20 focus:ring-opacity-50 shadow-sm"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" class="block text-sm font-medium text-yellow-300">Құпия сөзді растау</label>

            <input id="password_confirmation" class="block mt-1 w-full rounded-md border-yellow-400/50 bg-white/10 text-white focus:border-yellow-400 focus:ring focus:ring-yellow-400/20 focus:ring-opacity-50 shadow-sm"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-6">
            <a class="text-sm text-yellow-400 hover:text-yellow-300 underline" href="{{ route('login') }}">
                Жүйеге тіркелгенсіз бе?
            </a>

            <button type="submit" class="inline-flex items-center px-6 py-2 bg-yellow-400 border border-transparent rounded-md font-semibold text-black hover:bg-yellow-500 active:bg-yellow-600 focus:outline-none focus:border-yellow-600 focus:ring ring-yellow-300 disabled:opacity-25 transition">
                Тіркелу
            </button>
        </div>
    </form>
</x-guest-layout>
