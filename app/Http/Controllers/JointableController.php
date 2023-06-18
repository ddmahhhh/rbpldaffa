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
              		->get(['users.name', 'users.kontak_toko', 'users.lokasi_toko','users.telp_toko','users.deskripsi_toko','users.jamoperasional_toko','barang.harga','barang.nama_barang','barang.deskripsi_barang','barang.id','barang.foto_barang']);

        foreach ($items as $item) {
        $foto_barang = $item->foto_barang;
        }

        return view('informasibarang', compact('item'));
    }


    function indextoko()
    {
    	$items = barang::join('users', 'barang.user_id', '=', 'users.id')
              		->get(['users.id','users.name', 'users.kontak_toko', 'users.lokasi_toko','users.telp_toko','users.deskripsi_toko','users.jamoperasional_toko','barang.harga','barang.nama_barang','barang.deskripsi_barang','barang.foto_barang']);

        foreach ($items as $toko) {
        $foto_barang = $toko->foto_barang;
        }

        return view('Pencarian-barang', compact('toko'));
    }



}
