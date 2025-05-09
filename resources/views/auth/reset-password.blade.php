<x-guest-layout>
    <h2 class="text-2xl font-bold text-center text-yellow-400 mb-6">Жаңа құпия сөз орнату</h2>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-yellow-300">Электрондық пошта</label>
            <input id="email" class="block mt-1 w-full rounded-md border-yellow-400/50 bg-white/10 text-white focus:border-yellow-400 focus:ring focus:ring-yellow-400/20 focus:ring-opacity-50 shadow-sm" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block text-sm font-medium text-yellow-300">Жаңа құпия сөз</label>
            <input id="password" class="block mt-1 w-full rounded-md border-yellow-400/50 bg-white/10 text-white focus:border-yellow-400 focus:ring focus:ring-yellow-400/20 focus:ring-opacity-50 shadow-sm" type="password" name="password" required autocomplete="new-password" />
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

        <div class="flex items-center justify-end mt-6">
            <button type="submit" class="inline-flex items-center px-6 py-2 bg-yellow-400 border border-transparent rounded-md font-semibold text-black hover:bg-yellow-500 active:bg-yellow-600 focus:outline-none focus:border-yellow-600 focus:ring ring-yellow-300 disabled:opacity-25 transition">
                Құпия сөзді жаңарту
            </button>
        </div>
    </form>
</x-guest-layout>
