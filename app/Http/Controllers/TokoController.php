<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\toko;
use App\Models\User;
use App\Models\barang;
use Illuminate\View\View;


class TokoController extends Controller
{
    // show list toko-tokonya
    public function index()
    {
        //
        $toko = User::all();

        // Kirim data posting ke tampilan
        return view('Showtoko', compact('toko'));
    }

    public function show(string $id): View
    {
        //get post by ID
        $toko = User::findOrFail($id);

        //render view with post
        return view('Pencarian-barang', compact('toko'));

    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $toko = User::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('kontak_toko', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('showtoko', compact('toko'));
    }

}
