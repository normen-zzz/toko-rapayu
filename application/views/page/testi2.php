<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Detail - Nautica</title>
    <link rel="icon" type="images/favicon" href="images/favicon.png" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="Default Description" name="description" />
    <meta content="" name="keywords" />
    <meta content="INDEX,FOLLOW" name="robots" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <!-- fonts -->
    <link href="http://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,400italic,500,500italic,600,600italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,500,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/new/') ?>font/css/pe-icon-7-stroke.css" media="all" type="text/css" rel="stylesheet" />
    <link href="<?= base_url('assets/new/') ?>font/css/font-awesome.min.css" media="all" type="text/css" rel="stylesheet" />
    <!-- style -->
    <link rel="stylesheet" href="<?= base_url('assets/new/') ?>js/owl2/assets/owl.carousel.css" />
    <link href="<?= base_url('assets/new/') ?>css/styles.css" media="all" type="text/css" rel="stylesheet" />
    <link href="<?= base_url('assets/new/') ?>css/prettyPhoto.css" media="all" type="text/css" rel="stylesheet" />
    <link href="<?= base_url('assets/new/') ?>css/swiper.min.css" media="all" type="text/css" rel="stylesheet" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body class="collection-template bg-light">
    <div id="page">
        <div class="wapper-inner row-offcanvas row-offcanvas-left">
            <div class="page-wrapper page left-sidebar">
                <header class="header-v6">
                    <?php
                    $menu = $this->db->get('menu');
                    $settingss = $this->db->get('settings')->row_array();
                    ?>
                    <!-- topbar -->
                    <div class="topbar">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!--  -->
                                    <div class="hidden-lg hidden-md engo-mainmenu offcanvas-fixed">
                                        <div class="btn-toggle-menu btn-nav" data-toggle="offcanvas">
                                            <div class="one"></div>
                                            <div class="two"></div>
                                            <div class="three"></div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <!-- .logo -->
                                    <div class="logo text-center">
                                        <a class="logo" title="Magento Commerce" href="<?= base_url() ?>">
                                            <h1 class="display-1 text-white" style="font-family: 'Lora'">
                                                <?= $this->Settings_model->general()["app_name"]; ?>
                                            </h1>
                                        </a>
                                    </div>
                                    <!-- end .logo -->
                                </div>
                                <!-- right topbar -->
                                <div class="col-sm-6">
                                    <div class="right-topbar">
                                        <!-- .shop-cart -->
                                        <div class="mini-cart white">
                                            <div class="cart-control cart-icon">
                                                <img src="images/cart-icon.png" alt="" />
                                            </div>
                                            <div class="cart-label">
                                                Bag
                                                <i>(3)</i>
                                            </div>
                                            <!-- .cart-control -->

                                            <div class="mini-cart-content">
                                                <div class="fix-hover"></div>
                                                <ul class="cart_list">
                                                    <li class="row item clearfix">
                                                        <div class="col-4">
                                                            <a href="#" class="image pull-left">
                                                                <img src="images/product/tab-product/popula1.jpg" alt="neon_legging_legx_2 img-fluid" />
                                                            </a>
                                                        </div>
                                                        <div class="col-8 cart-main-content media-body">
                                                            <h3 class="name">
                                                                <a href="#"> Legging Cathedral </a>
                                                            </h3>
                                                            <div class="cart-item">
                                                                <div class="price">
                                                                    <span class="amount">$35.00</span>
                                                                    <del>$75.00</del>
                                                                </div>
                                                                <span class="qty"> QTY: 01 </span>
                                                            </div>
                                                            <a href="#" class="remove" title="Remove this item"><i class="fa fa-times-circle"></i></a>
                                                        </div>
                                                    </li>
                                                    <li class="row item clearfix">
                                                        <div class="col-4">
                                                            <a href="#" class="image pull-left">
                                                                <img src="images/product/tab-product/popular2.jpg" alt="neon_legging_legx_2 img-fluid" />
                                                            </a>
                                                        </div>
                                                        <div class="col-8 cart-main-content media-body">
                                                            <h3 class="name">
                                                                <a href="#"> Legging Cathedral </a>
                                                            </h3>
                                                            <div class="cart-item">
                                                                <div class="price">
                                                                    <span class="amount">$35.00</span>
                                                                    <del>$75.00</del>
                                                                </div>
                                                                <span class="qty"> QTY: 01 </span>
                                                            </div>
                                                            <a href="#" class="remove" title="Remove this item"><i class="fa fa-times-circle"></i></a>
                                                        </div>
                                                    </li>
                                                    <li class="row item clearfix">
                                                        <div class="col-4">
                                                            <a href="#" class="image pull-left">
                                                                <img src="images/product/tab-product/popular3.jpg" alt="neon_legging_legx_2 img-fluid" />
                                                            </a>
                                                        </div>
                                                        <div class="col-8 cart-main-content media-body">
                                                            <h3 class="name">
                                                                <a href="#"> Legging Cathedral </a>
                                                            </h3>
                                                            <div class="cart-item">
                                                                <div class="price">
                                                                    <span class="amount">$35.00</span>
                                                                    <del>$75.00</del>
                                                                </div>
                                                                <span class="qty"> QTY: 01 </span>
                                                            </div>
                                                            <a href="#" class="remove" title="Remove this item"><i class="fa fa-times-circle"></i></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- end product list -->
                                                <div class="total-minicart">
                                                    <p class="total">
                                                        <strong>Subtotal:</strong>
                                                        <span class="amount">$105.00</span>
                                                    </p>
                                                    <p class="buttons clearfix">
                                                        <a href="#" class="btn pull-left btn-minicart">View Cart</a>
                                                        <a href="#" class="btn btn-primary pull-right checkout btn-minicart">Checkout</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- .shop-item -->
                                        </div>
                                        <!-- .shop-cart -->
                                        <!-- ul.toplinks -->
                                        <ul class="toplinks">
                                            <li class="toplink dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    (Nama User)
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <li>
                                                        <a class="dropdown-item text-dark" href="#">Profile</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item text-dark" href="./track-oder.html">Cek Status Pemesanan</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="toplink nav-item">
                                                <a class="nav-link" href="#">Link</a>
                                            </li>
                                        </ul>
                                        <!-- end right topbar -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end  topbar -->
                    <!-- header main -->
                    <div class="header-main row">
                        <div class="container">
                            <div class="container clearfix">
                                <!-- nav -->
                                <div id="main-menu" class="main-menu clearfix">
                                    <ul class="main-nav clearfix">
                                        <li><a href="#" title="">Anak - Anak</a></li>
                                        <li>
                                            <a href="#" title="">Perempuan</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Kudamas Batik</a></li>
                                                <li><a href="#">Kudamas Couture</a></li>
                                                <li><a href="#">Kencana Ungu</a></li>
                                                <li><a href="#">Amro</a></li>
                                                <li><a href="#">Kemala Homewear</a></li>
                                                <li><a href="#">Gamis Daily</a></li>
                                                <li><a href="#">Gamis Syar'i</a></li>
                                                <li><a href="#">Marissa</a></li>
                                                <li><a href="#">Daster Soloan</a></li>
                                                <li><a href="#">Tunik dan Atasan</a></li>
                                                <li><a href="#">Mukena</a></li>
                                                <li><a href="#">Kesehatan</a></li>
                                                <li><a href="#">Sprei, Bantal, Guling</a></li>
                                                <li><a href="#">Hijab</a></li>
                                                <li><a href="#">Hawa</a></li>
                                                <li><a href="#">Scarlet</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" title="">Masker</a></li>
                                        <li><a href="#" title="">Blog</a></li>
                                        <li><a href="#" title="">Contact us</a></li>
                                    </ul>
                                </div>
                                <!-- end nav -->

                                <form class="form-search" action="#">
                                    <input class="input-search" placeholder="Search" type="text" />
                                    <div class="btn-search">
                                        <input class="btn-search1" type="submit" value="Search" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end header main -->
                </header>

                <!-- Profile -->
                <section class="py-5">
                    <div class="container py-5">
                        <div class="row">
                            <div class="col bg-danger py-3 rounded-3">
                                <h3 class="h3-title text-white px-4">Testimoni</h3>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <di class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="h3-title card-title">Dimas - Tangsel</h3>
                                        <h5 class="card-text fw-light text-secondary pt-3">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Facilis, tempore? Voluptas cupiditate molestiae minus
                                            itaque doloribus praesentium quam, impedit amet sed,
                                            asperiores corrupti distinctio labore saepe ut
                                            voluptatem. Nostrum, quasi!
                                        </h5>
                                    </div>
                                </div>
                            </di py-3v>
                            <div class="col-lg-4">
                                <div class="card py-3">
                                    <div class="card-body">
                                        <h3 class="h3-title card-title">Dimas - Tangsel</h3>
                                        <h5 class="card-text fw-light text-secondary pt-3">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Facilis, tempore? Voluptas cupiditate molestiae minus
                                            itaque doloribus praesentium quam, impedit amet sed,
                                            asperiores corrupti distinctio labore saepe ut
                                            voluptatem. Nostrum, quasi!
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card py-3">
                                    <div class="card-body">
                                        <h3 class="h3-title card-title">Dimas - Tangsel</h3>
                                        <h5 class="card-text fw-light text-secondary pt-3">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Facilis, tempore? Voluptas cupiditate molestiae minus
                                            itaque doloribus praesentium quam, impedit amet sed,
                                            asperiores corrupti distinctio labore saepe ut
                                            voluptatem. Nostrum, quasi!
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card py-3">
                                    <div class="card-body">
                                        <h3 class="h3-title card-title">Dimas - Tangsel</h3>
                                        <h5 class="card-text fw-light text-secondary pt-3">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Facilis, tempore? Voluptas cupiditate molestiae minus
                                            itaque doloribus praesentium quam, impedit amet sed,
                                            asperiores corrupti distinctio labore saepe ut
                                            voluptatem. Nostrum, quasi!
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Profile Akhir -->

                <!-- PAGE FOOTER -->
                <footer class="site-footer footer-v3">
                    <!-- footer content -->
                    <div class="footer">
                        <div class="head-footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="new-letter-title">SIGN UP AND GET 20% OFF</h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="Subcribe">
                                            <form action="#">
                                                <input type="email" class="email" placeholder="Enter your email" />
                                                <input type="submit" value="Subscribe" class="submit" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Main-footer-->
                        <div class="main-footer">
                            <div class="footer-widget">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="contact">
                                                <div class="logo">
                                                    <h1 class="display-1 fw-bolder text-white" style="font-family: 'Lora'">
                                                        IFANI SHOP
                                                    </h1>
                                                </div>
                                                <div class="f-content-widget">
                                                    <div class="text-widget">
                                                        <p class="address">
                                                            <strong>[ Address ]</strong> 121 King Street,
                                                            Melboure, victoria 3000 Australia.
                                                        </p>
                                                        <p class="hotline">
                                                            <strong>[ Hotline ]</strong> 070-7782-9137 -
                                                            <strong>[ Fax ]</strong> 070-7782-9137 -
                                                            <strong>[ Email ]</strong> contact@mautica.com
                                                        </p>
                                                    </div>
                                                    <div class="social">
                                                        <ul>
                                                            <li>
                                                                <a href="#">twitter<i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#">pinterrest<i class="fa fa-pinterest"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#">facebook<i class="fa fa-facebook-square"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#">behance<i class="fa fa-behance"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#">dribbble<i class="fa fa-dribbble"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="policy">
                                                <h3 class="title-widget">
                                                    <a href="#">Policy & Provision</a>
                                                </h3>
                                                <ul>
                                                    <li><a href="#">Payment Method</a></li>
                                                    <li><a href="#">Delivery</a></li>
                                                    <li><a href="#">Warranty Policy</a></li>
                                                    <li><a href="#">Returns and Refunds</a></li>
                                                    <li><a href="#">Information Security</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="services">
                                                <h3 class="title-widget">
                                                    <a href="#">Customer Services</a>
                                                </h3>
                                                <ul>
                                                    <li><a href="#">My Account</a></li>
                                                    <li><a href="#">FAQ</a></li>
                                                    <li><a href="#">Store System</a></li>
                                                    <li><a href="#">Tracking</a></li>
                                                    <li><a href="#">Contact US</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Main-footer-->
                        <div class="bottom-footer">
                            <div class="container">
                                <ul class="payment">
                                    <li class="item">
                                        <img src="images/pay1.png" alt="" />
                                    </li>
                                    <li class="item">
                                        <img src="images/pay2.png" alt="" />
                                    </li>
                                    <li class="item">
                                        <img src="images/pay3.png" alt="" />
                                    </li>
                                    <li class="item">
                                        <img src="images/pay4.png" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end footer content -->
                </footer>
                <!--END PAGE FOOTER -->
            </div>
            <!--menu off canvas  -->
            <div id="engo-off-canvas" class="engo-off-canvas sidebar-offcanvas hidden-lg hidden-md">
                <div class="engo-off-canvas-body">
                    <div class="offcanvas-head bg-dark">
                        <span>Menu</span>
                    </div>
                    <nav class="navbar navbar-offcanvas navbar-static" data-role="navigation">
                        <div class="navbar-collapse navbar-offcanvas-collapse toggle-dropdown-menu">
                            <ul id="main-menu-offcanvas" class="nav navbar-nav text-dark">
                                <?php foreach ($menu->result_array() as $m) { ?>
                                    <?php
                                    if (substr($m['link'], 0, 4) == "http" || substr($m['link'], 0, 3) == "www") {
                                        $newlink1 = $m['link'];
                                    } else {
                                        $newlink1 = base_url() . $m['link'];
                                    }
                                    ?>
                                    <?php if ($this->Settings_model->getSubMenu($m['id'])->num_rows() > 0) { ?>
                                        <li id="menu-item-89" class="lever0 item-toggle-dropdown has-sub">
                                            <a class="text-dark" href="#"><?= $m['title'] ?></a>
                                            <div class="item-toggle-menu">
                                                <div class="widget-menu">
                                                    <ul>
                                                        <?php foreach ($this->Settings_model->getSubMenu($m['id'])->result_array() as $cat) { ?>
                                                            <?php
                                                            if (substr($cat['link'], 0, 4) == "http" || substr($cat['link'], 0, 3) == "www") {
                                                                $newlink = $cat['link'];
                                                            } else {
                                                                $newlink = base_url() . $cat['link'];
                                                            }
                                                            ?>

                                                            <li><a class="text-dark" href="<?= $newlink; ?>"><?= $cat['name']; ?></a></li>

                                                        <?php } ?>

                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                        <li id="menu-item-90"><a class="text-dark" href="<?= $newlink1 ?>"><?= $m['title'] ?></a></li>
                                        </li>
                                    <?php } ?>

                                <?php } ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div id="back-top" class="back-top">
                <i class="fa fa-long-arrow-up"></i>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/new/') ?>js/plugin/plugin.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/plugin/wow.min.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/nautica.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/engo-apps.js"></script>
</body>

</html>