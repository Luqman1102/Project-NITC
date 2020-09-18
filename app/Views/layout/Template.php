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

    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>

    <footer>

        <!-- Footer Start-->
        <div class="footer-main" data-background="<?= base_url(); ?>/assets/img/shape/footer_bg.png">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-3 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="<?= base_url(); ?>/assets/img/logo/logojasain.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1"> <br> </p>
                                            <p class="info2">info@Jasain.com</p>
                                        </div>
                                    </div>
                                    <div class="footer-social">
                                        <a href="https://id-id.facebook.com"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a>
                                        <a href="https://mail.google.com/mail/"><i class="fas fa-envelope"></i></a>
                                        <a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Tetang kita</h4>
                                    <ul>
                                        <p>Jasain.com menyediakan berbagai macam jasa mulai dari kebutuhan kelas menengah kebawah sampai kebutuhan kelas menengah keatas. Dapatkan fitur menarik di Jasain.com</p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Tautan</h4>
                                    <ul>
                                        <li><a href="about.html">Lain-lain</a></li>
                                        <li><a href="#layan" ata-animation="fadeIn scrollUp" data-delay="1s">Layanan</a></li>
                                        <li><a href="services.html">Harga</a></li>
                                        <li><a href="services.html">Kategori</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Kontak</h4>
                                    <ul>
                                        <li><a href="https://web.whatsapp.com/">+62 882-1147-3717</a></i></li>
                                        <li><a href="https://web.whatsapp.com/">+62 857-3682-7475</a></i></li>
                                        <li><a href="https://myaccount.google.com/">auliask104@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom aera -->
            <div class="footer-bottom-area footer-bg">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>
                                            document.write(new Date().getFullYear());
                                        </script> Seluruh hak cipta | Dibuat oleh <a href="https://colorlib.com" target="_blank">Jasain.com</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->

    </footer>

    <!-- JS here -->

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

</body>


</html>