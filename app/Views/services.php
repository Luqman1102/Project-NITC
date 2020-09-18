<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <!--================Blog Area =================-->
    <!-- Slider Area Start-->
    <section class="blog_area section-paddingr">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar" style="margin-top: 250px; ">
                        <aside class="single_sidebar_widget" style="padding: 25px 10px 30px 25px ">
                            <h4 class="widget_title" style="padding-bottom: 15px;">Kategori</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Desain Logo</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Photoshop Editing</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Design Feed Instagram</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Undangan Pernikahan</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Kartu ID</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Desain Banner</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Desain Kemasan Produk</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Desain Poster</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Desain Brosur</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Desain Stiker</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Vektor</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="blog_right_sidebar">
                        <div class="services-area">
                            <div class="container">
                                <!-- Section-tittle -->
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="section-tittle text-center mb-80">
                                            <span>Layanan</span>
                                            <h2>Apa yang Anda Butuhkan?</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </aside>
                    </div>
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

</main>
<?= $this->endSection(); ?>