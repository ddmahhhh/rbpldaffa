<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="logo"> E-PASAR </div>

        <div class="judul">Masuk Akun</div>

        <!-- Email Address -->
        <div>
            <x-text-input id="email" class="block mt-1 w-full" 
                            placeholder="Email"
                            type="email" 
                            name="email" :value="old('email')" 
                            required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input id="password" class="block mt-1 w-full"
                            placeholder="Password"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Lupa Password -->
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-black-600 hover:text-red-900 hover:underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="font-size: 16px; font-weight: 700;" href="{{ route('password.request') }}">
                    {{ __('Lupa Password?') }}
                </a>
            @endif 
        </div> 

        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="tombol">
                {{ __('Masuk') }}
            </x-primary-button>
        </div>

        <div class="flex items-center justify-center mt-4">
            <span>Belum Punya Akun?</span>
                <a class="text-sm text-black-900 hover:text-red-900 hover:underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="font-size: 16px; font-weight: 700;" href="{{ route('register') }}">
                    {{ __('Daftar Akun') }}
                </a>
        </div> 


    </form>
</x-guest-layout>
