<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css"
        integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous" />
    <title>Cari Barang</title>

</head>

<body class="mx-[195px]">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 text-gray-200 leading-tight">
                {{ __('Semua Produk') }}
            </h2>
        </x-slot>

    <div class="flex flex-row mx-12 gap-12 justify-center items-center  mt-12">
        <button
            class="flex flex-row items-center w-fit md:w-[146px] rounded-md h-[51px] pr-2 gap-1 ring-1 ring-black justify-center"><a href="/listtoko"><svg
                class="w-[20px] h-[15px]" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            <a href="/listtoko"></svg></i> Kembali</button></a>
        <div class="flex flex-row gap-5">
            <input placeholder="Cari Barang atau Toko"
                class="ring-1 ring-black pl-4 rounded-md w-full md:w-[456px] placeholder:text-black h-[80px]"
                type="text">
            </div>
        </div>
    </div>


    <div class="flex flex-row px-3 ring-1 items-center ring-black rounded-lg h-[214px] mt-4">
        <div class="w-[258px] h-[175px] mx-3 ring-1 ring-black">
            <div class="flex justify-center mt-2 items-center">
                <img class="w-11/12 "
                    src="https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcQiXKmg1bNUU3QGOEzxL2_ld3lv_G4J0DpmGTU_Ix4iVb-M2fB1wdFf0JDAfnuSAlqaFyusi9F5NHCa13E"
                    alt="">
            </div>
        </div>
        <div class="flex text-xl flex-col w-[470px] gap-4">
            <h1 class="text-3xl font-light">
                {{$toko->name}}
            </h1>
            <div>
                <h1 class="font-semibold">Lokasi</h1>
                <p class="font-light">{{$toko->lokasi_toko}}</p>
            </div>
            <div>
                <h1 class="font-semibold">Kontak</h1>
                <p class="font-light">{{$toko->telp_toko}}</p>
            </div>
        </div>
        <div class="flex text-xl ml-32 font-light  pb-12 flex-col">
            <div class="ring-1 ring-black w-[316px] h-[34px] mb-5 rounded-md flex justify-center items-center">
                <h1>{{$toko->lokasi_toko}}</h1>
            </div>
            <h1 class="font-semibold">Jam Operasional</h1>
            <div class="flex flex-col ">
                <div class="flex flex-row gap-5">
                    <p class="w-40">Senin s.d Jumat</p>
                    <p>{{$toko->jamoperasional_toko}}</p>
                </div>
                <div class="flex flex-row gap-5">
                    <p class="w-40">Sabtu s.d Minggu</p>
                    <p>{{$toko->jamoperasional_toko}}</p>
                </div>

            </div>
        </div>
    </div>

    <div class="my-20">
        <h1 class="font-semibold text-4xl">Produk Toko</h1>
    </div>
    @foreach ($toko as $t)
    <div class="flex flex-row justify-center mb-12 gap-[31px]">
        <div class="ring-1 ring-black w-[287px] px-5 flex flex-col  h-[417px] rounded-lg">
            <div class="mt-4 flex justify-center ring-1 w-[247px] h-[268px] mx-auto ring-black">
                <div class="flex justify-center mt-2 items-center">
                    <img class="rounded-sm w-11/12 "
                        src="{{asset('storage/uploads/'.$toko->foto_barang)}}">
                </div>
            </div>
            <div class="text-left flex flex-col justify-start mb-4 gap-1">
                <h1 class="text-lg">{{$toko->nama_barang}}</h1>
                <h1 class="text-2xl">Rp {{$toko->harga}}</h1>
            </div>
            <div class="flex justify-start">
                <h1>{{$toko->name}}</h1>
            </div>
        </div>

    </div>
    @endforeach
</body>

</html>
</x-app-layout>
