@extends('layout.app') <!--Meng-extend layout dari 'app' untuk tampilan halaman ini.-->
<div class="content">
    <h3 style="text-align:center;"><strong>Edit Genre Buku</strong></h3>
    <hr>
    <form action="/genre/{{ $genre->id }}" method="POST"> <!--Membuka form yang akan melakukan pengiriman data ke rute '/genre/{id}' dengan metode HTTP POST. $genre->id akan digunakan untuk menggantikan {id} dalam URL.-->
        @method('put') <!--Menggunakan metode HTTP PUT untuk mengindikasikan bahwa ini adalah operasi edit/update.-->
        @csrf <!--Menambahkan token CSRF untuk perlindungan keamanan.-->
        <div class="form-group">
          <label for="genre">Genre</label>
          <input type="text" name="genre" class="form-control" placeholder="Genre" value="{{ $genre->genre }}">
        </div>
        <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="{{ $genre->keterangan }}">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button> <!--Membuat tombol "Submit" untuk mengirimkan data form.-->
      </form>
</div>