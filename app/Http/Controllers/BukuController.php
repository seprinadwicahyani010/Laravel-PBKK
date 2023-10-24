<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\genre;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        // Menampilkan daftar buku
        $buku = buku::join('genres', 'bukus.genre_id', '=', 'genres.id') ->select('bukus.*', 'genres.genre') ->get();
        return view('buku.index', compact(['buku']));
    }

    public function add(){
        // Menampilkan tampilan tambah data buku
        $genre = genre::all();
        return view('buku.add', compact(['genre']));
    }

    public function store(Request $request){
        // Menyimpan data baru ke database
        // dd($request->except(['_token', 'submit'])); // Debugging line (optional)
        buku::create($request->except(['_token', 'submit']));
        return redirect('/buku');
    }

    public function update($id){
        // Menampilkan tampilan edit data buku
        $buku = buku::find($id);
        $genre = genre::all();
        return view('buku.update', compact(['buku', 'genre']));
    }

    public function edit($id, Request $request){
        // Mengupdate data buku yang ada di database
        $buku = buku::find($id);
        $buku->update($request->except(['_token', 'submit']));
        return redirect('/buku');
    }

    public function delete($id){
        // Menghapus data dari database
        $buku = buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }
}
