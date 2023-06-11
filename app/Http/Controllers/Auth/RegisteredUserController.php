<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'telp_toko' => ['required', 'string', 'max:255'],
            'kontak_toko' => ['required', 'string', 'max:255'],
            'lokasi_toko' => ['required', 'string', 'max:255'],
            'deskripsi_toko' => ['required', 'string', 'max:255'],
            'kategori_toko' => ['required', 'string', 'max:255'],
            'jamoperasional_toko' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telp_toko' => $request->telp_toko,
            'kontak_toko' => $request->kontak_toko,
            'lokasi_toko' => $request->lokasi_toko,
            'deskripsi_toko' => $request->deskripsi_toko,
            'kategori_toko' => $request->kategori_toko,
            'jamoperasional_toko' => $request->jamoperasional_toko,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
