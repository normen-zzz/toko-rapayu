<!DOCTYPE html>
<html lang="en-US">

<head>
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="<?= base_url();  ?>assets/images/logo/<?= $setting['favicon']; ?>" type="image/x-icon" />
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
    <!-- js -->
    <script src="<?= base_url('assets/new/') ?>js/plugin/plugin.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/owl.carousel-2.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/swiper.min.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/jquery.zoom.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/nautica.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/engo-apps.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/a11988f544.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <?php if ($this->session->userdata('login')) { ?>
        <?php
        $user = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
        $cart = $this->db->get_where('cart', ['user' => $this->session->userdata('id')]);
        $order = $this->db->get_where('invoice', ['user' => $this->session->userdata('id'), 'status !=' => 4]);
        ?>
    <?php } ?>
    <div id="page">
        <div class="wrapper-inner row-offcanvas row-offcanvas-left">
            <div class="page-wrapper page">
                <!-- Header -->
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
                                        <a class="logo" title="Magento Commerce" href="#">
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
                                                <img src="<?= base_url('assets/new/') ?>images/cart-icon.png" alt="" />
                                            </div>
                                            <div class="cart-label">
                                                Bag
                                                <i>(<?= $cart->num_rows(); ?>)</i>
                                            </div>
                                            <!-- .cart-control -->

                                            <div class="mini-cart-content">
                                                <div class="fix-hover"></div>
                                                <ul class="cart_list">
                                                    <?php foreach ($cart->result_array() as $item) { ?>
                                                        <li class="row item clearfix">
                                                            <div class="col-4">
                                                                <a href="<?= base_url('p/' . $item['slug']) ?>" class="image pull-left">
                                                                    <img src="<?= base_url('assets/images/product/') . $item['img'] ?>" alt="neon_legging_legx_2 img-fluid" />
                                                                </a>
                                                            </div>
                                                            <div class="col-8 cart-main-content media-body">
                                                                <h3 class="name">
                                                                    <a href="<?= base_url('p/') . $item['slug'] ?>"> <?= $item['product_name'] ?> </a>
                                                                </h3>
                                                                <div class="cart-item">
                                                                    <div class="price">
                                                                        <span class="amount">Rp. <?= $item['price'] ?></span>
                                                                        <del>Rp. <?= $item['price'] ?></del>
                                                                    </div>
                                                                    <span class="qty"> QTY: <?= $item['qty'] ?> </span>
                                                                    <br>
                                                                    <?php $cartVariant = $this->db->get_where('variant', array('id' => $item['id_variant']))->row_array() ?>
                                                                    <span class="qty"> Variant: <?= $cartVariant['name'] ?> </span>
                                                                </div>
                                                                <a href="<?= base_url('Cart/delete/' . $item['id']) ?>" class="remove" title="Remove this item"><i class="fa fa-times-circle"></i></a>
                                                            </div>
                                                        </li>
                                                    <?php } ?>

                                                </ul>
                                                <!-- end product list -->
                                                <div class="total-minicart">
                                                    <p class="total"><strong>Subtotal:</strong> <span class="amount"><?= $totalall; ?></span></p>
                                                    <p class="buttons clearfix">
                                                        <a href="<?= base_url(); ?>cart" class="btn btn-primary pull-right checkout btn-minicart">Checkout</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- .shop-item -->
                                        </div>
                                        <!-- .shop-cart -->
                                        <!-- ul.toplinks -->
                                        <?php if (!$this->session->userdata('login')) { ?>
                                            <ul class="toplinks">
                                                <li class="toplink">
                                                    <a href="<?= base_url('login') ?>">Login</a>
                                                </li>
                                                <li class="toplink"><a href="<?= base_url('register') ?>">Daftar</a></li>
                                            </ul>
                                        <?php } else { ?>
                                            <!-- end right topbar -->
                                            <ul class="toplinks">
                                                <li class="toplink dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        (<?= $user['name'] ?>)
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li>
                                                            <a class="dropdown-item text-dark" href="<?= base_url('profile') ?>">Profile</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item text-dark" href="<?= base_url('profile/transaction') ?>">Cek Status Pemesanan</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="toplink nav-item">
                                                    <a class="nav-link" href="<?= base_url('logout') ?>">Logout</a>
                                                </li>
                                            </ul>
                                        <?php } ?>
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
                                        <?php foreach ($menu->result_array() as $m) { ?>
                                            <?php
                                            if (substr($m['link'], 0, 4) == "http" || substr($m['link'], 0, 3) == "www") {
                                                $newlink1 = $m['link'];
                                            } else {
                                                $newlink1 = base_url() . $m['link'];
                                            }
                                            ?>
                                            <?php if ($this->Settings_model->getSubMenu($m['id'])->num_rows() > 0) { ?>
                                                <li>
                                                    <a href="#" title=""><?= $m['title'] ?></a>
                                                    <ul class="sub-menu">
                                                        <?php foreach ($this->Settings_model->getSubMenu($m['id'])->result_array() as $cat) { ?>
                                                            <?php
                                                            if (substr($cat['link'], 0, 4) == "http" || substr($cat['link'], 0, 3) == "www") {
                                                                $newlink = $cat['link'];
                                                            } else {
                                                                $newlink = base_url() . $cat['link'];
                                                            }
                                                            ?>
                                                            <li>
                                                                <a href="<?= $newlink; ?>"><?= $cat['name']; ?></a>
                                                            </li>
                                                        <?php } ?>

                                                    </ul>
                                                </li>
                                            <?php } else { ?>
                                                <li>
                                                    <a href="<?= $newlink1 ?>" title=""><?= $m['title'] ?></a>
                                                </li>
                                            <?php } ?>

                                        <?php } ?>
                                    </ul>
                                </div>
                                <!-- end nav -->

                                <form class="form-search" method="get" action="<?= base_url(); ?>search">
                                    <input class="input-search" placeholder="Search" type="text" name="q" />
                                    <div class="btn-search">
                                        <button class="btn-search1" type="submit" value="Search">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end header main -->
                </header>
                <!-- end header  -->
                <!-- Main -->
                <main class="wrapper main-content detail">
                    <!-- breadcrumb -->
                    <div class="bg-white">
                        <div class="container">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-transparent p-0 m-0 py-5">
                                    <li class="breadcrumb-item h3">
                                        <a href="<?= base_url() ?>" class="text-danger">Home</a>
                                    </li>
                                    <li class="breadcrumb-item h3">
                                        <a href="<?= base_url('products') ?>" class="text-danger">Produk</a>
                                    </li>
                                    <li class="breadcrumb-item h3 text-dark active" aria-current="page">
                                        <?= $product['title']; ?>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- End breadcrumbs -->
                    <!-- product single -->
                    <div class="product-single pt-5">
                        <?php $setting = $this->db->get('settings')->row_array(); ?>
                        <div class="container">
                            <div class="row bg-white shadow-sm p-3">
                                <div class="col-sm-5">
                                    <!-- Swiper -->
                                    <div class="swiper mySwiper2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="<?= base_url(); ?>assets/images/product/<?= $product['img']; ?>" />
                                            </div>
                                            <?php foreach ($img->result_array() as $d) : ?>
                                                <div class="swiper-slide">
                                                    <img src="<?= base_url(); ?>assets/images/product/<?= $d['img']; ?>" />
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                    <div thumbsSlider="" class="swiper mySwiper pt-3">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="<?= base_url(); ?>assets/images/product/<?= $product['img']; ?>" />
                                            </div>
                                            <?php foreach ($img->result_array() as $d) : ?>
                                                <div class="swiper-slide">
                                                    <img src="<?= base_url(); ?>assets/images/product/<?= $d['img']; ?>" />
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-7 margin-top-254">
                                    <!-- product-shop -->
                                    <div class="product-shop">
                                        <h1 class="product-name"><?= $product['title']; ?></h1>
                                        <div class="price-box product-single-prices">
                                            <?php if ($setting['promo'] == 1) { ?>
                                                <?php if ($product['promo_price'] == 0) { ?>
                                                    <span class="price"> Rp <?= str_replace(",", ".", number_format($product['price'])); ?></span>
                                                <?php } else { ?>
                                                    <span class="price"> Rp <?= str_replace(",", ".", number_format($product['promo_price'])); ?></span>
                                                    <span class="old-price"> Rp <?= str_replace(",", ".", number_format($product['price'])); ?> </span>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <span class="price"> Rp <?= str_replace(",", ".", number_format($product['price'])); ?></span>
                                            <?php } ?>
                                        </div>
                                        <!-- <div class="product-description des">
                                            <p>
                                                
                                            </p>
                                        </div> -->
                                        <!-- form add to cart -->
                                        <?php $variant = $this->db->get_where('variant', array('id_product' => $product['productId']))->result_array(); ?>
                                        <div class="product-signle-options clearfix">
                                            <div class="selector-wrapper color">
                                                <label>variant :</label>
                                                <select class="single-option-selector" name="variant" id="variantProduct">
                                                    <option>- select option -</option>
                                                    <?php foreach ($variant as $variant) { ?>
                                                        <option value="<?= $variant['id'] ?>"><?= $variant['name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="selector-wrapper size">
                                                <label>QTY :</label>
                                                <div class="quantity">
                                                    <input step="1" min="0" value="1" id="qtyProduct" title="Qty" class="qty" size="4" type="number" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-single-action">
                                            <div class="action add-to-cart">
                                                <button class="bg-transparent border-0" onclick="addCart()"> Add to cart </button>
                                            </div>

                                        </div>
                                        <!-- End form -->
                                        <!-- Share this -->
                                        <!-- <div class="sharing-box">
                                            <h4>Share this :</h4>
                                            <div class="social-sharing clearfix normal">
                                                <a class="share-twitter" href="/#" target="_blank">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="share-pinterest" href="/#" target="_blank">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                                <a class="share-facebook" href="#" target="_blank">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="share-behance" href="/#" target="_blank">
                                                    <i class="fa fa-behance"></i>
                                                </a>
                                                <a class="share-dribbble" href="/#" target="_blank">
                                                    <i class="fa fa-dribbble"></i>
                                                </a>
                                            </div>
                                        </div> -->
                                        <!-- <div class="sharing-box">
                                            <h4>Tersedia juga di :</h4>
                                            <div class="social-sharing clearfix normal">
                                                <a class="h4 border-end border-2 pe-3" href="/#" target="_blank">
                                                    Shopee
                                                </a>
                                                <a class="h4 ps-3" href="/#" target="_blank">
                                                    Tokopedia
                                                </a>
                                            </div>
                                        </div> -->
                                        <!-- End share this -->
                                    </div>
                                    <!-- end product-shop -->
                                </div>
                            </div>
                            <!-- tab -->
                            <div class="tabs-container margin-bottom-100">
                                <ul class="tabs clearfix">
                                    <li>
                                        <a class="active" href="#tab-description">Description</a>
                                    </li>

                                </ul>
                                <div style="display: block" id="tab-description" class="tab-content tab-description">
                                    <?= nl2br($product['description']); ?>

                                </div>

                            </div>
                            <!-- end tab -->
                            <!-- carousel product -->
                            <section class="engo-box">
                                <div class="carousel-product upsell-product">
                                    <div class="container">
                                        <div class="box-title">
                                            <h3 class="h3-title">Produk Serupa</h3>
                                            <div class="title-icon">
                                                <img src="<?= base_url('assets/new/') ?>images/title-icon.png" alt="" />
                                            </div>
                                        </div>
                                        <!-- tab content -->
                                        <div class="box-content">
                                            <div class="product-grid owl-carousel-play" data-ride="owlcarousel">
                                                <!-- row item -->
                                                <div class="row clearfix owl-carousel" data-slide="4" data-pagination="false" data-navigation="false" data-desktop="4" data-desktopsmall="4" data-tablet="1" data-tabletsmall="1" data-mobile="1">
                                                    <!-- product -->
                                                    <?php foreach ($sejenis->result_array() as $sejenis) { ?>
                                                        <div class="item wow fadeInUp" data-wow-duration="1s" data-wow-delay="100ms">
                                                            <div class="product-item">
                                                                <a href="<?= base_url('p/' . $sejenis['slug']) ?>">
                                                                    <img class="img-h" src="<?= base_url('assets/images/product/' . $sejenis['img']) ?>" alt="" />
                                                                </a>
                                                                <div class="product-info">

                                                                    <div class="product-name">
                                                                        <a href="<?= base_url('p/' . $sejenis['slug']) ?>" class="product-item-link">
                                                                            <?= $sejenis['title'] ?>
                                                                        </a>
                                                                    </div>
                                                                    <div class="price-box price-final_price">
                                                                        <?php if ($setting['promo'] == 1) { ?>
                                                                            <?php if ($sejenis['promo_price'] == 0) { ?>
                                                                                <span class="price">Rp <?= str_replace(",", ".", number_format($sejenis['price'])); ?></span>
                                                                            <?php } else { ?>
                                                                                <span class="price"> <strike>Rp <?= str_replace(",", ".", number_format($sejenis['price'])); ?></strike> </span>
                                                                                <br>
                                                                                <span class="price"> Rp <?= str_replace(",", ".", number_format($sejenis['promo_price'])); ?> </span>
                                                                            <?php } ?>
                                                                        <?php } else { ?>
                                                                            <span class="price">Rp <?= str_replace(",", ".", number_format($sejenis['price'])); ?> </span>
                                                                        <?php } ?>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <!-- end product -->



                                                </div>
                                                <!-- end row item -->
                                            </div>
                                        </div>
                                        <!-- end tab container -->
                                    </div>
                                </div>
                            </section>
                            <!-- End carousel product -->
                        </div>
                    </div>
                    <!-- eng product single -->
                </main>
                <!-- End main -->
                <!-- PAGE FOOTER -->
                <!-- PAGE FOOTER -->
                <footer class="site-footer footer-v3">
                    <?php $setting = $this->db->get('settings')->row_array(); ?>
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
                                            <form action="<?= base_url(); ?>subscribe-email" method="post">
                                                <div class="row">
                                                    <div class="col"><input type="email" class="email" placeholder="Enter your email" /></div>
                                                    <div class="col">
                                                        <button type="submit" value="Subscribe" class="btn btn-danger mt-2">Subscribe</button>
                                                    </div>


                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Main-footer-->
                        <?php

                        $categoriesLimit = $this->Categories_model->getCategoriesLimit();
                        $setting = $this->Settings_model->getSetting();
                        $sosmed = $this->Settings_model->getSosmed();
                        $footerhelp = $this->Settings_model->getFooterHelp();
                        $footerinfo = $this->Settings_model->getFooterInfo();
                        $rekening = $this->db->get('rekening'); ?> ?>
                        <div class="main-footer">
                            <div class="footer-widget">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="contact">
                                                <div class="logo">
                                                    <h1 class="display-1 fw-bolder text-white" style="font-family: 'Lora'">IFANI SHOP</h1>
                                                </div>
                                                <div class="f-content-widget">
                                                    <div class="text-widget">
                                                        <p class="address"><strong>[ Alamat ]</strong> <?= $setting['address']; ?>.</p>
                                                        <p class="hotline"><strong>[ Whatsapp ]</strong> <?= $this->Settings_model->general()["whatsapp"]; ?> </p>
                                                    </div>
                                                    <div class="social">
                                                        <ul>
                                                            <?php foreach ($sosmed->result_array() as $s) { ?>
                                                                <li>
                                                                    <a href="<?= $s['link']; ?>"><?= $s['name']; ?><i class="fab fa-<?= $s['icon']; ?>"></i></a>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="policy">
                                                <h3 class="title-widget">
                                                    <a href="#">Kategori</a>
                                                </h3>
                                                <ul>
                                                    <?php foreach ($categories->result_array() as $c) { ?>
                                                        <li><a href="<?= base_url('c/' . $c['slug']) ?>"><?= $c['name'] ?></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="services">
                                                <h3 class="title-widget">
                                                    <a href="#">Bantuan</a>
                                                </h3>
                                                <ul>
                                                    <?php foreach ($footerhelp->result_array() as $f) { ?>
                                                        <li><a href="<?= base_url() . $f['link']; ?>"><?= $f['title'] ?></a></li>
                                                    <?php } ?>
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
                <!--menu off canvas  -->
                <div id="engo-off-canvas" class="engo-off-canvas sidebar-offcanvas hidden-lg hidden-md">
                    <div class="engo-off-canvas-body">
                        <div class="offcanvas-head bg-primary">
                            <span>Menu</span>
                        </div>
                        <nav class="navbar navbar-offcanvas navbar-static" data-role="navigation">
                            <div class="navbar-collapse navbar-offcanvas-collapse toggle-dropdown-menu">
                                <ul id="main-menu-offcanvas" class="nav navbar-nav">
                                    <li id="menu-item-90"><a href="#">Men</a></li>
                                    <li id="menu-item-91" class="lever0 item-toggle-dropdown has-sub">
                                        <a href="#">Women</a>
                                        <div class="item-toggle-menu">
                                            <div class="widget-menu">
                                                <h3 class="menu-title">MEN’S WEAR</h3>
                                                <div class="widget-menu-detail">
                                                    <ul>
                                                        <li><a href="shop.html">Shirts &amp; Tops</a></li>
                                                        <li><a href="shop.html">Dresses</a></li>
                                                        <li><a href="shop.html">Swimwear</a></li>
                                                        <li><a href="shop.html">Suite</a></li>
                                                        <li><a href="shop.html">Jeans</a></li>
                                                        <li><a href="shop.html">Shoes</a></li>
                                                        <li><a href="shop.html">Sweaters</a></li>
                                                        <li><a href="shop.html">Swimwear</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="widget-menu">
                                                <h3 class="menu-title">WOMEN’S WEAR</h3>
                                                <div class="widget-menu-detail">
                                                    <ul>
                                                        <li><a href="shop.html">Party Dress</a></li>
                                                        <li><a href="shop.html">T - Shirt</a></li>
                                                        <li>
                                                            <a href="shop.html">Jean &amp; Trousers</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop.html">Jacket &amp; Coats</a>
                                                        </li>
                                                        <li><a href="shop.html">Sweaters</a></li>
                                                        <li><a href="shop.html">Blouses</a></li>
                                                        <li>
                                                            <a href="shop.html">Sports &amp; Lifestyle</a>
                                                        </li>
                                                        <li><a href="shop.html">Swimwear</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="widget-menu">
                                                <h3 class="menu-title">ACCESSORIES</h3>
                                                <div class="widget-menu-detail">
                                                    <ul>
                                                        <li><a href="shop.html">Leather</a></li>
                                                        <li><a href="shop.html">Sunglasses</a></li>
                                                        <li><a href="shop.html">Belts</a></li>
                                                        <li><a href="shop.html">Ring</a></li>
                                                        <li><a href="shop.html">Sweaters</a></li>
                                                        <li><a href="shop.html">Sassuawear</a></li>
                                                        <li><a href="shop.html">Bag &amp; Persess</a></li>
                                                        <li><a href="shop.html">Swimwear</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="menu-item-88" class="menu-item-88 level-0">
                                        <a href="#">Kids</a>
                                    </li>
                                    <li id="menu-item-87" class="menu-item-87 level-0">
                                        <a href="#">Shoes</a>
                                    </li>
                                    <li id="menu-item-86" class="menu-item-86 level-0">
                                        <a href="#">Bags</a>
                                    </li>
                                    <li id="menu-item-85" class="lever0 item-toggle-dropdown has-sub">
                                        <a href="#">Pages</a>
                                        <div class="item-toggle-menu">
                                            <div class="widget-menu">
                                                <h3 class="menu-title">Homepages</h3>
                                                <div class="widget-menu-detail">
                                                    <ul>
                                                        <li>
                                                            <a href="index.html">Home page style 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="index2.html">Home page style 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="index3.html">Home page style 3</a>
                                                        </li>
                                                        <li>
                                                            <a href="index4.html">Home page style 4</a>
                                                        </li>
                                                        <li>
                                                            <a href="index5.html">Home page style 5</a>
                                                        </li>
                                                        <li>
                                                            <a href="index6.html">Home page style 6</a>
                                                        </li>
                                                        <li>
                                                            <a href="index7.html">Home page style 7</a>
                                                        </li>
                                                        <li>
                                                            <a href="index8.html">Home page style 8</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="widget-menu">
                                                <h3 class="menu-title">Templates</h3>
                                                <div class="widget-menu-detail">
                                                    <ul>
                                                        <li><a href="404.html"> Page not found</a></li>
                                                        <li><a href="about.html">About </a></li>
                                                        <li><a href="about-v2">About v2 </a></li>
                                                        <li><a href="cart.html"> Cart</a></li>
                                                        <li><a href="faq.html">faq</a></li>
                                                        <li><a href="contact.html">Contact </a></li>
                                                        <li><a href="contact-v2.html">Contact v2 </a></li>
                                                        <li>
                                                            <a href="login-register.html">
                                                                Login & Register</a>
                                                        </li>
                                                        <li>
                                                            <a href="menu-v1-white.html" title="">Menu v1 white</a>
                                                        </li>
                                                        <li>
                                                            <a href="menu-v2-black.html" title="">Menu v2 black</a>
                                                        </li>
                                                        <li>
                                                            <a href="menu-v2-white.html" title="">Menu v2 white</a>
                                                        </li>
                                                        <li>
                                                            <a href="menu-v3-black" title="">Menu v3 black</a>
                                                        </li>
                                                        <li>
                                                            <a href="menu-v3-white" title="">Menu v3 White</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="widget-menu">
                                                <h3 class="menu-title">Shop teamplate</h3>
                                                <div class="widget-menu-detail">
                                                    <ul>
                                                        <li>
                                                            <a href="shop-grid-full-screen.html">Shop grid full screen v1</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-full-screen-v2.html">Shop grid full screen v2</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-full-width.html">Shop grid full width v1</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-full-width-v1.html">Shop grid full width v2</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-right-sidebar.html">Shop list right sidebar v1</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-right-sidebar-v2.html">Shop list right sidebar v2</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-left-sidebar.html">Shop list left sidebar v1</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-left-sidebar-v2.html">Shop list left sidebar v2</a>
                                                        </li>
                                                        <li>
                                                            <a href="quickview.html" title="">Quick view</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html" title="">Wishlist</a>
                                                        </li>
                                                        <li>
                                                            <a href="checkout.html" title="">Check out</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.html" title="">Product detail</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-v2.html" title="">Product detail v2</a>
                                                        </li>
                                                        <li>
                                                            <a href="odercomplete.html" title="">Oder complete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="widget-menu">
                                                <h3 class="menu-title">Shop teamplate</h3>
                                                <div class="widget-menu-detail">
                                                    <ul>
                                                        <li>
                                                            <a href="shop-grid-3col-left-sidebar.html">Shop grid 3 col LeftSidebar v1</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-3col-left-sidebar-v2.html">Shop grid 3 col LeftSidebar v2</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-3col-right-sidebar.html">Shop grid 3 col RightSidebar v1</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-3col-right-sidebar-v2.html">Shop grid 3 col RightSidebar v2</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-fullwidth.html">Shop grid Fullwidth v1</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-fullwidth-v2.html">Shop grid 3 col Fullwidth v2</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-2col-left-sidebar.html">Shop grid 2 col LeftSidebar v1</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-2col-left-sidebar-v2.html">Shop grid 2 col LeftSidebar v2</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-2col-right-sidebar.html">Shop grid 2 col RightSidebar v1</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-2col-left-sidebar-v2.html">Shop grid 2 col RightSidebar v2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="menu-item-89" class="lever0 item-toggle-dropdown has-sub">
                                        <a href="#">Blog</a>
                                        <div class="item-toggle-menu">
                                            <div class="widget-menu">
                                                <ul>
                                                    <li><a href="blog-v4.html">Blog version 4</a></li>
                                                    <li>
                                                        <a href="blog-v3-3col.html">Blog version 3 - 3 col</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-v3-2col">Blog version 3 - 2 col</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-v2-right.html">Blog version 2 - Right</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-v2-left.html">Blog version 2 - Left</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-v1-right-sidebar.html">Blog version 1 - Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-v1-left-sidebar.html">Blog version 1 - Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-post-v2.html">Single Post - Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-post-right-sidebar.html">Single Post - Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-post">Single Post - Fullwidth</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="menu-item-115" class="menu-item-115 level-0">
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- back-top -->
                <div id="back-top" class="back-top">
                    <i class="fa fa-long-arrow-up"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
    <script>
        $(function() {
            engoPriceSlider();
        });
    </script>

    <script>
        function addCart() {
            $.ajax({
                url: "<?= base_url(); ?>cart/add_to_cart",
                type: "post",
                data: {
                    id: <?= $product['productId']; ?>,
                    qty: $("#qtyProduct").val(),
                    variant: $("#variantProduct").val()
                },
                success: function(data) {
                    alert('Sukses Memasukan ke Keranjang')
                    location.reload();
                }
            })
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>