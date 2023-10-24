@extends('layout.app')
<!--  Menghubungkan tampilan ke 'layout.app' -->
<div class="content">
<!-- Ini adalah div dengan kelas "content" yang mengelompokkan elemen-elemen konten pada halaman ini. -->
    <h3 style="text-align:center;"><strong>Genre Buku</strong></h3>
    <hr>
    <table class="table">
    <!-- Ini adalah elemen tabel yang digunakan untuk menampilkan data genre. class "table" digunakan untuk menerapkan gaya tabel sesuai dengan Bootstrap. -->
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Genre</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <!-- Inisialisasi variabel $no dengan nilai 1 untuk menampilkan nomor urut. -->
            @foreach ($genre as $genre)
            <!-- Ini adalah loop yang mengulangi setiap data dalam array $genre dan menampilkan informasi masing-masing genre. -->    
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $genre->genre }}</td>
                    <td>{{ $genre->keterangan }}</td>
                    <td>
                        <button><a href="/genre/{{$genre->id}}/update">Edit</a></button>
                        <!-- Tombol "Edit" yang mengarahkan ke halaman untuk mengedit data dengan ID tertentu. -->
                        <button><a href="/genre/{{$genre->id}}/delete">Hapus</a></button>
                        <!-- Tombol "Hapus" yang mengarahkan ke halaman untuk menghapus data dengan ID tertentu. -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button><a href="/genre/add">Tambah Data</a></button>
    <!-- Tombol "Tambah Data" yang mengarahkan ke halaman untuk menambahkan data genre baru. -->
</div>