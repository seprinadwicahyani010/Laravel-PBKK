<?php

namespace App\Http\Controllers;

use App\Models\genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        // Menampilkan daftar ganre
        $genre = genre::all();
        return view('genre.index', compact(['genre']));
    }

    public function add(){
        // Menampilkan tampilan tambah data genre
        return view('genre.add');
    }

    public function store(Request $request){
        // Menyimpan data baru ke database
        // dd($request->except(['_token', 'submit'])); // Debugging line (optional)
        genre::create($request->except(['_token', 'submit']));
        return redirect('/genre');
    }

    public function update($id){
        // Menampilkan tampilan edit data genre
        $genre = genre::find($id);
        return view('genre.update', compact(['genre']));
    }

    public function edit($id, Request $request){
        // Mengupdate data genre yang ada di database
        $genre = genre::find($id);
        $genre->update($request->except(['_token', 'submit']));
        return redirect('/genre');
    }

    public function delete($id){
        // Menghapus data dari database
        $genre = genre::find($id);
        $genre->delete();
        return redirect('/genre');
    }
}
