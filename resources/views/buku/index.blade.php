@extends('layout.app')
<!--  Menghubungkan tampilan ke 'layout.app' -->
<div class="content">
<!-- Ini adalah div dengan kelas "content" yang mengelompokkan elemen-elemen konten pada halaman ini. -->
    <h3 style="text-align:center;"><strong>Data Buku</strong></h3>
    <hr>
    <table class="table">
    <!-- Ini adalah elemen tabel yang digunakan untuk menampilkan data buku. class "table" digunakan untuk menerapkan gaya tabel sesuai dengan Bootstrap. -->
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Genre</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <!-- Inisialisasi variabel $no dengan nilai 1 untuk menampilkan nomor urut. -->
            @foreach ($buku as $buku)
            <!-- Ini adalah loop yang mengulangi setiap data dalam array $buku dan menampilkan informasi masing-masing data buku. -->    
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->genre }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>{{ $buku->tahun_terbit }}</td>
                    <td>
                        <button><a href="/buku/{{$buku->id}}/update">Edit</a></button>
                        <button><a href="/buku/{{$buku->id}}/delete">Hapus</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button><a href="\buku\add">Tambah Data</a></button>
    <!-- Tombol "Tambah Data" yang mengarahkan ke halaman untuk menambahkan data buku. -->
</div>
ChatGPT