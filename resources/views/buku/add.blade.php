@extends('layout.app') <!--Meng-extend layout dari 'app' untuk tampilan halaman ini.-->
<div class="content">
    <h3 style="text-align:center;"><strong>Tambah Data Buku</strong></h3>
    <hr>
    <form action="/buku/store" method="POST"> <!--Membuka form yang akan melakukan pengiriman data ke rute '/buku/store' menggunakan metode HTTP POST.-->
        @csrf <!--Menambahkan token CSRF untuk perlindungan keamanan.-->
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" name="judul" class="form-control" placeholder="Judul">
        </div>
        <div class="form-group">
            <label for="Genre">Genre</label>
          <select class="form-control select2" name="genre_id" id="genre_id"> <!--Membuat dropdown dengan class "select2" dan nama 'genre_id'.-->
            @foreach ($genre as $genre) <!--Melakukan loop melalui koleksi $genre untuk membuat pilihan genre.-->
                <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" class="form-control" placeholder="Penulis">
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" placeholder="Penerbit">
        </div>
        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button> <!--Membuat tombol "Submit" untuk mengirimkan data form.-->
      </form>
</div>