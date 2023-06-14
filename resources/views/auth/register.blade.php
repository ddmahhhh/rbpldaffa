<x-guest-layout>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="logo"> E-PASAR </div>

        <div class="judul">Daftar Akun</div>

        <!-- Name -->
        <div>
            <x-text-input id="name" class="block mt-1 w-full" placeholder="Nama" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-text-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input id="password" class="block mt-1 w-full"
                            placeholder="Password"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            placeholder="Konfirmasi Password"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <br>
        <br>       
        Kontak Toko
        <input id="kontak_toko" type="text" name="kontak_toko">
        <br>
        <br>
        Lokasi Toko
        <input id="lokasi_toko" type="text" name="lokasi_toko">
        <br>
        <br>
        Telp Toko
        <input id="telp_toko" type="text" name="telp_toko">
        <br>
        <br>
        Deskripsi Toko
        <input id="deskripsi_toko" type="text" name="deskripsi_toko">
        <br>
        <br>
        Lokasi Toko
        <input id="kategori_toko" type="text" name="kategori_toko">
        <br>
        <br>
        Jam Operasional Toko
        <input id="jamoperasional_toko" type="text" name="jamoperasional_toko">
        <br>

        <div class="flex items-center justify-center mt-4">
            <!--<a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>-->

            <x-primary-button class="tombol">
                {{ __('Daftar') }}
            </x-primary-button>
        </div>

        <div class="flex items-center justify-center mt-4">
            <span>Sudah Punya Akun?</span>
                <a class="text-sm text-black-900 hover:text-red-900 hover:underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="font-size: 16px; font-weight: 700;" href="{{ route('login') }}">
                    {{ __('Masuk Akun') }}
                </a>
        </div> 
    </form>
</x-guest-layout>
