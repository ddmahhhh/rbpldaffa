<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use illuminate\view\view;

class JointableController extends Controller
{
    function indexinfo()
    {
    	$items = barang::join('users', 'barang.user_id', '=', 'users.id')
              		->get(['users.id','users.name', 'users.kontak_toko', 'users.lokasi_toko','users.telp_toko','users.deskripsi_toko','users.jamoperasional_toko','barang.harga','barang.nama_barang','barang.deskripsi_barang','barang.foto_barang']);

        foreach ($items as $item) {
        $foto_barang = $item->foto_barang;
        }

        return view('informasibarang', compact('item'));
    }

    function indextoko(string $id):View
    {
    	$items = barang::join('users', 'barang.user_id', '=', 'users.id')
              		->get(['users.id','users.name', 'users.kontak_toko', 'users.lokasi_toko','users.telp_toko','users.deskripsi_toko','users.jamoperasional_toko','barang.harga','barang.nama_barang','barang.deskripsi_barang','barang.foto_barang']);
        $toko = barang::join('users', 'barang.user_id', '=', 'users.id')
        ->get(['users.id','users.name', 'users.kontak_toko', 'users.lokasi_toko','users.telp_toko','users.deskripsi_toko','users.jamoperasional_toko']);


        return view('pencarian-barang', compact('items','toko'));
    }
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $item = barang::findOrFail($id);

        //delete image
        Storage::delete('storage/uploads/'.$item->foto_barang);

        //delete post
        $item->delete();

        //redirect to index
        return redirect()->back()->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
