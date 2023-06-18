<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/epasar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <title>Etalase Toko</title>
</head>
    <body>
    <nav class="navbar">
        <div class="navbar-tittle">
            <p><strong>E-PASAR</strong></p>
        </div>

        <ul class="navbar-links">
            <li><a href="/dashboard">Beranda</a></li>
            <li><a href="/listtoko">Toko</a></li>
            <li><a href="/banding">Bandingkan Harga</a></li>
        </ul>
        <div class="navbar-profile">
            <i class="fas fa-user profile-icon"></i>
        </div>
    </nav>


        <br />
    </div>

    <script>
        var body = document.querySelector('body');
        var dropdownLinks = document.querySelectorAll('.dropdown-link');


        dropdownLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation(); // Prevent the click event from bubbling up to the body
                this.classList.toggle('active');
            });
        });
    </script>
        <div class="header">
        <a href="/profile" class="btn btn-outline-dark">Kembali</a>
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
                                <img src="{{ asset('foto_barang/'.$item->foto_barang) }}" class="img-thumbnail mb-4 object-fit-cover border rounded" alt="" width="150px" height="150px">
                                <p class="mt-1">{{ $item->deskripsi_barang }}</p>
                                <a href="/update-barang/{{ $item->id }}" class="btn btn-outline-dark">Edit</a>
                                <a href="#" onclick="confirmation(event)" class="btn btn-outline-danger delete" item-id="{{ $item->id }}" item-name="{{ $item->nama_barang  }}">Hapus</a>
                            </div>
                        </div>
                    </div>
                @endforeach
    
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