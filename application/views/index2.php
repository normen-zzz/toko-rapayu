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

<body>
    <div id="page" class="bg-light">
        <div class="page-wrapper row-offcanvas row-offcanvas-left">
            <?php $this->load->view('templates/navbar2.php') ?>
            <!-- PAGE MAINCONTENT -->
            <main class="wrapper main-content pt-3">
                <!-- slider -->
                <section id="engo-1" class="engo-box">
                    <div class="main-slider main-slider-v2">
                        <div class="container">
                            <div class="fullwidthbanner-container border">
                                <div class="r_slider" data-width="1174" data-height="546" data-screen="off" data-fullwidth="off">
                                    <ul>
                                        <?php foreach ($banner->result_array() as $b) { ?>
                                            <li class="f_left" data-transition="cube" data-slotamount="3">
                                                <img src="<?= base_url('assets/images/banner/' . $b['img']) ?>" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center" />
                                                <a href="<?= $b['url'] ?>" class="stretched-link"></a>
                                            </li>
                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end slider -->
                <!-- promotion -->
                <section id="engo-2" class="engo-box">
                    <div class="policy-v2 border-box">
                        <div class="container">
                            <div class="row row-gutter-10">
                                <div class="col-sm-4 col-33">
                                    <div class="policy-item">
                                        <h3>free uk next day delivery</h3>
                                        <span>on orders over $60</span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-33">
                                    <div class="policy-item mid">
                                        <h3>Sale. further reductions</h3>
                                        <span>up to 50% off, selected lines</span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-33">
                                    <div class="policy-item">
                                        <h3>25% student discount</h3>
                                        <span>excludes sale</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end promotion -->
                <!-- Colection -->
                <section id="engo-3" class="engo-box">
                    <div class="colection-v2">
                        <div class="container">
                            <div class="row row1 row-gutter-10">
                                <div class="col-sm-8">
                                    <div class="img-eff1 wow slideInLeft">
                                        <div class="card text-white">
                                            <img src="<?= base_url('assets/images/icon/' . $categoriesLimit[0]['icon']) ?>" style="filter: brightness(70%);max-height: 360px; object-fit: cover;" class="card-img" alt="..." />
                                            <div class="card-img-overlay">
                                                <h1 class="card-title fw-bold p-3"><?= $categoriesLimit[0]['name']; ?></h1>
                                                <a href="<?= base_url('c/' . $categoriesLimit[0]['slug']) ?>" class="stretched-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="img-eff1 wow slideInLeft">
                                        <div class="card text-white">
                                            <img src="<?= base_url('assets/images/icon/' . $categoriesLimit[1]['icon']) ?>" style="
														filter: brightness(70%);
														max-height: 360px;
														object-fit: cover;
													" class="card-img img-fluid" alt="..." />
                                            <div class="card-img-overlay">
                                                <h1 class="card-title fw-bold p-3"><?= $categoriesLimit[1]['name']; ?></h1>
                                                <a href="<?= base_url('c/' . $categoriesLimit[1]['slug']) ?>" class="stretched-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row2 row-gutter-10">
                                <div class="col-sm-4">
                                    <div class="img-eff1 wow slideInLeft">
                                        <div class="card text-white">
                                            <img src="<?= base_url('assets/images/icon/' . $categoriesLimit[2]['icon']) ?>" style="
														filter: brightness(70%);
														max-height: 360px;
														object-fit: cover;
													" class="card-img img-fluid" alt="..." />
                                            <div class="card-img-overlay">
                                                <h1 class="card-title fw-bold p-3"><?= $categoriesLimit[2]['name']; ?></h1>
                                                <a href="<?= base_url('c/' . $categoriesLimit[2]['slug']) ?>" class="stretched-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="img-eff1 wow slideInLeft">
                                        <div class="card text-white">
                                            <img src="<?= base_url('assets/images/icon/' . $categoriesLimit[3]['icon']) ?>" style="
														filter: brightness(70%);
														max-height: 360px;
														object-fit: cover;
													" class="card-img img-fluid" alt="..." />
                                            <div class="card-img-overlay">
                                                <h1 class="card-title fw-bold p-3"><?= $categoriesLimit[3]['name']; ?></h1>
                                                <a href="<?= base_url('c/' . $categoriesLimit[3]['slug']) ?>" class="stretched-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End colection -->
                <!-- carousel product -->
                <?php if ($best->num_rows() > 0) { ?>
                    <section id="engo-4" class="engo-box wow fadeInUp animated bg-white pt-5" data-wow-duration="1s" data-wow-delay="0ms">
                        <div class="carousel-product">
                            <div class="container">
                                <div class="box-title">
                                    <h3 class="h3-title small">Produk Terlaris</h3>
                                    <div class="title-icon">
                                        <img src="<?= base_url('assets/new/') ?>images/title-icon.png" alt="" />
                                    </div>
                                </div>
                                <!-- tab content -->
                                <div class="box-content">
                                    <div class="container product-grid owl-carousel-play" data-ride="owl-carousel">
                                        <!-- row item -->
                                        <div class="row px-0 mx-0 clearfix owl-carousel ma" data-slide="4" data-pagination="false" data-navigation="false" data-desktop="4" data-desktopsmall="4" data-tablet="4" data-tabletsmall="3" data-mobile="2">
                                            <!-- product -->
                                            <?php foreach ($best->result_array() as $p) : ?>
                                                <div class="col-lg item owl-item wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0ms">
                                                    <div class="product-item">
                                                        <a href="<?= base_url(); ?>p/<?= $p['slug']; ?>">
                                                            <img class="img-h" src="<?= base_url(); ?>assets/images/product/<?= $p['img']; ?>" alt="" />
                                                        </a>
                                                        <div class="product-info">
                                                            <!-- <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star empty"></i>
                                                            <i class="fa fa-star empty"></i>
                                                        </div> -->
                                                            <div class="product-name">
                                                                <a href="<?= base_url(); ?>p/<?= $p['slug']; ?>" class="product-item-link">
                                                                    <?= $p['title']; ?>
                                                                </a>
                                                            </div>
                                                            <div class="price-box price-final_price">
                                                                <span class="price-container">
                                                                    <?php if ($setting['promo'] == 1) { ?>
                                                                        <?php if ($p['promo_price'] == 0) { ?>
                                                                            <span class="price">Rp <?= str_replace(",", ".", number_format($p['price'])); ?></span>
                                                                        <?php } else { ?>
                                                                            <span class="price"> <strike>Rp <?= str_replace(",", ".", number_format($p['price'])); ?></strike> </span>
                                                                            <br>
                                                                            <span class="price"> Rp <?= str_replace(",", ".", number_format($p['promo_price'])); ?> </span>
                                                                        <?php } ?>
                                                                    <?php } else { ?>
                                                                        <span class="price">Rp <?= str_replace(",", ".", number_format($p['price'])); ?> </span>
                                                                    <?php } ?>
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                            <!-- end product -->
                                        </div>
                                        <!-- end row item -->
                                    </div>
                                </div>
                                <!-- end tab container -->
                            </div>
                        </div>
                    </section>
                <?php } ?>
                <!-- End carousel product -->
                <!-- Block -->
                <section id="engo-6" class="engo-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0ms">
                    <div class="latest-blog">
                        <div class="container">
                            <div class="box-title">
                                <h3 class="h3-title">LATEST FROM BLOG</h3>
                                <div class="title-icon margin-bottom-50">
                                    <img src="images/title-icon.png" alt="" />
                                </div>
                            </div>
                            <div class="box-content content-blog owl-carousel-play" data-ride="owlcarousel">
                                <div class="owl-carousel" data-slide="3" data-pagination="false" data-navigation="false" data-desktop="3" data-desktopsmall="3" data-tablet="2" data-tabletsmall="2" data-mobile="1">
                                    <!-- blog item -->
                                    <div class="item-blog item owl-item wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0ms">
                                        <div class="blog-images">
                                            <img src="<?= base_url('assets/new/') ?>images/banner/banner-anak.jpg" alt="" />
                                        </div>
                                        <div class="blog-content">
                                            <div class="extra">
                                                <h2 class="name">
                                                    <a href="./blog-v3-3col.html">ANALIZANDO TENDENCIAS</a>
                                                </h2>
                                                <div class="date">September 09, 2015</div>
                                                <div class="like">256 like</div>
                                            </div>
                                            <div class="des pb-3">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry&#8217;s standard dummy text ever since.
                                                <a href="./blog-v3-3col.html" class="read-more">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end blog item -->
                                    <!-- blog item -->
                                    <div class="item-blog item owl-item wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="200ms">
                                        <div class="blog-images">
                                            <img src="<?= base_url('assets/new/') ?>images/banner/banner-daster.jpg" alt="" />
                                        </div>
                                        <div class="blog-content">
                                            <div class="extra">
                                                <h2 class="name">
                                                    <a href="./blog-v3-3col.html">ANALIZANDO TENDENCIAS</a>
                                                </h2>
                                                <div class="date">September 09, 2015</div>
                                                <div class="like">256 like</div>
                                            </div>
                                            <div class="des pb-3">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry&#8217;s standard dummy text ever since.
                                                <a href="./blog-v3-3col.html" class="read-more">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end blog item -->
                                    <!-- blog item -->
                                    <div class="item-blog item owl-item wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="400ms">
                                        <div class="blog-images">
                                            <img src="<?= base_url('assets/new/') ?>images/banner/banner-hijab.jpg" alt="" />
                                        </div>
                                        <div class="blog-content">
                                            <div class="extra">
                                                <h2 class="name">
                                                    <a href="./blog-v3-3col.html">ANALIZANDO TENDENCIAS</a>
                                                </h2>
                                                <div class="date">September 09, 2015</div>
                                                <div class="like">256 like</div>
                                            </div>
                                            <div class="des pb-3">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry&#8217;s standard dummy text ever since.
                                                <a href="./blog-v3-3col.html" class="read-more">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end blog item -->
                                    <!-- blog item -->
                                    <div class="item-blog item owl-item wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="600ms">
                                        <div class="blog-images">
                                            <img src="<?= base_url('assets/new/') ?>images/banner/banner-mukena.jpg" alt="" />
                                        </div>
                                        <div class="blog-content">
                                            <div class="extra">
                                                <h2 class="name">
                                                    <a href="./blog-v3-3col.html">ANALIZANDO TENDENCIAS</a>
                                                </h2>
                                                <div class="date">September 09, 2015</div>
                                                <div class="like">256 like</div>
                                            </div>
                                            <div class="des pb-3">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry&#8217;s standard dummy text ever since.
                                                <a href="./blog-v3-3col.html" class="read-more">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end Blog -->
            </main>
            <!--END PAGE MAINCONTENT -->
            <!-- PAGE FOOTER -->
            <footer class="site-footer footer-v1 bg-white pt-5">
                <?php
                $categoriesLimit = $this->Categories_model->getCategoriesLimit();
                $setting = $this->Settings_model->getSetting();
                $sosmed = $this->Settings_model->getSosmed();
                $footerhelp = $this->Settings_model->getFooterHelp();
                $footerinfo = $this->Settings_model->getFooterInfo();
                $rekening = $this->db->get('rekening'); ?>
                <!-- footer content -->
                <div class="footer">
                    <div class="container">
                        <!-- <div class="head-footer wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="100ms">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 ft-50 brandknowledge footertop">
                                    <h2 class="title">
                                        <a href="#">Brand Knowledge</a>
                                    </h2>
                                </div>
                                <div class="col-md-3 col-sm-3 ft-50 footertop head">
                                    <h2 class="title">
                                        <a href="#">Head Office</a>
                                    </h2>
                                </div>
                                <div class="col-md-3 col-sm-3 ft-50 footertop store">
                                    <h2 class="title">
                                        <a href="#">Store System</a>
                                    </h2>
                                </div>
                                <div class="col-md-3 col-sm-3 ft-50 footertop careers">
                                    <h2 class="title">
                                        <a href="#">Careers</a>
                                    </h2>
                                </div>
                            </div>
                        </div> -->
                        <!--Main-footer-->
                        <div class="main-footer wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="400ms">
                            <div class="footer-widget">
                                <div class="row">
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
                                    <div class="col-md-6 col-sm-6">
                                        <div class="contact">
                                            <h3 class="title-widget">
                                                <a href="<?= base_url(); ?>"><?= $this->Settings_model->general()["app_name"]; ?></a>
                                            </h3>
                                            <div class="f-content-widget">
                                                <div class="social">
                                                    <ul>
                                                        <?php foreach ($sosmed->result_array() as $s) { ?>
                                                            <li>
                                                                <a href="<?= $s['link']; ?>"><?= $s['name']; ?><i class="fab fa-<?= $s['icon']; ?>"></i></a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                                <div class="text-widget">
                                                    <p class="address">
                                                        <strong>[ Alamat ]</strong> <?= $setting['address']; ?>
                                                    </p>
                                                    <p class="hotline">
                                                        <strong>[ Whatsapp ]</strong> <?= $this->Settings_model->general()["whatsapp"]; ?> -
                                                        <strong>[ Email ]</strong> <?= $this->Settings_model->general()["email_contact"]; ?>
                                                    </p>
                                                </div>
                                                <div class="Subcribe">
                                                    <form action="<?= base_url(); ?>subscribe-email" method="post">
                                                        <input type="email" class="email" placeholder="Enter your email" />
                                                        <button type="submit" value="Subscribe" class="btn btn-dark mt-2">Subscribe</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Main-footer-->
                        <div class="bottom-footer wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="600ms">
                            <nav class="footer-menu">
                                <ul>
                                    <!-- <li><a href="#">Privacy & Cookies</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Accessibility</a></li>
                                    <li><a href="#">Store Directory</a></li>
                                    <li><a href="#">About Us</a></li> -->
                                </ul>
                            </nav>
                            <!-- .footer-menu -->
                            <!--  copyright -->
                            <div class="copyright">
                                <div class="container">
                                    <p class="a-center">
                                        Copyrights © 2022 All Rights Reserved by <?= $this->Settings_model->general()["app_name"]; ?>
                                    </p>
                                </div>
                            </div>
                            <!-- end copyright -->
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
                                <li id="menu-item-90"><a href="#">Porduk</a></li>
                                <li id="menu-item-88" class="menu-item-88 level-0">
                                    <a href="#">Blog</a>
                                </li>
                                <li id="menu-item-87" class="menu-item-87 level-0">
                                    <a href="#">Contact</a>
                                </li>
                                <li id="menu-item-86" class="menu-item-86 level-0 btn btn-outline-primary">
                                    <a href="#">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
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
</body>

</html>