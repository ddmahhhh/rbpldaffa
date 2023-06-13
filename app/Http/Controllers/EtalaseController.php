<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\barang;

class EtalaseController extends Controller
{
    public function etalase(){
        $barang   = barang::all();
        return view('etalase-toko')->with('barang', $barang);
    }

    public function showBarang(){
        return view('halaman-barang');
    }

    public function deleteBarang($id){
        $barang = barang::find($id);
        $barang->delete();
        return redirect()->route('etalase');
    }

}
