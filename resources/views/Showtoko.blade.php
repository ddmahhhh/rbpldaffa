{{-- Log out  --}}
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<form action="{{ route('search') }}" method="GET">
    <input type="text" placeholder="Cari Toko" name="search" required/>
    <button type="submit">Search</button>
</form>
@if($toko->isNotEmpty())
@foreach ($toko as $t)
<br>
<br>
<br>
<a href="{{ route('show', ['id' => $t]) }}">
<div>
<h2>{{$t->name}}</h2>
<h2>{{$t->email}}</h2>
<h2>{{$t->telp_toko}}</h2>
<h2>{{$t->kontak_toko}}</h2>
<h2>{{$t->lokasi_toko}}</h2>
<h2>{{$t->deskripsi_toko}}</h2>
<h2>{{$t->kategori_toko}}</h2>
<h2>{{$t->jamoperasional_toko}}</h2>

</div>
</a>
<br>
<br>
<br>
@endforeach
@else
    <div>
        <h2>No posts found</h2>
    </div>
@endif
