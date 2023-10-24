<!DOCTYPE html>
<html>
<head>
   <!-- Memasukkan stylesheet Bootstrap dari sumber eksternal -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <!-- Memasukkan file stylesheet kustom (local) dari direktori 'css' -->
   <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <h2>Perpustakaan Jaya</h2>
        <hr>
        <ul>
            <li><a href="/">Dashboard</a></li>
            <li><a href="/buku">Buku</a></li>
            <li><a href="/genre">Genre</a></li>
            <li><a href="#">Data Penyewaan</a></li>
        </ul>
    </div>
</body>
</html>
