<!-- <div class="wrapper">
    <a href="<?= base_url(); ?>">
        <h2 class="brand-name"><?= $this->Settings_model->general()["app_name"]; ?></h2>
    </a>
    <p class="subtitle">Silakan login ke akun sekarang</p>

    <form action="<?= base_url(); ?>login?redirect=<?= $redirect; ?>" method="post">
        <div class="form-group">
            <input type="email" placeholder="Alamat Email" name="email" class="form-control" autocomplete="off" value="<?php echo set_value('email'); ?>">
            <small class="form-text text-danger pl-1"><?php echo form_error('email'); ?></small>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Password" name="password" class="form-control" autocomplete="off">
            <small class="form-text text-danger pl-1"><?php echo form_error('password'); ?></small>
        </div>
        <div class="custom-control custom-checkbox mr-sm-2">
            <input type="checkbox" name="remember" class="custom-control-input" id="remember">
            <label class="custom-control-label" for="remember">Ingat Saya</label>
        </div>
        <button type="submit" class="btn btn-block btn-dark mt-3 mb-1">Login</button>
        <a href="<?= base_url(); ?>reset-password">Lupa password?</a>
        <hr>
        <p class="text-lead">Atau belum punya akun? <a href="<?= base_url(); ?>register">Daftar</a> sekarang</p>
    </form>
</div> -->

<!DOCTYPE html>
<html lang="en-US">
<?php
$setting = $this->db->get('settings')->row_array();
?>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="Default Description" name="description" />
    <meta content="" name="keywords" />
    <meta content="INDEX,FOLLOW" name="robots" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <title><?= $title ?></title>

    <link rel="shortcut icon" href="<?= base_url();  ?>assets/images/logo/<?= $setting['favicon']; ?>" type="image/x-icon" />
    <!-- fonts -->
    <link href="http://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,400italic,500,500italic,600,600italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,500,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/new/') ?>font/css/pe-icon-7-stroke.css" media="all" type="text/css" rel="stylesheet" />
    <link href="<?= base_url('assets/new/') ?>font/css/font-awesome.min.css" media="all" type="text/css" rel="stylesheet" />
    <!-- style -->
    <link href="<?= base_url('assets/new/') ?>css/wow.css" media="all" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/new/') ?>css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/new/') ?>css/swiper.min.css" />
    <link href="<?= base_url('assets/new/') ?>css/styles.css" media="all" type="text/css" rel="stylesheet" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<!-- <div class="loading-animation-screen">
    <div class="overlay-screen"></div>
    <img src="<?= base_url(); ?>assets/images/icon/loading.gif" alt="loading.." class="img-loading">
</div> -->
<?php
$setting = $this->db->get('settings')->row_array();
$dateNow = date('Y-m-d H:i');
$dateDB = $setting['promo_time'];
$dateDBNew = str_replace("T", " ", $dateDB);
if ($dateNow >= $dateDBNew) {
    $this->db->set('promo', 0);
    $this->db->update('settings');
}
?>

<body style="font-family: 'Poppins';">
    <div id="page">
        <div class="wapper-inner row-offcanvas row-offcanvas-left">
            <?php echo $this->session->flashdata('verification'); ?>
            <main class="wrapper main-content">
                <!-- login-register-text -->
                <section class="login-register pt-5">
                    <div class="container pt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-sm-6">

                                <?php echo $this->session->flashdata('failed'); ?>
                                <h1 class="title title-contact-v2 text-left"><span>Masuk</span></h1>
                                <h4>Hello, welcome to <?= $this->Settings_model->general()["app_name"]; ?></h5>

                                    <form action="<?= base_url(); ?>login?redirect=<?= $redirect; ?>" method="post" class="contact-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-field">
                                                    <label class="wc_login_label">email address <span class="required">*</span></label>
                                                    <input class="input-text" type="email" name="email" placeholder="Alamat Email" value="<?php echo set_value('email'); ?>" required />
                                                    <small class="form-text text-danger pl-1"><?php echo form_error('email'); ?></small>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-field">
                                                    <label class="wc_login_label">Password <span class="required">*</span></label>
                                                    <input class="input-text" type="password" name="password" placeholder="Masukan Password  *" required />
                                                    <small class="form-text text-danger pl-1"><?php echo form_error('password'); ?></small>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <p class="form-group form-row">
                                                    <label for="remember" class="inline pull-left wc_rememberme"> <input name="remember" type="checkbox" id="remember" value="forever" /> Remember me </label>
                                                    <a class="pull-right wc-lost-pass" href="<?= base_url(); ?>reset-password">
                                                        <h5>Lupa Password?</h5>
                                                    </a>
                                                    <br>
                                                    <a class="" href="<?= base_url(); ?>register">
                                                        <h5>Atau Belum punya akun?</h5>
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="col-md-4 col-sm-6">

                                                <button class="btn btn-block btn-dark mt-3 mb-1" type="submit"><span>Login now</span></button>

                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end login-register -->
            </main>
            <!--END PAGE MAINCONTENT -->
        </div>
    </div>
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/new/') ?>js/plugin/plugin.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/nautica.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/plugin/wow.min.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/engo-apps.js"></script>
    <!--END PAGE FOOTER -->
    <script src="<?= base_url('assets/new/') ?>js/revolution.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/plugin/swiper.min.js"></script>
    <!-- <script src="js/plugin/swiper.jquery.min.js"></script> -->
    <script>
        new WOW().init();
    </script>
    <script>
        var swiper = new Swiper('.about-sl', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
        });
        var swiper = new Swiper('.swiper-main', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
        });
        var swiperproduct = new Swiper('.swiper-product', {
            slidesPerView: 3,
            touchRatio: 0.2,
            loop: true,
            centeredSlides: true,
            loopedSlides: 3, //looped slides should be the same
            slideToClickedSlide: true,
            //        autoplay: 3000
            //        autoplayDisableOnInteraction: false
        });

        var tesimonial = new Swiper('.testimonial-content-gallery', {
            loop: true,
            centeredSlides: true,
            loopedSlides: 5, //looped slides should be the same
        });
        var tesimonialThumbs = new Swiper('.testimonial-thumbs', {
            slidesPerView: 5,
            touchRatio: 0.2,
            loop: true,
            centeredSlides: true,
            loopedSlides: 5, //looped slides should be the same
            slideToClickedSlide: true,
        });
        tesimonial.params.control = tesimonialThumbs;
        tesimonialThumbs.params.control = tesimonial;
    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.20&sensor=false"></script>
    <script src="<?= base_url('assets/new/') ?>js/map/map.js"></script>
</body>

</html>