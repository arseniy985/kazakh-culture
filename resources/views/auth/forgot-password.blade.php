<x-guest-layout>
    <h2 class="text-2xl font-bold text-center text-yellow-400 mb-6">Құпия сөзді қалпына келтіру</h2>
    
    <div class="mb-6 text-gray-300">
        Құпия сөзді ұмыттыңыз ба? Электрондық поштаңызды енгізіңіз, біз сізге құпия сөзді қалпына келтіру сілтемесін жібереміз.
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-yellow-300">Электрондық пошта</label>
            <input id="email" class="block mt-1 w-full rounded-md border-yellow-400/50 bg-white/10 text-white focus:border-yellow-400 focus:ring focus:ring-yellow-400/20 focus:ring-opacity-50 shadow-sm" type="email" name="email" value="{{ old('email') }}" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-6">
            <a class="text-sm text-yellow-400 hover:text-yellow-300 underline" href="{{ route('login') }}">
                Кері оралу
            </a>
            
            <button type="submit" class="inline-flex items-center px-6 py-2 bg-yellow-400 border border-transparent rounded-md font-semibold text-black hover:bg-yellow-500 active:bg-yellow-600 focus:outline-none focus:border-yellow-600 focus:ring ring-yellow-300 disabled:opacity-25 transition">
                Сілтеме жіберу
            </button>
        </div>
    </form>
</x-guest-layout>
