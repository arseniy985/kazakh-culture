<x-guest-layout>
    <h2 class="text-2xl font-bold text-center text-yellow-400 mb-6">Құпия сөзді растау</h2>
    
    <div class="mb-6 text-gray-300">
        Бұл қауіпсіз аймақ. Жалғастыру үшін құпия сөзіңізді растаңыз.
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-yellow-300">Құпия сөз</label>

            <input id="password" class="block mt-1 w-full rounded-md border-yellow-400/50 bg-white/10 text-white focus:border-yellow-400 focus:ring focus:ring-yellow-400/20 focus:ring-opacity-50 shadow-sm"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-6">
            <button type="submit" class="inline-flex items-center px-6 py-2 bg-yellow-400 border border-transparent rounded-md font-semibold text-black hover:bg-yellow-500 active:bg-yellow-600 focus:outline-none focus:border-yellow-600 focus:ring ring-yellow-300 disabled:opacity-25 transition">
                Растау
            </button>
        </div>
    </form>
</x-guest-layout>
