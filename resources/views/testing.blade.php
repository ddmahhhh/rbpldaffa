{{-- INI BUAT LOGOUT NANTI TINGGAL DI COPY BUAT DI STYLING --}}
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>


{{-- INI BUAT FORM--}}
<h2>Post Toko</h2>
<form method="POST" enctype="multipart/form-data" action="/upbarang">
    @csrf
    <p>nama balang</p>
    <input type="text" name="nama_barang" > <br><br>
    <p>harga</p>
    <input type="text" name="harga" > <br><br>
    <p>Deskripsi</p>
    <input type="text" name="deskripsi_barang" ><br><br>
    <p>Foto Barang</p>
    <input type="file" name="foto_barang"><br><br>
    <button type="submit">Submit Data</button>
</form>

@foreach ($post as $posts)
<a href="{{ route('post.show', ['id' => $posts]) }}">
    <img class="w-full h-44 object-cover object-center rounded-t-lg" src="{{url('/storage/uploads/'.$posts->foto_barang)}}" alt="" >
</a>
@endforeach
