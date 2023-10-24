<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
	protected $fillable = ['judul', 'genre_id', 'penulis', 'penerbit', 'tahun_terbit'];
	 // Mendefinisikan kolom-kolom yang dapat diisi (fillable) saat melakukan operasi mass assignment.

    public function Genre()
	{
	return $this->belongsTo('App\Models\genre','genre_id', 'id');
		// Mendefinisikan relasi "Buku" dengan model "Genre".
        // 'App\Models\Genre' adalah model yang berhubungan.
        // 'genre_id' adalah nama kolom kunci luar di model ini.
        // 'id' adalah nama kolom kunci utama di model "Genre".
        // Dengan ini, model "Buku" terkait dengan satu objek "Genre".
	}
}
