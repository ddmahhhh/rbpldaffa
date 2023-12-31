<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 text-black-100">
            {{ __('Update Informasi Toko') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 text-black-600">
            {{ __('Ubah Informasi Toko') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <!-- Nama Toko -->
        <div>
            <x-input-label for="name" :value="__('Nama Toko')" />
            <x-text-input id="nama_toko" class="block mt-1 w-full" placeholder="Nama Toko" type="text" name="name" :value="old('nama_toko', $user->name)" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
        <x-input-label for="kontak_toko" :value="__('Kontak Toko')" />
            <x-text-input id="kontak_toko" class="block mt-1 w-full" placeholder="Kontak Toko" type="text" name="kontak_toko" :value="old('kontak_toko', $user->kontak_toko)" required autofocus autocomplete="name" />

        </div>

        <div>
        <x-input-label for="lokasi_toko" :value="__('Lokasi Toko')" />
            <x-text-input id="lokasi_toko" class="block mt-1 w-full" placeholder="Lokasi Toko" type="text" name="lokasi_toko" :value="old('lokasi_toko', $user->lokasi_toko)" required autofocus autocomplete="name" />

        </div>

        <div>
        <x-input-label for="deskripsi_toko" :value="__('Deskripsi Toko')" />
            <x-text-input id="deskripsi_toko" class="block mt-1 w-full" placeholder="Kontak Toko" type="text" name="deskripsi_toko" :value="old('deskripsi_toko', $user->deskripsi_toko)" required autofocus autocomplete="name" />

        </div>

        <div>
        <x-input-label for="kategori_toko" :value="__('Kategori Toko')" />
            <x-text-input id="kategori_toko" class="block mt-1 w-full" placeholder="Kategori Toko" type="text" name="kategori_toko" :value="old('kategori_toko', $user->kategori_toko)" required autofocus autocomplete="name" />

        </div>

        <div>
        <x-input-label for="jamoperasional_toko" :value="__('Jam Operasional Toko')" />
            <x-text-input id="jamoperasional_toko" class="block mt-1 w-full" placeholder="Jam Operasional Toko" type="text" name="jamoperasional_toko" :value="old('jamoperasional_toko', $user->jamoperasional_toko)" required autofocus autocomplete="name" />

        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Simpan') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
    <br>
    <a href="/etalase-toko"><x-primary-button>{{ __('Etalase Toko') }}</x-primary-button></a>
</section>
