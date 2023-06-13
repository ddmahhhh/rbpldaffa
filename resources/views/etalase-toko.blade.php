<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/epasar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Etalase Toko</title>
</head>
    <body>
        <div class="header">
        <a href="/" class="btn btn-outline-dark">Kembali</a>
        <span><h3>Etalase Toko</h3></span>
        <a href="/halaman-barang" class="btn btn-outline-dark">Tambah Barang</a>
        </div>
        @if ($message=Session::get('success'))
            <div class="alert alert-light mx-5" role="alert">
                {{ $message }}
            </div>
        @endif
            <div class="col-md-15">
                <div class="row">
                @foreach ($barang as $item)
                    <div class="col-2">
                        <div class="card h-100"> 
                            <div class="card-body">
                                <h6 class="card-title">{{ $item->nama_barang }}</h6>
                                <p class="fw-medium">Rp {{ $item->harga }},-</p>
                                <img src="{{ asset('foto_produk/'.$item->foto_produk) }}" class="img-thumbnail mb-4 object-fit-cover border rounded" alt="" width="150px" height="150px">
                                <p class="mt-1">{{ $item->deskripsi }}</p>
                                <a href="/update-barang/{{ $item->id }}" class="btn btn-outline-dark">Edit</a>
                                <a href="#" onclick="confirmation(event)" class="btn btn-outline-danger delete" item-id="{{ $item->id }}" item-name="{{ $item->nama_barang  }}">Hapus</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                @include('sweetalert::alert')
<!--           
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <a class="card-img-top">{{ $item->foto_produk }}</a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_barang }}</h5>
                            <h6 class="card-title">Rp {{ $item->harga }},-</h6>
                            <p class="card-text">{{ $item->deskripsi }}</p>
                            <a href="#" class="btn btn-outline-secondary">Edit</a>
                            <a href="#" class="btn btn-outline-danger">Hapus</a>
                        </div>
                    </div>
                </div>
-->     
                </div>

                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    </body>
    <script>
     $('.delete').click(function(){
        swal({
            title: "Yakin?",
            text: "Anda akan menghapus item tersebut.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Barang berhasil dihapus!", {
                icon: "success",
                });
            } else {
                swal("Hapus barang dibatalkan");
            }
        });
    });
    </script>
</html>