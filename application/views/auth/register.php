<!-- <div class="wrapper">
  <a href="<?= base_url(); ?>">
    <h2 class="brand-name"><?= $this->Settings_model->general()["app_name"]; ?></h2>
  </a>
  <p class="subtitle">Daftar akun baru sekarang</p>
  <?php echo $this->session->flashdata('failed'); ?>
  <form action="<?= base_url(); ?>register" method="post">
    <div class="form-group">
      <input type="text" placeholder="Nama Lengkap" name="name" class="form-control" autocomplete="off" value="<?php echo set_value('name'); ?>">
      <small class="form-text text-danger pl-1"><?php echo form_error('name'); ?></small>
    </div>
    <div class="form-group">
      <input type="email" placeholder="Alamat Email" name="email" class="form-control" autocomplete="off" value="<?php echo set_value('email'); ?>">
      <small class="form-text text-danger pl-1"><?php echo form_error('email'); ?></small>
    </div>
    <div class="form-group">
      <input type="password" placeholder="Password" name="password" class="form-control" autocomplete="off">
      <small class="form-text text-danger pl-1"><?php echo form_error('password'); ?></small>
    </div>
    <div class="form-group">
      <input type="password" placeholder="Konfirmasi Password" name="password1" class="form-control" autocomplete="off">
      <small class="form-text text-danger pl-1"><?php echo form_error('password1'); ?></small>
    </div>
    <small class="text-muted">Saya telah membaca dan menyetujui <a href="<?= base_url(); ?>terms" target="_blank">Syarat dan Ketentuan</a> serta <a href="<?= base_url(); ?>privacy-policy" target="_blank">Kebijakan Privasi</a> <?= $this->Settings_model->general()["app_name"]; ?></small>
    <button type="submit" class="btn btn-block btn-dark mt-3">Daftar</button>
    <hr>
    <p class="text-lead">Atau sudah punya akun? <a href="<?= base_url(); ?>login">Login</a> sekarang</p>
  </form>
</div>

<?php if ($this->session->flashdata('success')) { ?>
  <div class="modal fade" id="modalRegisterSuccess" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="width: 400px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Registrasi Berhasil</h5>
        </div>
        <div class="modal-body">
          <p class="text-center h1"><i class="fa text-dark fa-envelope-open-text"></i></p>
          <p class="text-muted">Kami telah mengirimkan email verifikasi akun ke email Anda. Silakan cek inbox atau spam.</p>
          <a href="<?= base_url(); ?>login" class="btn btn-block btn-dark">Ke halaman login</a>
        </div>
      </div>
    </div>
  </div>
<?php } ?> -->


<!DOCTYPE html>
<html lang="en-US">

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

<body style="font-family: 'Poppins';">
  <div id="page">
    <div class="wapper-inner row-offcanvas row-offcanvas-left">
      <main class="wrapper main-content">
        <!-- login-register-text -->
        <section class="login-register pt-5">
          <div class="container pt-5">
            <div class="row justify-content-center">
              <div class="col-md-6 col-sm-6">
                <h2 class="title title-contact-v2 text-left"><span>Daftar Akun Baru</span></h2>
                <h5>Hello, welcome to <?= $this->Settings_model->general()["app_name"]; ?></h5>
                <form action="<?= base_url(); ?>register" method="post" class="contact-form margin-top-20">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="input-field">
                        <label class="wc_login_label">Email address <span class="required">*</span></label>
                        <input class="input-text" type="email" name="email" placeholder="Alamat Email" value="<?php echo set_value('email'); ?>" required />
                        <small class="form-text text-danger pl-1"><?php echo form_error('email'); ?></small>
                      </div>
                      <div class="input-field">
                        <label class="wc_login_label">Nama Lengkap <span class="required">*</span></label>
                        <input class="input-text" type="text" name="name" placeholder="Nama" <?php echo set_value('name'); ?> required />
                        <small class="form-text text-danger pl-1"><?php echo form_error('name'); ?></small>
                      </div>
                    </div>

                    <div class="input-field">
                      <label class="wc_login_label">Password <span class="required">*</span></label>
                      <input class="input-text" type="password" name="password" placeholder="Password" required />
                      <small class="form-text text-danger pl-1"><?php echo form_error('password'); ?></small>
                    </div>

                    <div class="input-field">
                      <label class="wc_login_label">Ulangi Password<span class="required">*</span></label>
                      <input class="input-text" type="password" name="password1" placeholder="Ulangi Password" required />
                      <small class="form-text text-danger pl-1"><?php echo form_error('password1'); ?></small>
                    </div>

                    <div class="col-md-4 col-sm-4">

                      <button type="submit" class="btn btn-block btn-dark mt-3">Daftar</button>

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