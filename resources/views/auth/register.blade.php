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
            <x-text-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="name" />
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

         <!-- Kontak Toko -->
         <div class="mt-4">
            <x-text-input id="kontak_toko" class="block mt-1 w-full"
                            placeholder="Kontak Toko"
                            type="text"
                            name="kontak_toko" required autocomplete="name" />
        </div>

        <!-- Lokasi Toko -->
        <div class="mt-4">
            <x-text-input id="lokasi_toko" class="block mt-1 w-full"
                            placeholder="Lokasi Toko"
                            type="text"
                            name="lokasi_toko" required autocomplete="name" />
        </div>

        <!-- Telepon Toko -->
        <div class="mt-4">
            <x-text-input id="telp_toko" class="block mt-1 w-full"
                            placeholder="Telepon Toko"
                            type="text"
                            name="telp_toko" required autocomplete="name" />
        </div>

        <!-- Deskripsi Toko -->
        <div class="mt-4">
            <x-text-input id="deskripsi_toko" class="block mt-1 w-full"
                            placeholder="Deskripsi Toko"
                            type="text"
                            name="deskripsi_toko" required autocomplete="name" />
        </div> 

        <!-- Kategori Toko -->
        <div class="mt-4">
            <x-text-input id="kategori_toko" class="block mt-1 w-full"
                            placeholder="Kategori Toko"
                            type="text"
                            name="kategori_toko" required autocomplete="name" />
        </div>

        <!-- Jam Operasional Toko -->
        <div class="mt-4">
            <x-text-input id="jamoperasional_toko" class="block mt-1 w-full"
                            placeholder="Jam Operasional Toko"
                            type="text"
                            name="jamoperasional_toko" required autocomplete="name" />
        </div>

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
