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

<body class="mx-[195px]">
    <nav>
        <div class="flex flex-row items-center justify-between mx-4 my-3">
            <div class="space-y-2">
                <div class="w-8 h-1 rounded-md bg-black"></div>
                <div class="w-8 h-1 rounded-md bg-black"></div>
                <div class="w-8 h-1 rounded-md bg-black"></div>
            </div>
            <div class="flex items-center flex-row gap-[32px]">
                <button class="underline underline-offset-2" href="">Home</button>
                <button class="hover:underline underline-offset-2" href="">Pasar</button>
                <button class="hover:underline underline-offset-2">Toko</button>
                <button class="hover:underline underline-offset-2">Banding Harga</button>
                <div>
                    <svg class="w-[70px] h-[81px]" width="70" height="82" viewBox="0 0 70 82" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="70" height="81.4898" fill="url(#pattern0)" />
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_9_38"
                                    transform="matrix(0.00456525 0 0 0.00392157 -0.0797872 0)" />
                            </pattern>
                            <image id="image0_9_38" width="254" height="255"
                                xlink:href="data:image/png;base64,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" />
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
        <hr class="bg-black h-0.5">
    </nav>

    <div class="mx-16 mt-6 flex items-center flex-row">
        <button
            class="flex flex-row items-center w-fit md:w-[146px] rounded-md h-[51px] pr-2 gap-1 ring-1 ring-black justify-center"><svg
                class="w-[20px] h-[15px]" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg></i> Kembali</button>
        <div class="mx-auto">
            <input class="h-14 w-72 ring-1 ring-black pl-8 text-xl rounded-xl focus:outline-none" type="text"
                placeholder="Cari Barang" name="" id="">
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
                    <tr>
                        <td class="py-4">Bawang Merah Segar
                            1 Kg</td>
                        <td class="py-4 ">Toko ABC</td>
                        <td class="py-4 ">Rp 49.500,-</td>
                    </tr>
                    <tr>
                        <td class="py-4 ">Bawang Merah Murah 1 Kg</td>
                        <td class="py-4 ">Toko bcd</td>
                        <td class="py-4 ">Rp 48.900,-</td>
                    </tr>
                    <tr>
                        <td class="py-4 ">Bawang Merah 1 Kg</td>
                        <td class="py-4 ">Toko fgh</td>
                        <td class="py-4 ">Rp 49.500,-</td>
                    </tr>
                    <tr>
                        <td class="py-4 "><div class="w-56 h-8 bg-gray-300"></div></td>
                        <td class="py-4 "><div class="w-40 h-8 bg-gray-300"></div></td>
                        <td class="py-4 "><div class="w-40 h-8 bg-gray-300"></td>
                    </tr>
                    <tr>
                        <td class="py-4 "><div class="w-56 h-8 bg-gray-300"></div></td>
                        <td class="py-4 "><div class="w-40 h-8 bg-gray-300"></div></td>
                        <td class="py-4 "><div class="w-40 h-8 bg-gray-300"></td>
                    </tr>
                    <tr>
                        <td class="py-4 "><div class="w-56 h-8 bg-gray-300"></div></td>
                        <td class="py-4 "><div class="w-40 h-8 bg-gray-300"></div></td>
                        <td class="py-4 "><div class="w-40 h-8 bg-gray-300"></td>
                    </tr>
                    <tr>
                        <td class="py-4 "><div class="w-56 h-8 bg-gray-300"></div></td>
                        <td class="py-4 "><div class="w-40 h-8 bg-gray-300"></div></td>
                        <td class="py-4 "><div class="w-40 h-8 bg-gray-300"></td>
                    </tr>
                    <tr>
                        <td class="py-4 "><div class="w-56 h-8 bg-gray-300"></div></td>
                        <td class="py-4 "><div class="w-40 h-8 bg-gray-300"></div></td>
                        <td class="py-4 "><div class="w-40 h-8 bg-gray-300"></td>
                    </tr>
                    <tr>
                        <td class="py-4 "><div class="w-56 h-8 bg-gray-300"></div></td>
                        <td class="py-4 "><div class="w-40 h-8 bg-gray-300"></div></td>
                        <td class="py-4 "><div class="w-40 h-8 bg-gray-300"></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    </div>
    </div>
    daffa blablablabla
</body>

</html>
