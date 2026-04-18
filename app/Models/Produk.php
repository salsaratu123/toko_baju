<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Nama tabel manual karena menggunakan bahasa Indonesia 'produks'
    protected $table = 'produks';

    // Kolom yang diizinkan untuk diisi secara massal
    protected $fillable = [
        'nama',
        'kategori',
        'stok',
        'harga',
    ];
}