<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Informasi Barang</title>
    <style>
        .swiper-pagination-bullet {
            width: 16px;
            height: 16px;
            background-color: transparent;
            box-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            --tw-ring-color: rgb(0 0 0);
        }

        .swiper-pagination-bullet-active {
            background-color: #000 !important;
        }
    </style>
</head>


    <body >
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 text-gray-200 leading-tight">
                    {{ __('Semua Produk') }}
                </h2>
            </x-slot>


    <div class="mx-16 mt-6 flex items-center flex-row">
        <button
            class="flex flex-row items-center w-fit md:w-[146px] rounded-md h-[51px] pr-2 gap-1 ring-1 ring-black justify-center"><svg
                class="w-[20px] h-[15px]" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg></i> Kembali</button>
        <div class="mx-auto">
            <form action="{{ route('banding') }}" method="GET">
                <input class="h-14 w-72 ring-1 ring-black pl-8 text-xl rounded-xl focus:outline-none" type="text"
                placeholder="Cari Barang" name="search" id="">
                <button type="submit">Search</button>
            </form>

        </div>
    </div>
    <div class="mx-40 mt-12">
        <div class="justify-center ring-1 ring-black rounded-xl w-full flex flex-col py-8 px-10">
            <div class="flex flex-row justify-between font-semibold">
                <h1>Harga Produk Serupa</h1>
                <a class="flex flex-row gap-4" href="">
                    <div class="flex flex-row gap-4">
                        <h1>Urutkan</h1>
                        <img src="images/sort.svg" alt="">
                </a>
            </div>
        </div>
        <div class="w-full">
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="w-5/12 pt-4 pb-2 border-b text-left font-normal border-black">Nama Barang</th>
                        <th class="w-4/12 pt-4 pb-2 border-b text-left font-normal border-black">Toko</th>
                        <th class="w-4/12 pt-4 pb-2 border-b text-left font-normal border-black">Harga</th>
                    </tr>
                </thead>



                <tbody>
                    @if($post->isNotEmpty())
                    @foreach ($post as $p )
                    <tr>
                        <td class="py-4">{{$p->nama_barang}}</td>
                        <td class="py-4 ">{{$p->user->name }}</td>
                        <td class="py-4 ">Rp.{{$p->harga}}</td>
                    </tr>
                    @endforeach
                    @else
                        <div>
                            <h2>No posts found</h2>
                        </div>
                    @endif
                </tbody>
            </table>
        </div>

    </div>

    </div>
    </div>
</body>

</html>
</x-app-layout>
