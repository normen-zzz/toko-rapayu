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
    <script src="https://kit.fontawesome.com/a11988f544.js" crossorigin="anonymous"></script>
</head>

<body class="collection-template bg-light">
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

                            <form class="form-search" method="get" action="<?= base_url(); ?>search">
                                <input class="input-search" placeholder="Search" type="text" name="q" />
                                <div class="btn-search">
                                    <button class="btn-search1" type="submit" value="Search" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end header main -->
            </header>
            <div class="page-wrapper page left-sidebar">