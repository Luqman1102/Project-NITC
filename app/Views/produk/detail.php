<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <main>
        <div class="we-padding">
            <div class="section-padding bg-light">
                <div class="container">
                    <h3>Saya akan <?= $detail['judul']; ?></h3>
                    <p>oleh <a class="text-primary" href="#"><?= $detail['username']; ?></a></p>
                    <div class="row justify-content-between mt-5">
                        <div class="col-7">
                            <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="container detail-produk">
                                            <img class="d-block w-100" src="/assets/images/signin-image.jpg" alt="First slide">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="container detail-produk">
                                            <img class="d-block w-100" src="/assets/images/signup-image.jpg" alt="Second slide">
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card mt-5 card-produk">
                                <div class="card-body my-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <h4 class="card-title">Harga</h4>
                                        </div>
                                        <div class="col-8">
                                            <?php $harga = number_format($detail['harga'], 2, ",", ".") ?>
                                            <h4 class="text-right">Rp<?= $harga ?></h4>
                                        </div>
                                    </div>
                                    <h6 class="card-subtitle my-2 text-muted">Deskripsi</h6>
                                    <p class="card-text"><?= $detail['deskripsi_produk'] ?></p>
                                    <h4><i class="fa fa-clock" aria-hidden="true"></i> <?= $detail["jumlah_revisi"]; ?> Revisi</h4>
                                    <div class="text-center mt-3">
                                        <a href="#" class="btn btn-success">Beli</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?= $this->endSection(); ?>