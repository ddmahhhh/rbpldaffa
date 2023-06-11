{{-- Log out  --}}
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<form action="{{ route('cari') }}" method="GET">
    <input type="text" placeholder="Cari Barang!" name="search" required/>
    <button type="submit">Search</button>
</form>
@if($item->isNotEmpty())
@foreach ($item as $t)

<br>
<br>
<br>
<a href="{{ route('show', ['id' => $t]) }}">
<div>
<h2>{{$t->nama_barang}}</h2>
<h2>{{$t->harga}}</h2>
<h2>{{$t->deskripsi_barang}}</h2>
<img src="{{asset('storage/uploads/'.$t->foto_barang)}}" alt="{{$t->deskripsi_barang}}">
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
