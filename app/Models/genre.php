<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    use HasFactory;
    protected $fillable = ['genre', 'keterangan'];
    // Mendefinisikan kolom-kolom yang dapat diisi (fillable) saat melakukan operasi mass assignment.

    public function Buku() 
    {
        return $this->hasMany('App\Models\buku','genre_id', 'id');
        // Mendefinisikan relasi "Genre" dengan model "Buku".
        // 'App\Models\Buku' adalah model yang berhubungan.
        // 'genre_id' adalah nama kolom kunci luar di model ini.
        // 'id' adalah nama kolom kunci utama di model "Genre".
        // Dengan ini, model Genre dapat memiliki banyak Buku yang berhubungan dengan 'genre_id'.
    }
}
