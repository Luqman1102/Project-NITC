<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="<?= base_url(); ?>/site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/assets/img/logo/logo.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style-custom.css">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url();?>/assets/img/logo/logo-jasain.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo mt-4">
                                <a href="<?= base_url();?>"><img src="<?= base_url();?>/assets/img/logo/logo-jasain.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <!-- <div class="main-menu f-right d-none d-lg-block">
                                <nav> 
                                    <ul id="navigation">
                                        <li><a href="<?= base_url();?>">Beranda</a></li>
                                        <li><a href="<?= base_url();?>/layanan">Layanan</a></li>
                                        <li><a href="<?= base_url();?>/kategori">Kategori</a>
                                        <li><a href="<?= base_url();?>/tentangkami">Tentang Kami</a></li>
                                    </ul>
                                </nav>
                            </div> -->
                        </div>             
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <!-- <a href="<?= base_url();?>/#" class="btn header-btn">Login</a> -->
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <!-- <div class="mobile_menu d-block d-lg-none"></div> -->
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <div class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" style="min-height: 100vh !important;" data-background="<?= base_url()?>/assets/img/hero/bg_hero.png">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-5 col-md-12 d-lg-none d-md-block">
                            <div class="hero__img" data-animation="fadeInRight" data-delay="-0.3s">
                                <img src="<?= base_url()?>/assets/img/hero/gambar-404.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 mx-auto">
                            <div class="hero__caption text-lg-left text-sm-center">
                                <h1 class="mt-lg-0 mt-sm-2 mb-3" data-animation="fadeInLeft" data-delay="-0.3s">Oops!</h1>
                                <p class="mb-3" data-animation="fadeInLeft" data-delay="-0.3s">Mohon maaf, hlaman tidak ditemukan.</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay="-0.3s">
                                    <a href="<?= base_url()?>" class="btn hero-btn py-4 px-5">Kembail ke Beranda</a>
                                </div>
                                <p class="my-3" data-animation="fadeInLeft" data-delay="-0.3s">Atau</p>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="blog_right_sidebar shadow" data-animation="fadeInLeft" data-delay="-0.3s">
                                            <aside class="single_sidebar_widget search_widget">
                                                <form action="/layanan" method="post">
                                                    <div class="form-group">
                                                        <div class="input-group mb-3">
                                                            <input type="search" class="form-control round-left" placeholder='Cari Layanan' name="keyword">
                                                            <div class="input-group-append">
                                                                <button type="submit" class="btns rounded-right" type="button"><i class="ti-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </aside>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block">
                            <div class="hero__img" data-animation="fadeInRight" data-delay="-0.3s">
                                <img src="<?= base_url()?>/assets/img/hero/gambar-404.png" alt=""  style="margin-left: -7rem;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- All JS Custom Plugins Link Here here -->
    <script src="<?= base_url(); ?>/./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url(); ?>/./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url(); ?>/./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url(); ?>/./assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="<?= base_url(); ?>/./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url(); ?>/./assets/js/wow.min.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/animated.headline.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="<?= base_url(); ?>/./assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="<?= base_url(); ?>/./assets/js/contact.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/jquery.form.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/jquery.validate.min.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/mail-script.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?= base_url(); ?>/./assets/js/plugins.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/main.js"></script>

    <!-- JavaScript Custom -->
    <script src="<?= base_url(); ?>/./assets/js/javascript-custom.js"></script>

</body>


</html>