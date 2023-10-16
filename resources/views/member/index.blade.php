@extends('layout.app')
<!--  Menghubungkan tampilan ke 'layout.app' -->
<div class="content">
<!-- Ini adalah div dengan kelas "content" yang mengelompokkan elemen-elemen konten pada halaman ini. -->
    <h3 style="text-align:center;"><strong>Data Member</strong></h3>
    <hr>
    <table class="table">
    <!-- Ini adalah elemen tabel yang digunakan untuk menampilkan data anggota. class "table" digunakan untuk menerapkan gaya tabel sesuai dengan Bootstrap. -->
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Handphone</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <!-- Inisialisasi variabel $no dengan nilai 1 untuk menampilkan nomor urut. -->
            @foreach ($member as $member)
            <!-- Ini adalah loop yang mengulangi setiap anggota dalam array $member dan menampilkan informasi masing-masing anggota. -->    
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $member->nama }}</td>
                    <td>{{ $member->alamat }}</td>
                    <td>{{ $member->no_hp }}</td>
                    <td>
                        <button><a href="/member/{{$member->id}}/update">Edit</a></button>
                        <!-- Tombol "Edit" yang mengarahkan ke halaman untuk mengedit anggota dengan ID tertentu. -->
                        <button><a href="/member/{{$member->id}}/delete">Hapus</a></button>
                        <!-- Tombol "Hapus" yang mengarahkan untuk menghapus anggota dengan ID tertentu. -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button><a href="/member/add">Tambah Data</a></button>
    <!-- Tombol "Tambah Data" yang mengarahkan ke halaman untuk menambahkan anggota baru. -->
</div>
ChatGPT