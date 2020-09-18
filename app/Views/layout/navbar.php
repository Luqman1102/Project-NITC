    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url(); ?>/assets/img/logo/logojasain.png" alt="">
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
                            <div class="logo">
                                <a href="index.html"><img src="<?= base_url(); ?>/assets/img/logo/logojasain.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="<?= base_url(); ?>"> Beranda</a></li>
                                        <li><a href="<?= base_url(); ?>/about">Tentang Kita</a></li>
                                        <li><a href="<?= base_url(); ?>/services">Layanan</a></li>
                                        <?php if (session('username') == NULL) : ?>
                                            <li><a href="<?= base_url(); ?>/Login">Masuk</a>
                                            <?php endif; ?>

                                            </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <?php if (session('username') == NULL) { ?>
                                    <a href="<?= base_url(); ?>/RegisterPembeli" class="btn header-btn">Daftar</a>
                                <?php } else { ?>
                                    <div class="dropdown show">
                                        <a class="btn header-btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?= session('username') ?>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <div class="profile">
                                                <a class="dropdown-item" href="<?= base_url() ?>/profile">Ganti Profile</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="<?= base_url() ?>/logout">Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>