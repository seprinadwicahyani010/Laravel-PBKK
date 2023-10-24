@extends('layout.app') <!--Meng-extend layout dari 'app' untuk tampilan halaman ini.-->
<div class="content">
    <h3 style="text-align:center;"><strong>Tambah Data Buku</strong></h3>
    <hr>
    <form action="/buku/{{ $buku->id }}" method="POST"> <!--Membuka form yang akan melakukan pengiriman data ke rute '/buku/{id}' menggunakan metode HTTP POST. $buku->id akan digunakan untuk menggantikan {id} dalam URL.-->
        @method('put') <!--Menggunakan metode HTTP PUT untuk mengindikasikan bahwa ini adalah operasi edit/update.-->
        @csrf <!--Menambahkan token CSRF untuk perlindungan keamanan.-->
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{ $buku->judul }}"> <!--Membuat input teks dengan nama 'judul', placeholder "Judul", dan nilai awal yang diambil dari $buku->judul.-->
        </div>
        <div class="form-group">
            <label for="Genre">Genre</label>
          <select class="form-control select2" name="genre_id" id="genre_id"> <!-- Membuat dropdown dengan class "select2" dan nama 'genre_id'.-->
            @foreach ($genre as $genre) <!--Melakukan loop melalui koleksi $genre untuk membuat pilihan genre.-->
                <option value="{{ $genre->id }}">{{ $genre->genre }}</option> <!--Setiap opsi memiliki nilai (ID) dan teks genre.-->
            @endforeach
          </select>
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" class="form-control" placeholder="Penulis" value="{{ $buku->penulis }}">
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" value="{{ $buku->penerbit }}">
        </div>
        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" value="{{ $buku->tahun_terbit }}">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
</div>