<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
        <!-- Slider Area Start-->
        <div class="slider-area">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="<?= base_url()?>/assets/img/hero/bg_hero.png">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-7 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 class="mb-3" data-animation="fadeInLeft" data-delay=".4s">Ayo Serbu<br> Dapatkan Kualitas Terbaik</h1>
                                    <p class="mb-3" data-animation="fadeInLeft" data-delay=".6s">Jasain menawarkan berbagai macam jasa desain grafis dengan kualitas terbaik. Kamu bisa mendapatkan jasa yang yang kamu butuhkan dengan freelance berpengalaman. Ayo dapatkan sekarang!</p>
                                    <!-- Hero-btn -->
                                    <!-- <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="industries.html" class="btn hero-btn">Daftar</a>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="blog_right_sidebar shadow" data-animation="fadeInLeft" data-delay=".8s">
                                                <aside class="single_sidebar_widget search_widget">
                                                    <form action="/layanan" method="post">
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <input type="search" class="form-control round-left" placeholder='Coba "Jasa Desain Poster"' name="keyword">
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
                            <div class="col-lg-5">
                                <div class="hero__img d-none d-lg-block" data-animation="fadeInRight" data-delay="1s">
                                    <img src="<?= base_url()?>/assets/img/hero/gambar-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End-->
        <!-- What We do start-->
        <div class="what-we-do we-padding" id="layan">
            <div class="container">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-tittle text-center">
                            <h2>Apa Yang Dapat kita Lakukan Untuk Anda?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-do text-center mb-30">
                            <div class="do-icon">
                                <span  class="flaticon-project"></span>
                            </div>
                            <div class="do-caption">
                                <h4>Desain Logo</h4>
                                <p>Tersedia jasa desain logo untuk memperkuat identitas brand perusahaan & merek Anda dari desainer freelance profesional dalam pembuatan logo online hanya di Jasain</p>
                            </div>
                            <div class="do-btn">
                                <a href="<?= base_url()?>/kategori/layanan/logo"><i class="ti-arrow-right"></i> Dapatkan</a>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-4">
                        <div class="single-do text-center mb-30">
                            <div class="d-icon">
                                <img src="<?= base_url()?>/assets/img/icon/photo.png">
                            </div>
                            <div class="do-caption">
                                <h4>Photoshop Editing</h4>
                                <p>Jasain menyediakan ribuan freelancer kreatif yang berpengalaman di bidang jasa edit foto menggunakan photoshop. Di sini, Anda bisa memilih freelancer berdasarkan harga.</p>
                            </div>
                            <div class="do-btn">
                                <a href="<?= base_url()?>/kategori/layanan/photoshop-editing"><i class="ti-arrow-right"></i> Dapatkan</a>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-4">
                        <div class="single-do text-center mb-30">
                            <div class="d-icon">
                                <img src="<?= base_url()?>/assets/img/icon/instagram.png">
                            </div>
                            <div class="do-caption">
                                <h4>Design Feed Instagram</h4>
                                <p>Menyediakan jasa desain feed instagram untuk kamu yang ingin hits di sosial media atau ingin menjadi selebgram. Kamu bisa mencari ribuan desain feed instagram dengan selera kamu</p>
                            </div>
                            <div class="do-btn">
                                <a href="<?= base_url()?>/kategori/layanan/feed-instagram"><i class="ti-arrow-right"></i> Dapatkan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-do text-center mb-30">
                            <div class="d-icon">
                                <img src="<?= base_url()?>/assets/img/icon/invitation.png">
                            </div>
                            <div class="do-caption">
                                <h4>Undangan Pernikahan</h4>
                                <p>Tersedia jasa desain undangan pernikahan unik dari freelancer profesional di Jasain. Buat kartu undangan pernikahan berkualitas dengan harga terjangkau dan sesuai seleramu.  </p>
                            </div>
                            <div class="do-btn">
                                <a href="<?= base_url()?>/kategori/layanan/undangan-pernikahan"><i class="ti-arrow-right"></i> Dapatkan</a>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-4">
                        <div class="single-do text-center mb-30">
                            <div class="d-icon">
                                <img src="<?= base_url()?>/assets/img/icon/id-card.png">
                            </div>
                            <div class="do-caption">
                                <h4>Kartu ID</h4>
                                <p>Jasain menyediakan jasa desain kartu nama dengan harga terjangkau. Semua dikerjakan oleh freelancer berpengalaman dalam pembuatan kartu nama. Yuk dapatkan sekarang </p>
                            </div>
                            <div class="do-btn">
                                <a href="<?= base_url()?>/kategori/layanan/kartu-id"><i class="ti-arrow-right"></i> Dapatkan</a>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-4">
                        <div class="single-do active text-center mb-30">
                            <div class="do-icon">
                                
                            </div>
                            <div class="do-btn py-5">
                                <a href="<?= base_url()?>/kategori"><i class="ti-arrow-right mb-2"></i><h4>Lainnya</h4></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
        <!-- What We do End-->
        <!-- We Create Start -->
        <div class="we-create-area section-padding">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-lg-6 col-md-12">
                        <div class="we-create-img">
                            <img src="<?= base_url()?>/assets/img/hero/gambar-2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="we-create-cap">
                            <h3 class="mb-3">Membuat Logo untuk Bisnis Anda</h3>
                            <p class="mb-3">Dalam realitas bisnis saat ini, semua orang ingin merek mereka dikenali dan diingat. Logo Anda memainkan peran besar dalam skenario itu. Ya, membuat logo bisnis yang mudah diingat dapat menjadi tantangan, namun ini masih merupakan satu-satunya tip desain terpenting yang dapat diberikan oleh ahli strategi branding kepada Anda. Buat logo bisnis yang mudah diingat, mulai dari mendapatkan ide hingga menemukan desainer yang tepat.</p>
                            <a href="<?= base_url()?>/layanan" class="btn">Dapatkan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- We Create End -->
        <!-- Generating Start -->
         <!-- Testimonial Start -->
         <div class="testimonial-area">
            <div class="container">
               <div class="testimonial-main">
                    <!-- Section-tittle -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-5  col-md-8 pr-0">
                            <div class="section-tittle text-center">
                                <h2>Mengapa pakai Jasain?</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                            <div class="col-lg-10 col-md-9">
                                <div class="h1-testimonial-active">
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial text-center">
                                        <div class="testimonial-caption ">
                                            <div class="testimonial-top-cap">
                                                <p>Tidak harus mengeluarkan modal alias Free (hanya menggunakan komputer dan koneksi internet). Selain itu, Jasain dikerjakan oleh freelancer yang berpengalaman. Kamu bisa mendapatkan pelayanan sesuai dengan yang anda butuhkan</p>
                                            </div>
                                            <!-- founder -->
                                            <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                                <div class="founder-img">
                                                  
                                                </div>
                                            <div class="founder-text">
                                               
                                            </div>
                                            </div>
                                        </div>
                                    </div><!-- Single Testimonial -->
                                    <div class="single-testimonial text-center">
                                        <div class="testimonial-caption ">
                                            <div class="testimonial-top-cap">
                                                <p>Sistem mudah untuk dimengerti dan mudah digunakan. Anda bisa menjadi penjual atau pembeli jasa ngan sistem yang ada di Jasain. Selain itu, harga di Jasain juga terjangkau untuk kalangan menengah kebawah seperti pelajar dan mahasiswa.</p>
                                            </div>
                                            <!-- founder -->
                                            <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                                <div class="founder-img">
                                                    
                                                </div>
                                            <div class="founder-text">
                                               
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->
        
         <!-- have-project Start-->
         <div class="have-project">
            <div class="container">
                <div class="haveAproject"  data-background="<?= base_url()?>/assets/img/team/have.jpg">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-7 col-lg-9 col-md-12">
                            <div class="wantToWork-caption">
                                <h2>Apa bakat desain anda?</h2>
                                <p>Ayo peroleh penghasilan dengan bakat anda dengan menjadi freelance di Jasain. Kamu bisa menjadi penyedia jasa dengan bakat yang kamu miliki. Tunggu apa lagi? Ayo daftarkan dirimu sekarang </p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-3 col-md-12">
                           <div class="wantToWork-btn f-right">
                                <a href="<?= base_url()?>/" class="btn btn-ans">Daftar Sekarang</a>
                           </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- have-project End -->

    </main>
<?= $this->endSection(); ?>