<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $fillable = ['nama_barang','harga','foto_barang','deskripsi_barang','user_id'];
    protected $primarykey = ['id'];
    protected $guarded = ['id'];

    public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}
