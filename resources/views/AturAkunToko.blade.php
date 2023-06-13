<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>

    </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="atur_akun.css">
<style>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">





    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
.body{
    padding: 20px;
}

.navbar {
            background-color: #FFFFFF;
            display: flex;
            justify-content: end;
            align-items: center;
            padding: 10px 20px;
            border-bottom: 1px solid #000000;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 20px;
            text-decoration: none;
            color: #fff;
        }

        .navbar-links {
            list-style: none;
            padding: 0;
            display: flex;
            align-items: center;
        }

        .navbar-links li {
            margin-right: 80px;
        }

        .navbar-links li a {
            color: #000000;
            text-decoration: none;
            transition: color 0.3s ease;
            /* Add transition for smooth effect */
        }

        .navbar-links li a:hover {
            color: #808080;
            /* Set the color on hover */
        }

        .navbar-profile {
            display: flex;
            align-items: center;
            width: 30px;
            height: 30px;
        }

        .navbar-hamburger {
            display: flex;
            margin-right: auto;
        }

        .hamburger-icon {
            color: #000000;
            /* Set the color of the hamburger icon */
            font-size: 20px;
            /* Adjust the size of the icon */
            text-decoration: none;
        }

        .hamburger-icon:hover {
            color: #808080;
            /* Set the color of the hamburger icon on hover */
            transition: color 0.3s ease;
        }

        /* ... Your existing styles ... */

        .sidebar {
            position: fixed;
            top: 0;
            left: -200px;
            /* Initially hide the sidebar off the screen */
            width: 200px;
            height: 100vh;
            background-color: #f1f1f1;
            transition: left 0.3s ease;
            z-index: 9999;
        }

        .sidebar-links {
            list-style: none;
            padding: 20px;
        }

        .sidebar-links li {
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;

        }

        .sidebar-links li a {
            color: #000000;
            text-decoration: none;
        }

        .sidebar-links li a:hover {
            color: #808080;
        }

        .sidebar.open {
            left: 0;
        }

        .dropdown-menu {
            display: none;
            padding-left: 10px;
        }

        .dropdown-menu li {
            margin-bottom: 5px;
        }

        .dropdown-link.active+.dropdown-menu {
            display: block;
        }

 @media only screen and (max-width: 768px) {
            .navbar-links li {
                margin-right: 40px;
            }
        }


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 2px solid #000000;
  border-radius: 10px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.left {
  float: left;
  width: 40%;
  border-radius: 5px;
  padding: 50px;
  margin-left: 40px;
}
.right {
  float: right;
  width: 50%;
  border-radius: 5px;
  padding: 50px;
  margin-right: 40px;
}
.top-left{
    margin-left: 90px;
}
.top-left h3{
  text-indent: 50px;
}
.buttonprofil{
    width: 130px;
  height: 40px;
  color: #000000;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
  background:#fff;
border: 2px solid #000000;
  width: 130px;
  height: 40px;
  line-height: 42px;
  padding: 0;
}
.custom-btn {
  width: 130px;
  height: 40px;
  color: #000000;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
  outline: none;
}
.btn-1 {
background:#fff;
border: 2px solid #000000;
  width: 130px;
  height: 40px;
  line-height: 42px;
  padding: 0;
  float: left;
}

.btn-2 {
background:#fff;
border: 2px solid #000000;
  width: 130px;
  height: 40px;
  line-height: 42px;
  padding: 0;
  float: left;
}
.btn-3 {
background:#fff;
border: 2px solid #000000;
  width: 130px;
  height: 40px;
  line-height: 42px;
  padding: 0;
  float: right;
}

</style>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-hamburger">
            <a href="#" class="hamburger-icon">
                <i class="fas fa-bars"></i>
            </a>
        </div>

        <ul class="navbar-links inter-normal-black-20px">
            <li><a href="#">Home</a></li>
            <li><a href="#">Pasar</a></li>
            <li><a href="#">Toko</a></li>
            <li><a href="#">Banding Harga</a></li>
        </ul>
        <div class="navbar-profile">
            <i class="fas fa-user profile-icon"></i>
        </div>
    </nav>
 <div class="sidebar">
        <ul class="sidebar-links">
            <li><a href="#">Homepage</a></li>
            <li><a href="#">Buku Panduan</a></li>
            <li><a href="#">Pengaturan Akun</a></li>


            <li class="dropdown-link"><a href="#">Kategori Toko <i class="fas fa-chevron-down"></i></a></li>
            <ul class="dropdown-menu">
                <li><a href="#">Category 1</a></li>
                <li><a href="#">Category 2</a></li>
                <li><a href="#">Category 3</a></li>
            </ul>
        </ul>
    </div>

    <div class="top-left">
        <br><br>
        <button class="custom-btn btn-1">Kembali</button>
        <h3><b>Pengaturan Akun</h3>
    </div>

    <div class="left">
        <img src="coba.jpg" al
        t="image">
        <div class="buttonprofil">
            <input type="submit" value="Ganti Profil">
        </div>
        <form action="/AturAkunToko.php">
            <br>
                        <label for="kategori">Kategori Toko</label>
                        <select name="kategori" id="kategori">
                            <option value="toko_baju">Toko Baju</option>
                            <option value="toko_buah">Toko Buah</option>
                            <option value="toko_sayur">Toko Sayur</option>
                          </select>

                        <label for="jam_operasional">Jam Operasional</label>
                        <input type="text" id="jam_operasional" name="jamoperasional" placeholder="hh.mm-hh.mm">
                    </form>
    </div>

    <div class="right">
        <form action="/AturAkunToko.php">
            <h3>Informasi User</h3>
            <label for="nama_user">Nama</label>
            <input type="text" id="nama_user" name="namauser" placeholder="Nama User">

            <label for="email">Alamat E-mail</label>
            <input type="text" id="email" name="email" placeholder="user@email.com">

            <label for="password">Password</label>
            <input type="text" id="password" name="password" placeholder="...">

            <label for="no_handphone">No. Handphone</label>
            <input type="text" id="no_handphone" name="nohandphone" placeholder="...">
            <br><br><br>
            <h3>Informasi Toko</h3>
            <label for="nama_toko">Nama Toko</label>
            <input type="text" id="nama_toko" name="namatoko" placeholder="Nama Toko">

            <label for="kontak_toko">Kontak Toko</label>
            <input type="text" id="kontak_toko" name="kontaktoko" placeholder="...">

            <label for="pasar">Pasar yang ditempati</label>
            <input type="text" id="pasar" name="pasar" placeholder="Pasar ...">

            <label for="lokasi_toko">Lokasi Toko</label>
            <input type="text" id="lokasi_toko" name="lokasitoko" placeholder="...">

            <label for="deskripsi_toko">Deskripsi Toko</label>
            <textarea id="deskripsi_toko" name="dekripsitoko" placeholder="..." style="height:200px"></textarea>

            <button class="custom-btn btn-2">Etalase Toko</button>
            <button class="custom-btn btn-3">Simpan</button>
    </div>


</body>

</html>
