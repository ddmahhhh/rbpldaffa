<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/epasar.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Tambah Barang</title>
</head>
  <body>
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
                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Unggah Foto Barang</label>
                <input class="form-control" name="foto_produk" type="file" id="formFile">
              </div>
              <br>
              <a href="/etalase-toko" type="submit" class="btn btn-outline-dark">Batal</a>
              <button type="submit" class="btn btn-outline-primary">Simpan</button>
              </form>
            </div>
        </section>
  </body>
</html>