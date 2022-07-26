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
<!--END PAGE FOOTER -->
</div>
</div>
<!--END PAGE FOOTER -->
</div>
<!-- js -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
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
<script>
    function addCart() {
        $.ajax({
            url: "<?= base_url(); ?>cart/add_to_cart",
            type: "post",
            data: {
                id: <?= $p['productId']; ?>,
                qty: 1
            },
            success: function(data) {
                $(".navbar-cart-inform").html(`<i class="fa fa-shopping-cart"></i> Keranjang(<?= count($this->cart->contents()) + 1; ?>)`);
                swal({
                        title: "Berhasil Ditambah ke Keranjang",
                        text: `<?= $product['title']; ?>`,
                        icon: "success",
                        buttons: true,
                        buttons: ["Lanjut Belanja", "Lihat Keranjang"],
                    })
                    .then((cart) => {
                        if (cart) {
                            location.href = "<?= base_url(); ?>cart"
                        }
                    });
            },
        })
    }
</script>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>