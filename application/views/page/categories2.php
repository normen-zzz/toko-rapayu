<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="Default Description" name="description" />
    <meta content="" name="keywords" />
    <meta content="INDEX,FOLLOW" name="robots" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="<?= base_url();  ?>assets/images/logo/<?= $setting['favicon']; ?>" type="image/x-icon" />
    <!-- fonts -->
    <link href="http://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,400italic,500,500italic,600,600italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,500,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/new/') ?>font/css/font-awesome.min.css" media="all" type="text/css" rel="stylesheet" />
    <link href="<?= base_url('assets/new/') ?>font/css/pe-icon-7-stroke.css" media="all" type="text/css" rel="stylesheet" />
    <!-- style -->
    <link rel="stylesheet" href="<?= base_url('assets/new/') ?>css/owl.carousel.min.css" />
    <link href="<?= base_url('assets/new/') ?>css/styles.css" media="all" type="text/css" rel="stylesheet" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body class="collection-template bg-light">
    <nav class="produk-bwh navbar-expand-lg navbar-dark bg-dark fixed-bottom p-4 m-0">
        <div class="container">
            <a class="text-danger pe-5" href="#">Semua Produk</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul style="height: 60vh; overflow-y: scroll">
                    <li class="py-3"><a href="#" class="text-white">Populer</a></li>
                    <li class="py-3"><a href="#" class="text-white">Kudamas Batik</a></li>
                    <li class="py-3"><a href="#" class="text-white">Kudamas Couture</a></li>
                    <li class="py-3"><a href="#" class="text-white">Kencana Ungu</a></li>
                    <li class="py-3"><a href="#" class="text-white">Amro</a></li>
                    <li class="py-3"><a href="#" class="text-white">Kemala Homewear</a></li>
                    <li class="py-3"><a href="#" class="text-white">Gamis Daily</a></li>
                    <li class="py-3"><a href="#" class="text-white">Gamis Syar'i</a></li>
                    <li class="py-3"><a href="#" class="text-white">Marissa</a></li>
                    <li class="py-3"><a href="#" class="text-white">Daster Soloan</a></li>
                    <li class="py-3"><a href="#" class="text-white">Tunik dan Atasan</a></li>
                    <li class="py-3"><a href="#" class="text-white">Mukena</a></li>
                    <li class="py-3"><a href="#" class="text-white">Kesehatan</a></li>
                    <li class="py-3"><a href="#" class="text-white">Sprei, Bantal, Guling</a></li>
                    <li class="py-3"><a href="#" class="text-white">Baju Anak</a></li>
                    <li class="py-3"><a href="#" class="text-white">Hijab</a></li>
                    <li class="py-3"><a href="#" class="text-white">Hawa</a></li>
                    <li class="py-3"><a href="#" class="text-white">Scarlet</a></li>
                    <li class="py-3"><a href="#" class="text-white">Masker Kain</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="page">
        <div class="wapper-inner row-offcanvas row-offcanvas-left">
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
                                        <h1 class="display-1 text-white" style="font-family: 'Lora'"><?= $this->Settings_model->general()["app_name"]; ?></h1>
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
                                        <li class="toplink">
                                            <a href="#">Login</a>
                                        </li>
                                        <li class="toplink"><a href="#">Wishlist</a></li>
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
            <div class="page-wrapper page left-sidebar">

                <!-- breadcrumb -->
                <div class="bg-white">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent p-0 m-0 py-5">
                                <li class="breadcrumb-item h3"><a href="#" class="text-danger">Home</a></li>
                                <li class="breadcrumb-item h3 text-dark active" aria-current="page">Produk</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <?php $setting = $this->db->get('settings')->row_array(); ?>
                <!-- End breadcrumbs -->
                <main id="maincontent" class="page-main pt-5">
                    <div class="container">
                        <div class="row">
                            <div class="columns">
                                <div class="col-xs-12 col-sm-9 col-left">
                                    <!-- Col main -->
                                    <div class="column main">
                                        <!-- toolbar -->
                                        <div class="toolbar">
                                            <div class="sort clearfix">
                                                <div class="style-switch pull-right">
                                                    <a class="active btn-grid" href="#" data-view="grid"><i class="fa fa-th"></i></a>
                                                    <a href="#" class="btn-list" data-view="list"><i class="fa fa-th-list"></i></a>
                                                </div>
                                            </div>
                                            <!-- .sort -->
                                        </div>
                                        <!--  end toolbar -->
                                        <!-- Product grid -->
                                        <div class="product-grid" id="tabs-grid">
                                            <div class="row">
                                                <?php foreach ($products->result_array() as $p) { ?>
                                                    <!-- product -->
                                                    <div class="col-xs-12 col-md-4 col-sm-6">
                                                        <div class="product-item wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0ms">
                                                            <a href="<?= base_url('p/' . $p['slug']) ?>">
                                                                <img class="img-h" src="<?= base_url('assets/images/product/' . $p['img']) ?>" alt="" />
                                                            </a>
                                                            <div class="product-info">
                                                                <!-- <div class="ratings">
                                                                <div class="ratings">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star empty"></i>
                                                                    <i class="fa fa-star empty"></i>
                                                                </div>
                                                            </div> -->
                                                                <div class="product-name">
                                                                    <a href="<?= base_url('p/' . $p['slug']) ?>" class="product-item-link"> <?= $p['title'] ?> </a>
                                                                </div>
                                                                <div class="price-box price-final_price">
                                                                    <?php if ($setting['promo'] == 1) { ?>
                                                                        <?php if ($p['promo_price'] == 0) { ?>
                                                                            <span class="price">Rp <?= str_replace(",", ".", number_format($p['price'])); ?></span>
                                                                        <?php } else { ?>
                                                                            <span class="price"> <strike>Rp <?= str_replace(",", ".", number_format($p['price'])); ?></strike> </span>
                                                                            <br>
                                                                            <span class="price"> Rp <?= str_replace(",", ".", number_format($p['promo_price'])); ?> </span>
                                                                        <?php } ?>
                                                                    <?php } else { ?>
                                                                        <span class="price">Rp <?= str_replace(",", ".", number_format($p['price'])); ?></span>
                                                                    <?php } ?>
                                                                </div>
                                                                <!-- actions -->
                                                                <div class="actions">
                                                                    <div class="action add-to-cart">
                                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to cart"> </a>
                                                                    </div>
                                                                    <div class="action add-to-wishlist">
                                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"> </a>
                                                                    </div>
                                                                    <div class="action add-to-quickview">
                                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to quickview"> </a>
                                                                    </div>
                                                                </div>
                                                                <!-- end actions -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <!-- end product -->
                                            </div>
                                        </div>
                                        <!-- end product grid -->
                                        <!-- Product grid -->
                                        <div class="product-list" id="tabs-list" style="display: none">
                                            <!-- product item -->
                                            <?php foreach ($products->result_array() as $p) { ?>
                                                <div class="product-item">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="product-item-info">
                                                                <a href="<?= base_url('p/' . $p['slug']) ?>" class="product-item-photo">
                                                                    <span class="product-image-container">
                                                                        <img src="<?= base_url('assets/images/product/' . $p['img']) ?>" alt="" class="product-image-photo" />
                                                                    </span>
                                                                </a>

                                                            </div>
                                                        </div>

                                                        <div class="col-sm-8">
                                                            <div class="product-item-details">
                                                                <div class="product-item-name">
                                                                    <a href="#" class="product-item-link"> <?= $p['title'] ?> </a>
                                                                </div>

                                                                <div class="price-box price-final_price">
                                                                    <span class="price-container">
                                                                        <?php if ($setting['promo'] == 1) { ?>
                                                                            <?php if ($p['promo_price'] == 0) { ?>
                                                                                <span class="price">Rp <?= str_replace(",", ".", number_format($p['price'])); ?></span>
                                                                            <?php } else { ?>
                                                                                <span class="old-price">Rp <?= str_replace(",", ".", number_format($p['price'])); ?></span>

                                                                                <span class="price"> Rp <?= str_replace(",", ".", number_format($p['promo_price'])); ?> </span>
                                                                            <?php } ?>
                                                                        <?php } else { ?>
                                                                            <span class="price">Rp <?= str_replace(",", ".", number_format($p['price'])); ?></span>
                                                                        <?php } ?>

                                                                    </span>
                                                                </div>

                                                                <div class="des-product">
                                                                    <span>
                                                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                                                                        egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                                                                    </span>
                                                                </div>
                                                                <!-- actions -->
                                                                <div class="actions-list">
                                                                    <div class="tocart">
                                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to cart"> Add to cart </a>
                                                                    </div>
                                                                    <div class="action-list towishlist">
                                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"> Add to wishlist </a>
                                                                    </div>
                                                                    <div class="action-list toquickview">
                                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to quickview"> Add to quickview </a>
                                                                    </div>
                                                                </div>
                                                                <!-- end actions -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <!-- end product item -->
                                        </div>
                                        <!-- end product grid -->

                                    </div>
                                </div>
                                <!-- sidebar -->
                                <div class="col-xs-12 col-sm-3 col-right">
                                    <div class="sidebar left-sidebar">
                                        <!-- widget category-->
                                        <div class="widget category-hidden">
                                            <div class="widget-title">
                                                <h3>KATEGORI</h3>
                                            </div>
                                            <div class="widget-content">
                                                <ul>
                                                    <?php foreach ($categories->result_array() as $c) { ?>
                                                        <li><a href="<?= base_url('c/' . $c['slug']) ?>" class="text-dark"><?= $c['name'] ?></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end widget category-->
                                        <!-- widget topsale-->
                                        <div class="widget block block-topsale">
                                            <div class="widget-title">
                                                <h3>Populer</h3>
                                            </div>
                                            <div class="widget-content">
                                                <!-- list items -->
                                                <div class="list-items">
                                                    <ul>
                                                        <!-- product item -->
                                                        <li class="row product-item">
                                                            <div class="col-6 p-0 product-item-info">
                                                                <a href="#" class="product-item-photo">
                                                                    <span class="product-image-container">
                                                                        <img src="<?= base_url('assets/new/') ?>images/product/tab-product/popula1.jpg" alt="" class="product-image-photo img-fluid" />
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="col-6 p-0 product-item-details">
                                                                <div class="product-item-name">
                                                                    <a href="#" class="product-item-link"> Legging Cathedral </a>
                                                                </div>
                                                                <div>
                                                                    <img src="images/product/rating.png" alt="" />
                                                                </div>
                                                                <div class="price-box">
                                                                    <span class="price-container">
                                                                        <span class="price"> $ 35.00 </span>
                                                                        <span class="old-price"> $ 45.00 </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- end product item -->
                                                        <!-- product item -->
                                                        <li class="row product-item">
                                                            <div class="col-6 p-0 product-item-info">
                                                                <a href="#" class="product-item-photo">
                                                                    <span class="product-image-container">
                                                                        <img src="images/product/tab-product/popular2.jpg" alt="" class="product-image-photo img-fluid" />
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="col-6 p-0 product-item-details">
                                                                <div class="product-item-name">
                                                                    <a href="#" class="product-item-link"> Legging Cathedral </a>
                                                                </div>
                                                                <div>
                                                                    <img src="images/product/rating.png" alt="" />
                                                                </div>
                                                                <div class="price-box">
                                                                    <span class="price-container">
                                                                        <span class="price"> $ 35.00 </span>
                                                                        <span class="old-price"> $ 45.00 </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- end product item -->
                                                        <!-- product item -->
                                                        <li class="row product-item">
                                                            <div class="col-6 p-0 product-item-info">
                                                                <a href="#" class="product-item-photo">
                                                                    <span class="product-image-container">
                                                                        <img src="images/product/tab-product/popular3.jpg" alt="" class="product-image-photo img-fluid" />
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="col-6 p-0 product-item-details">
                                                                <div class="product-item-name">
                                                                    <a href="#" class="product-item-link"> Legging Cathedral </a>
                                                                </div>
                                                                <div>
                                                                    <img src="images/product/rating.png" alt="" />
                                                                </div>
                                                                <div class="price-box">
                                                                    <span class="price-container">
                                                                        <span class="price"> $ 35.00 </span>
                                                                        <span class="old-price"> $ 45.00 </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- end product item -->
                                                    </ul>
                                                </div>
                                                <!-- end list items -->
                                            </div>
                                        </div>
                                        <!-- end widget top sale-->
                                    </div>
                                </div>
                                <!-- end sidebar -->
                            </div>
                        </div>
                    </div>
                </main>

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
                                                    <h1 class="display-1 fw-bolder text-white" style="font-family: 'Lora'">IFANI SHOP</h1>
                                                </div>
                                                <div class="f-content-widget">
                                                    <div class="text-widget">
                                                        <p class="address"><strong>[ Address ]</strong> 121 King Street, Melboure, victoria 3000 Australia.</p>
                                                        <p class="hotline"><strong>[ Hotline ]</strong> 070-7782-9137 - <strong>[ Fax ]</strong> 070-7782-9137 - <strong>[ Email ]</strong> contact@mautica.com</p>
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
                                                        <li><a href="shop.html">Jean &amp; Trousers</a></li>
                                                        <li><a href="shop.html">Jacket &amp; Coats</a></li>
                                                        <li><a href="shop.html">Sweaters</a></li>
                                                        <li><a href="shop.html">Blouses</a></li>
                                                        <li><a href="shop.html">Sports &amp; Lifestyle</a></li>
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
                                    <li id="menu-item-88" class="menu-item-88 level-0"><a href="#">Kids</a></li>
                                    <li id="menu-item-87" class="menu-item-87 level-0"><a href="#">Shoes</a></li>
                                    <li id="menu-item-86" class="menu-item-86 level-0"><a href="#">Bags</a></li>
                                    <li id="menu-item-85" class="lever0 item-toggle-dropdown has-sub">
                                        <a href="#">Pages</a>
                                        <div class="item-toggle-menu">
                                            <div class="widget-menu">
                                                <h3 class="menu-title">Homepages</h3>
                                                <div class="widget-menu-detail">
                                                    <ul>
                                                        <li><a href="index.html">Home page style 1</a></li>
                                                        <li><a href="index2.html">Home page style 2</a></li>
                                                        <li><a href="index3.html">Home page style 3</a></li>
                                                        <li><a href="index4.html">Home page style 4</a></li>
                                                        <li><a href="index5.html">Home page style 5</a></li>
                                                        <li><a href="index6.html">Home page style 6</a></li>
                                                        <li><a href="index7.html">Home page style 7</a></li>
                                                        <li><a href="index8.html">Home page style 8</a></li>
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
                                                        <li><a href="login-register.html"> Login & Register</a></li>
                                                        <li><a href="menu-v1-white.html" title="">Menu v1 white</a></li>
                                                        <li><a href="menu-v2-black.html" title="">Menu v2 black</a></li>
                                                        <li><a href="menu-v2-white.html" title="">Menu v2 white</a></li>
                                                        <li><a href="menu-v3-black" title="">Menu v3 black</a></li>
                                                        <li><a href="menu-v3-white" title="">Menu v3 White</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="widget-menu">
                                                <h3 class="menu-title">Shop teamplate</h3>
                                                <div class="widget-menu-detail">
                                                    <ul>
                                                        <li><a href="shop-grid-full-screen.html">Shop grid full screen v1</a></li>
                                                        <li><a href="shop-grid-full-screen-v2.html">Shop grid full screen v2</a></li>
                                                        <li><a href="shop-grid-full-width.html">Shop grid full width v1</a></li>
                                                        <li><a href="shop-grid-full-width-v1.html">Shop grid full width v2</a></li>
                                                        <li><a href="shop-list-right-sidebar.html">Shop list right sidebar v1</a></li>
                                                        <li><a href="shop-list-right-sidebar-v2.html">Shop list right sidebar v2</a></li>
                                                        <li><a href="shop-list-left-sidebar.html">Shop list left sidebar v1</a></li>
                                                        <li><a href="shop-list-left-sidebar-v2.html">Shop list left sidebar v2</a></li>
                                                        <li><a href="quickview.html" title="">Quick view</a></li>
                                                        <li><a href="wishlist.html" title="">Wishlist</a></li>
                                                        <li><a href="checkout.html" title="">Check out</a></li>
                                                        <li><a href="product.html" title="">Product detail</a></li>
                                                        <li><a href="product-v2.html" title="">Product detail v2</a></li>
                                                        <li><a href="odercomplete.html" title="">Oder complete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="widget-menu">
                                                <h3 class="menu-title">Shop teamplate</h3>
                                                <div class="widget-menu-detail">
                                                    <ul>
                                                        <li><a href="shop-grid-3col-left-sidebar.html">Shop grid 3 col LeftSidebar v1</a></li>
                                                        <li><a href="shop-grid-3col-left-sidebar-v2.html">Shop grid 3 col LeftSidebar v2</a></li>
                                                        <li><a href="shop-grid-3col-right-sidebar.html">Shop grid 3 col RightSidebar v1</a></li>
                                                        <li><a href="shop-grid-3col-right-sidebar-v2.html">Shop grid 3 col RightSidebar v2</a></li>
                                                        <li><a href="shop-grid-fullwidth.html">Shop grid Fullwidth v1</a></li>
                                                        <li><a href="shop-grid-fullwidth-v2.html">Shop grid 3 col Fullwidth v2</a></li>
                                                        <li><a href="shop-grid-2col-left-sidebar.html">Shop grid 2 col LeftSidebar v1</a></li>
                                                        <li><a href="shop-grid-2col-left-sidebar-v2.html">Shop grid 2 col LeftSidebar v2</a></li>
                                                        <li><a href="shop-grid-2col-right-sidebar.html">Shop grid 2 col RightSidebar v1</a></li>
                                                        <li><a href="shop-grid-2col-left-sidebar-v2.html">Shop grid 2 col RightSidebar v2</a></li>
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
                                                    <li><a href="blog-v3-3col.html">Blog version 3 - 3 col</a></li>
                                                    <li><a href="blog-v3-2col">Blog version 3 - 2 col</a></li>
                                                    <li><a href="blog-v2-right.html">Blog version 2 - Right</a></li>
                                                    <li><a href="blog-v2-left.html">Blog version 2 - Left</a></li>
                                                    <li><a href="blog-v1-right-sidebar.html">Blog version 1 - Right Sidebar</a></li>
                                                    <li><a href="blog-v1-left-sidebar.html">Blog version 1 - Left Sidebar</a></li>
                                                    <li><a href="single-post-v2.html">Single Post - Left Sidebar</a></li>
                                                    <li><a href="single-post-right-sidebar.html">Single Post - Right Sidebar</a></li>
                                                    <li><a href="single-post">Single Post - Fullwidth</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="menu-item-115" class="menu-item-115 level-0"><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div id="back-top" class="back-top">
                    <i class="fa fa-long-arrow-up"></i>
                </div>
                <!--END PAGE FOOTER -->
            </div>
        </div>
        <!--END PAGE FOOTER -->
    </div>
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/new/') ?>js/plugin/plugin.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/owl.carousel-2.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/jquery.themepunch.plugins.min.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/revolution.js"></script>

    <script src="<?= base_url('assets/new/') ?>js/engo-apps.js"></script>
    <script src="<?= base_url('assets/new/') ?>js/nautica.js"></script>
    <script>
        $(function() {
            engoPriceSlider();
        });
    </script>
</body>

</html>