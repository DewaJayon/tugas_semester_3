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
                <img src="images/banner.jpg" alt="" class="img-responsive">
            </div>
        </div>
        <!-- Navbar End -->

        <div class="row">
            <div class="column-12">
                <h1 align="center">Selamat Datang di UNHI Fashion</h1>
                <p align="center">Toko Online UNHI adalah sebuah toko yang memasarkan produk fashion berupa baju, celana, topi, jam kekinian, yang dapat meningkatkan fashion anda</p>
            </div>
        </div>

        <!-- Daftar produk start -->
        <div class="row daftar-produk" style="background-color: #f6f6f6; border-radius: 2%;">
            <div class="column-3">
                <img src="images/product-1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                <h2 align="center">Tas Kekinian</h2>
                <div class="harga-produk">Rp. 410.000</div>
                <div class="text-center">
                    <a href="https://api.whatsapp.com/send?phone=6282146121643" target="_blank">
                        <img src="images/whatsapp-button.png" width="160">
                    </a>
                </div>
            </div>
            <div class="column-3">
                <img src="images/product-2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                <h2 align="center">Kemeja Batik</h2>
                <div class="harga-produk">Rp. 360.000</div>
                <div class="text-center">
                    <a href="https://api.whatsapp.com/send?phone=6282146121643" target="_blank">
                        <img src="images/whatsapp-button.png" width="160">
                    </a>
                </div>
            </div>
            <div class="column-3">
                <img src="images/product-3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                <h2 align="center">Baju Kasual</h2>
                <div class="harga-produk">Rp. 240.000</div>
                <div class="text-center">
                    <a href="https://api.whatsapp.com/send?phone=6282146121643" target="_blank">
                        <img src="images/whatsapp-button.png" width="160">
                    </a>
                </div>
            </div>
            <div class="column-3">
                <img src="images/product-4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                <h2 align="center">Rok Kasual</h2>
                <div class="harga-produk">Rp. 290.000</div>
                <div class="text-center">
                    <a href="https://api.whatsapp.com/send?phone=6282146121643" target="_blank">
                        <img src="images/whatsapp-button.png" width="160">
                    </a>
                </div>
            </div>
            <div class="column-3">
                <img src="images/product-5.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                <h2 align="center">Dress Cantik</h2>
                <div class="harga-produk">Rp. 540.000</div>
                <div class="text-center">
                    <a href="https://api.whatsapp.com/send?phone=6282146121643" target="_blank">
                        <img src="images/whatsapp-button.png" width="160">
                    </a>
                </div>
            </div>
            <div class="column-3">
                <img src="images/product-6.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                <h2 align="center">Tas Modern</h2>
                <div class="harga-produk">Rp. 680.000</div>
                <div class="text-center">
                    <a href="https://api.whatsapp.com/send?phone=6282146121643" target="_blank">
                        <img src="images/whatsapp-button.png" width="160">
                    </a>
                </div>
            </div>
            <div class="column-3">
                <img src="images/product-7.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
                <h2 align="center">Kalung Mood</h2>
                <div class="harga-produk">Rp. 220.000</div>
                <div class="text-center">
                    <a href="https://api.whatsapp.com/send?phone=6282146121643" target="_blank">
                        <img src="images/whatsapp-button.png" width="160">
                    </a>
                </div>
            </div>
            <div class="column-3">
                <img src="images/product-8.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
                <h2 align="center">Full Fashion</h2>
                <div class="harga-produk">Rp. 830.000</div>
                <div class="text-center">
                    <a href="https://api.whatsapp.com/send?phone=6282146121643" target="_blank">
                        <img src="images/whatsapp-button.png" width="160">
                    </a>
                </div>
            </div>
        </div>
        <!-- Daftar produk end -->

        <!--  Modal/Lightbox Start -->
        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">
                <div class="mySlides">
                    <img src="images/product-1.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="images/product-2.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="images/product-3.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="images/product-4.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="images/product-5.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="images/product-6.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="images/product-7.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="images/product-8.jpg" style="width:100%">
                </div>
                <!-- Next/previous controls -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
        <!-- Modal/Lightbox End -->
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
                        <li><a href="">Kontak Kami</a></li>
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