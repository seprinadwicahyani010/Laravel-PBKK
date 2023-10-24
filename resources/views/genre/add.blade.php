@extends('layout.app') <!--Meng-extend layout dari 'app' untuk tampilan halaman ini.-->
<div class="content">
    <h3 style="text-align:center;"><strong>Tambah Genre Buku</strong></h3> <!--Menampilkan judul "Tambah Genre Buku" dengan pemformatan tengah.
    <hr>
    <form action="/genre/store" method="POST"> <!--Membuka sebuah form yang akan melakukan pengiriman data ke rute '/genre/store' menggunakan metode HTTP POST.-->
      @csrf <!--Menambahkan token CSRF untuk perlindungan keamanan.-->
        <div class="form-group">
          <label for="genre">Genre</label><!--Menampilkan label "Genre" untuk input berikutnya.-->
          <input type="text" name="genre" class="form-control" placeholder="Genre"> <!--Membuat input teks dengan nama 'genre' dan placeholder "Genre".-->
        </div>
        <div class="form-group">
          <label for="keterangan">Keterangan</label> <!--Menampilkan label "Keterangan" untuk input berikutnya.-->
          <input type="text" name="keterangan" class="form-control" placeholder="Keterangan"> <!--Membuat input teks dengan nama 'keterangan' dan placeholder "Keterangan".-->
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button> <!--Membuat tombol "Submit" untuk mengirimkan data form.-->
      </form>
</div>