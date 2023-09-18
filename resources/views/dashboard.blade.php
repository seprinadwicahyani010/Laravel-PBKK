<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brown - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* CSS styles for the body and header */
        body {
            font-family: Arial, sans-serif;
            background-color: #e3d5ca;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #6c584c;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            font-size: 36px;
            margin: 0;
        }

        /* CSS styles for the navigation menu */
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
        }

        nav ul li a:hover {
            color:black;
        }

        /* CSS styles for the main content */
        main {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #e3d5ca;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* CSS styles for the "Promo" section */
        .promo {
            background-color: #6c584c;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .promo h2 {
            font-size: 24px;
        }

        .promo p {
            font-size: 18px;
        }

        .btn-promo {
            display: inline-block;
            background-color: #e3d5ca;
            color: black;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        /* CSS styles for the "Produk Unggulan" section */
        .produk-unggulan {
            margin-top: 20px;
        }

        .produk {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .produk-item {
            width: 30%;
            margin-bottom: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            padding: 10px;
        }

        .produk-item img {
            max-width: 100%;
        }

        /* CSS styles for the footer */
        footer{
            text-align: center;
        }

    </style>
</head>
<body>
    <header>
        <!-- Header content, including site title and navigation menu -->
        <h1>Selamat Datang di Brown</h1>
        <br>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="promo">
            <!-- Promo section content -->
            <h2>Promo Spesial</h2>
            <p>Dapatkan diskon 20% untuk semua produk kami!</p>
            <a href="#" class="btn-promo">Lihat Promo</a>
        </section>

        <section class="produk-unggulan">
            <!-- Produk Unggulan section content -->
            <h2>Produk Unggulan</h2>
            <div class="produk">
                <div class="produk-item">
                    <img src="produk1.jpg" alt="Produk 1">
                    <h3>Produk 1</h3>
                    <p>Deskripsi produk 1.</p>
                    <a href="#">Beli Sekarang</a>
                </div>

                <div class="produk-item">
                    <img src="produk2.jpg" alt="Produk 2">
                    <h3>Produk 2</h3>
                    <p>Deskripsi produk 2.</p>
                    <a href="#">Beli Sekarang</a>
                </div>

                <div class="produk-item">
                    <img src="produk3.jpg" alt="Produk 3">
                    <h3>Produk 3</h3>
                    <p>Deskripsi produk 3.</p>
                    <a href="#">Beli Sekarang</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <!-- Footer content -->
        <p>&copy; 2023 Brown. Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
