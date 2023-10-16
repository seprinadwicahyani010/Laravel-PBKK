@extends('layout.app')
<!-- Ini adalah pernyataan @extends yang menghubungkan tampilan ini dengan tampilan dasar yang ada di file 'layout.app'. -->
<div class="content">
<!-- Ini adalah div dengan kelas "content" yang mengelompokkan elemen-elemen konten pada halaman ini. -->
    <h3 style="text-align:center;"><strong>Tambah Data Member</strong></h3>
    <hr>
    <!-- Di atas ini adalah judul halaman dengan tulisan "Tambah Data Member" yang diatur tengah, dan sebuah garis horizontal <hr> yang memisahkan judul dari form di bawahnya. -->
    <form action="/member/store" method="POST">
        @csrf
        <!-- Ini adalah formulir HTML yang digunakan untuk menambahkan data anggota. Atribut action menentukan URL ke mana formulir akan dikirimkan. Metode POST digunakan untuk mengirimkan data ke server. @csrf digunakan untuk melindungi formulir dari serangan lintas situs (CSRF). -->
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" class="form-control" placeholder="Masukkan nama anda">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" class="form-control" placeholder="Alamat">
        </div>
        <div class="form-group">
            <label for="no_hp">Nomor Handphone</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Nomor Handphone">
          </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <!-- Ini adalah tombol "Submit" yang akan mengirimkan formulir saat diklik. class digunakan untuk menerapkan gaya tombol sesuai dengan Bootstrap, dan name memberi nama tombol (opsional). -->
      </form>
</div>
