<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-gray-200 leading-tight">
            {{ __('Semua Produk') }}
        </h2>
    </x-slot>
<!--
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black-900 text-black-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
-->
    <br>
    <div class="col-md-15">
                <div class="row">
                @foreach ($item as $item)
                    <div class="col-2">
                        <a href="{{ route('show', ['id' => $item]) }}">
                        <div class="card h-100"> 
                            <div class="card-body">
                                <h6 class="card-title">{{ $item->nama_barang }}</h6>
                                <p class="fw-medium">Rp {{ $item->harga }},-</p>
                                <img src="{{url('/storage/uploads/'.$posts->foto_barang)}}" class="img-thumbnail mb-4 object-fit-cover border rounded" alt="" width="150px" height="150px">
                                <p class="mt-1">{{ $item->deskripsi_barang }}</p>
                                </div>
                        </div>
                        </a>
                    </div>
                @endforeach 
                </div>
    </div>
</x-app-layout>
