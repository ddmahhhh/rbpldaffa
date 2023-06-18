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
<div class="col-md-15">
                <div class="row">
                <div class="col-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="card-title">{{ $t->nama_barang }}</h6>
                                <p class="fw-medium">Rp {{ $t->harga }},-</p>
                                <img src="{{asset('storage/uploads/'.$t->foto_barang)}}" class="img-thumbnail mb-4 object-fit-cover border rounded" alt="" width="150px" height="150px">
                                <p class="mt-1">{{ $t->deskripsi }}</p>
                            </div>
                        </div>
                    </div>

                </div>

@endforeach
@else
    <div>
        <h2>No posts found</h2>
    </div>
@endif
