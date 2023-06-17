<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'nama_toko' => ['string', 'max:255'],
            'kontak_toko' => ['string', 'max:255'],
            'lokasi_toko' => ['string', 'max:255'],
            'deskripsi_toko' => ['string', 'max:255'],
            'kategori_toko' => ['string', 'max:255'],
            'operasional_toko' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
