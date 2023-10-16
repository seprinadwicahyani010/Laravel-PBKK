<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/member', [MemberController::class, 'index']);
// Mengarahkan ke aksi "index" pada MemberController saat mengakses '/member'. Menampilkan data member.

Route::get('/member/add', [MemberController::class, 'add']);
// Mengarahkan ke aksi "add" pada MemberController saat mengakses '/member/add'. Menampilkan halaman tambah data member.

Route::post('/member/store', [MemberController::class, 'store']);
// Mengarahkan ke aksi "store" pada MemberController saat mengirimkan formulir tambah anggota. Menyimpan data baru ke database.

Route::get('/member/{id}/update', [MemberController::class, 'update']);
// Mengarahkan ke aksi "update" pada MemberController saat mengakses '/member/{id}/update'. Menampilkan halaman edit data member dengan ID tertentu.

Route::put('/member/{id}', [MemberController::class, 'edit']);
// Mengarahkan ke aksi "edit" pada MemberController saat mengirimkan formulir edit anggota dengan ID tertentu. Mengupdate data member yang ada di database.

Route::get('/member/{id}/delete', [MemberController::class, 'delete']);
// Mengarahkan ke aksi "delete" pada MemberController saat mengakses '/member/{id}/delete'. Menghapus data dengan ID tertentu dari database.
