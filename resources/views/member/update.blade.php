@extends('layout.app')
<!-- Ini adalah pernyataan @extends yang menghubungkan tampilan ini dengan tampilan dasar yang ada di file 'layout.app'. -->
<div class="content">
<!-- Ini adalah div dengan kelas "content" yang mengelompokkan elemen-elemen konten pada halaman ini. -->
    <h3 style="text-align:center;"><strong>Edit Data Member</strong></h3>
    <hr>
    <!-- Di atas ini adalah judul halaman dengan tulisan "Edit Data Member" yang diatur tengah, dan sebuah garis horizontal <hr> yang memisahkan judul dari form di bawahnya. -->
    <form action="/member/{{ $member->id }}" method="POST">
        @method('put')
        @csrf
        <!-- Ini adalah formulir HTML yang digunakan untuk mengedit data anggota. Atribut action menentukan URL ke mana formulir akan dikirimkan. Metode POST digunakan untuk mengirimkan perubahan ke server. 
            @method('put') digunakan untuk menentukan bahwa metode HTTP yang digunakan adalah "PUT," yang digunakan untuk mengupdate data. @csrf digunakan untuk melindungi formulir dari serangan lintas situs (CSRF). -->
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" class="form-control" placeholder="Masukkan nama anda" value="{{ $member->nama }}">
        </div>
        <!-- Di sini, Anda memiliki input teks untuk mengedit nama anggota. name digunakan untuk memberi nama input, class digunakan untuk memberi elemen gaya CSS, placeholder memberikan placeholder teks yang muncul di dalam input, dan value mengisi input dengan nilai nama anggota yang ada. -->
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $member->alamat }}">
        </div>
        <!-- Ini adalah input untuk mengedit alamat anggota, dengan prinsip yang sama seperti input nama di atas. -->
        <div class="form-group">
            <label for="no_hp">Nomor Handphone</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Nomor Handphone" value="{{ $member->no_hp }}">
          </div>
        <!-- Di sini, Anda memiliki input untuk mengedit nomor handphone anggota, juga dengan prinsip yang sama seperti input nama di atas. --> 
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <!-- Ini adalah tombol "Submit" yang akan mengirimkan formulir saat diklik. class digunakan untuk menerapkan gaya tombol sesuai dengan Bootstrap, dan name memberi nama tombol (opsional). -->
      </form>
</div>
