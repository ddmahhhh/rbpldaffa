<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\barang;

class BarangController extends Controller
{

    public function index()
    {
        //
        $item = barang::all();

        // Kirim data posting ke tampilan
        return view('Showbarang', compact('item'));
    }
    public function indexhome()
    {
        //
        $barang = barang::all();

        // Kirim data posting ke tampilan
        return view('Showbarang', compact('item'));
    }

    public function beranda()
    {
        //
        $item = barang::all();

        // Kirim data posting ke tampilan
        return view('dashboard', compact('item'));
    }
    public function indexpost()
    {
        //
        $post = barang::all();

        // Kirim data posting ke tampilan
        return view('testing', compact('post'));
    }
    public function create()
    {
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'deskripsi_barang' => 'required',
            'foto_barang' => 'required|file',

        ]);

        //Get real name dan Upload Directory
        $file= $request->file('foto_barang')->getClientOriginalName();
        $directory= 'public/uploads';
        $path = $request ->file('foto_barang')->storeAs($directory,$file);
        $userid =auth()->user()->id;

         // Simpan data ke database
        $item = new barang;
        $item->nama_barang = $request->nama_barang;
        $item->harga = $request->harga;
        $item->deskripsi_barang = $request->deskripsi_barang;
        $item->foto_barang = $file;
        $item->user_id= $userid;
        $item->save();

        // Redirect dengan pesan sukses
        return redirect()->action([BarangController::class,'index'])->with('success', 'Post created successfully!');


    }
    public function compare()
    {
        //
        $post = barang::with('user')->get();
        $post = barang::all();

        // Kirim data posting ke tampilan
        return view('bandingkan-harga', compact('post'));
    }


    public function show(string $id): View
    {
        //get post by ID
        $item = barang::findOrFail($id);

        //render view with post
        return view('informasibarang', compact('item'));

    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function cari(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $item = barang::query()
            ->where('nama_barang', 'LIKE', "%{$search}%")
            ->orWhere('deskripsi_barang', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('dashboard', compact('item'));
    }


    public function tambahbarang(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'deskripsi_barang' => 'required',
            'foto_barang' => 'required|file',

        ]);

        //Get real name dan Upload Directory
        $file= $request->file('foto_barang')->getClientOriginalName();
        $directory= 'public/uploads';
        $path = $request ->file('foto_barang')->storeAs($directory,$file);
        $userid =auth()->user()->id;

         // Simpan data ke database
        $item = new barang;
        $item->nama_barang = $request->nama_barang;
        $item->harga = $request->harga;
        $item->deskripsi_barang = $request->deskripsi_barang;
        $item->foto_barang = $file;
        $item->user_id= $userid;
        $item->save();

        // Redirect dengan pesan sukses
        return redirect()->action([BarangController::class,'index'])->with('success', 'Post created successfully!');
    }

    public function viewBarang($id)
    {
        $barang = barang::find($id);
        return view('/update-barang', compact('barang'));
    }

    public function updateBarang(Request $request, $id)
    {
        $barang = barang::find($id);
        $barang->update($request->all());
        return redirect()->route('etalase')->with('success', 'Barang berhasil diubah!');
    }

    public function searchitem(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $post = barang::query()
            ->where('nama_barang', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('bandingkan-harga', compact('post'));
    }

}
