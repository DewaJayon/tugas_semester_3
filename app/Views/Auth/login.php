<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - UNHI Fashion</title>

    <!-- Css -->
    <link rel="stylesheet" href="<?= base_url(); ?>style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/fancybox/jquery.fancybox.css">
</head>
<!-- Container Start -->
<div class="container">

    <div class="row">
        <div class="column-12">
            <h1 align="center">Halaman Login UNHI Fashion</h1>
            <hr />
        </div>
    </div>
    <div class="column-6">
        <img src="<?= base_url(); ?>images/login.png" alt="" class="img-responsive">
    </div>
    <div class="column-6">
        <br />
        <br />
        <br />
        <h3>Isi form dibawah untuk Login:</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" s>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Login</button>
            </div>
        </form>
    </div>

    <div class="row"></div>
    <!-- Container End -->
</div>


<!-- Footer Start -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="column-12">
                <h2 align="center">UNHI Fashion</h2>
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
                Created by <a href="https://mahendrawardana.com" target="_blank">www.mahendrawardana.com</a> for Web Programming Course
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- JS -->
<script src="<?= base_url(); ?>js/lightbox.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="<?= base_url(); ?>plugins/fancybox/jquery.fancybox.js"></script>
</body>

</html>