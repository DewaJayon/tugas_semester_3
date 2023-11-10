<!-- Container Start -->
<div class="container">
    <img src="<?= base_url(); ?>images/banner.jpg" alt="" class="img-responsive">


    <!-- Banner Start -->
    <div class="row">
        <div class="column-12">
            <h1 align="center">Selamat Datang di UNHI Fashion</h1>
            <p align="center">Tokok Online UNHI adalah sebuah toko yang memasarkan produk fashion berupa
                baju, celana, topi, gelang, jam kekinian yang dapat meningkatkan fashion Anda.
            </p>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Daftar produk start -->
    <div class="row daftar-produk" style="background-color: #f6f6f6; border-radius: 2%;">
        <?php foreach ($product_list as $key => $row) : ?>
            <div class="column-3">
                <img src="<?= base_url(); ?>images/<?= $row['product_image']; ?>" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                <h2 align="center"><?= $row['product_name']; ?></h2>
                <div class="harga-produk">Rp. <?= $row['product_price']; ?></div>
                <p class="text-center"><?= $row['product_description']; ?></p>
                <div class="text-center">
                    <a href="https://api.whatsapp.com/send?phone=6282146121643" target="_blank">
                        <img src="<?= base_url(); ?>images/whatsapp-button.png" width="160">
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- Daftar produk end -->

    <!--  Modal/Lightbox Start -->
    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <div class="mySlides">
                <img src="images/product-1.jpg" style="width:100%">
            </div>
            <!-- Next/previous controls -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
    <!-- Modal/Lightbox End -->
</div>
<!-- Container End -->