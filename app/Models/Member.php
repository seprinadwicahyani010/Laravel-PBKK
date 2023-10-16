<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // Menggunakan HasFactory untuk memfasilitasi pembuatan data dummy (factory).
    use HasFactory;

    // Mendefinisikan kolom-kolom yang dapat diisi (fillable) pada model Member.
    protected $fillable = ['nama', 'alamat', 'no_hp'];
}
