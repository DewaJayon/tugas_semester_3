<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNHI Fashion - Toko Online Fashion di Bali</title>

    <!-- Css -->
    <link rel="stylesheet" href="<?= base_url() ?>style.css">
    <link rel="stylesheet" href="<?= base_url() ?>plugins/fancybox/jquery.fancybox.css">

</head>

<body>
    <!-- Container Start -->
    <div class="container">
        <!-- Navbar Start -->
        <div class="row">
            <div class="column-12">
                <ul class="daftar-menu">
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li><a href="<?= base_url() ?>daftar_produk">Daftar Produk</a></li>
                    <li><a href="<?= base_url() ?>tentang_kami">Tentang Kami</a></li>
                    <li><a href="<?= base_url() ?>kontak_kami">Kontak Kami</a></li>
                </ul>
            </div>
        </div>
        <!-- Navbar End -->

        <div class="row">
            <div class="column-12">
                <h1 align="center">Kontak Kami</h1>
                <p align="center">Silahkan mengisi form dibawah untuk Kontak Kami</p>
            </div>
        </div>

        <div class="row daftar-produk">
            <form action="process/login.php" method="post">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label>Judul Pesan</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                    <label>Isi Pesan</label>
                    <textarea class="form-control" name="email" rows="4" cols="4" required></textarea>
                </div>
                <div class="form-group">
                    <nutton type="submit" class="btn btn-success">Kirim Pesan</button>
                </div>
            </form>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="column-12">
                    <h2 align="center">UNHI Fashion</h2>
                    <ul class="footer-menu">
                        <li><a href="">Beranda</a></li>
                        <li><a href="">Daftar Produk</a></li>
                        <li><a href="">Tentang Kami</a></li>
                        <li><a href="kontak-kami.php">Kontak Kami</a></li>
                    </ul>
                    <div class="text-center">
                        Alamat: Tembau, Jl. Sangalangit, Penatih, Kec. Denpasar Tim., Kota Denpasar, Bali 80238
                    </div>
                    <div class="text-center">
                        Telepon: (0361) 464700
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-credit">
        <div class="container">
            <div class="row">
                <div class="column-12 text-center">
                    Created by <a href="https://mahendra.com" target="_blank">www.mahendrawardana.com</a> for Web Programming Course
                </div>
            </div>
        </div>
    </div>


    <!-- JS -->
    <script src="<?= base_url() ?>js/lightbox.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>plugins/fancybox/jquery.fancybox.js"></script>

</body>

</html>