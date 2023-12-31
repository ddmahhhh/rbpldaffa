<x-guest-layout>
<div class="logo_kunci"> <i class='bx bxs-lock lock-icon'></i> </div>

    <div class="judul_password">Kesulitan untuk Masuk?</div> 
    <div class="mb-4 text-sm text-black-600">
        {{ __('Masukkan email dan kami akan mengirim Anda tautan untuk kembali ke akun Anda') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-text-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="tombol">
                {{ __('Kirim') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
