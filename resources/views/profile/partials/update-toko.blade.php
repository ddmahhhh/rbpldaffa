<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 text-black-100">
            {{ __('Update Informasi Toko') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 text-black-600">
            {{ __('Ubah Informasi Toko') }}
        </p>
    </header>

    <form method="post" action="" class="mt-6 space-y-6">
        @csrf

        <!-- Nama Toko -->
        <div>
            <x-text-input id="nama_toko" class="block mt-1 w-full" placeholder="Nama Toko" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-text-input id="kontak_toko" class="block mt-1 w-full" placeholder="Kontak Toko" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-text-input id="pasar_toko" class="block mt-1 w-full" placeholder="Pasar yang Ditempati" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-text-input id="lokasi_toko" class="block mt-1 w-full" placeholder="Lokasi Toko" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-text-input id="deskripsi_toko" class="block mt-1 w-full" placeholder="Kontak Toko" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-text-input id="kategori_toko" class="block mt-1 w-full" placeholder="Kategori Toko" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-text-input id="operasional_toko" class="block mt-1 w-full" placeholder="Jam Operasional Toko" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
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
</section>
