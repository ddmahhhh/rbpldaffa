<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/epasar.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Tambah Barang</title>
  
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


    <div class="sec-1">
      <h4>Tambah Barang</h4>
    </div>
        <section class="sec-2">
          <div class="wrapper">
              <form method="POST" action="/tambah-barang" enctype="multipart/form-data">
                @csrf
              <div class="mb-3">
                <label for="nama-barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" id="nama_barang">
              </div>
              <div class="mb-3">
                <label for="nama-barang" class="form-label" value="Rp">Harga</label>
                <input type="text" class="form-control" name="harga" id="nama_barang">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi_barang" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Unggah Foto Barang</label>
                <input class="form-control" name="foto_barang" type="file" id="formFile">
              </div>
              <br>
              <a href="/etalase-toko" type="submit" class="btn btn-outline-dark">Batal</a>
              <button type="submit" class="btn btn-outline-primary">Simpan</button>
              </form>
            </div>
        </section>
  </body>
</html>