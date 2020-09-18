<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <!-- Slider Area Start-->
    <div class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-5 d-none d-xl-block">
                            <div class="hero__img hero__img2 " data-animation="fadeInLeft" data-delay="1s">
                                <img src="<?= base_url() ?>/assets/img/hero/gambar-2.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-9 ">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="fadeInRight" data-delay=".4s">Seputar Mengenai Jasain.com</h2>
                                    <p data-animation="fadeInRight" data-delay=".6s">Situs online jasain.com adalah salah satu situs online terpercaya dengan toko jasa secara online, tentunya akan terus menargetkan untuk menjadi jualan jasa terbaik di Indonesia khususnya, dan di dunia secara umum. Jasain.com selalu mengutamakan kualitas yang prima dalam setiap produk yang dijual. Di tengah persaingan dunia global dan harga yang semakin bersaing ini, Jasain.com ingin juga menjadi website pembayaran melalui M-banking sebagai alternatif pembayaran bagi para pelanggannya, sehingga memudahkan bagi pelanggan yang ingin menggunakan metode cashless. sebagai tempat membeli mainan terbaik di Indonesia yang memiliki beberapa cabang di berbagai negara seperti Indonesia. Yang membedakan Jasaon.com dengan lainnya adalah kami peduli dengan kenyamanan pelanggan kami baik itu pelanggan pertama ataupun pelanggan yang kembali datang ke kami.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInRight" data-delay=".8s">
                                        <a href="#kontak" class="ml-5 btn hero-btn">Kontak Kita</a>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- about shape -->
        <div class="about-shape">
            <div class="shape-right">
                <img src="<?= base_url() ?>/assets/img/hero/about-sharpe2.png" alt="">
            </div>
        </div>
    </div>
    <!-- Slider Area End-->
    <!--Choose Best start-->
    <div class="choose-best choose-padding">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="section-tittle text-center">
                        <h2>Mengapa memilih Jasain.com? </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-choose text-center mb-30">
                        <div class="d-icon">
                            <img src="<?= base_url() ?>/assets/img/icon/free-shipping.png">
                        </div>
                        <div class="do-caption">
                            <p>Layanan gratis delivery untuk Jakarta dan sekitarnya dalam beberapa jam saja.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-choose active text-center mb-30">
                        <div class="d-icon">
                            <img src="<?= base_url() ?>/assets/img/icon/pay.png">
                        </div>
                        <div class="do-caption">
                            <p>Sistem pembayaran yang paling aman dan praktis. dilengkapi dengan bank transfer lokal BCA, Mandiri, BRI, Mandiri dan CIMB</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-choose text-center mb-30">
                        <div class="d-icon">
                            <img src="<?= base_url() ?>/assets/img/icon/medal.png">
                        </div>
                        <div class="do-caption">
                            <p>Jasa dengan kualitas terbaik. Anda bisa memilih jasa sesuai selera anda yang dibuat freelance yang berpengalaman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Tips Triks Start -->
    <!-- have-project Start-->
    <div class="have-project">
        <div class="container">
            <div class="haveAproject" data-background="<?= base_url() ?>/assets/img/team/have.jpg">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-7 col-lg-9 col-md-12">
                        <div class="wantToWork-caption">
                            <h2>Apa yang Anda Butuhkan?</h2>
                            <p>Ayo cari apa yang anda butuhkan hanya di Jasain.com. Kita memberikan jasa sesuai dengan selera anda yang dibuat oleh freelance yang berpengalaman. Ayo dapatkan sekarang </p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-3 col-md-12">
                        <div class="wantToWork-btn f-right">
                            <a href="<?= base_url() ?>/service" class="btn btn-ans"> Dapatkan</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- have-project End -->

</main>
<?= $this->endSection(); ?>