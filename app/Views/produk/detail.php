<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <main>
        <div class="we-padding">
            <div class="section-padding bg-light">
                <div class="container">
                    <h3>Saya akan <?= $detail['judul']; ?></h3>
                    <p>oleh <a class="text-primary" href="#"><?= $detail['username']; ?></a></p>
                    <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= base_url('assets/images/signin-image.jpg') ?>" alt="First slide">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between mt-5">
                        <div class="col-7 border py-3 px-3 my-5">
                            <h2>Detail Produk</h2>
                            <hr width="35%">
                            <p class=""><?= $detail['deskripsi_produk'] ?></p>
                        </div>
                        <div class="col-4 border-left border-top border-right py-3 px-3 my-5">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h2>Harga</h2>
                                </div>
                                <div class="col-sm-8">
                                    <h3 class="text-right">Rp <?= number_format($detail['harga'], 2, ",", ".") ?></h3>
                                </div>
                            </div>
                            <h4 class="mt-5"><i class="fa fa-clock" aria-hidden="true"></i> <?= $detail["jumlah_revisi"]; ?> Revisi</h4>
                            <div class="text-center mt-5">
                                <a href="#" class="btn btn-success">Beli</a>
                            </div>
                        </div>
                    </div>
                    <h2 class="my-3 mt-5">Ulasan</h2>
                    <?php
                    if ($kondisi == Null) : ?>
                        <div class="row">
                            <div class="col-sm-auto">
                                <form action="/ulasan" method="POST">
                                    <?= csrf_field() ?>
                                    <div class="rating">
                                        <label>
                                            <input type="radio" name="stars" value="1" />
                                            <span class="icon">★</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="stars" value="2" />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="stars" value="3" />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="stars" value="4" />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="stars" value="5" />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                        </label>
                                    </div>
                                    <input type="hidden" name="judul" value="<?= $detail['judul'] ?>">
                                    <input type="hidden" name="username_pembeli" value="<?= session('username') ?>">
                                    <input type="hidden" name="username_penjual" value="<?= $detail['username'] ?>">
                                    <input type="hidden" name="id_produk" value="<?= $detail['id'] ?>">
                                    <textarea class="textarea-review" name="isi" cols="100" rows=2 placeholder="Masukkan Komentar Anda"></textarea>
                                    <div class="text-right">
                                        <a type="submit" class="btn header-btn mt-3 ">Tambah Ulasan</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="mt-5"></div>
                    <?php foreach ($review as $r) : ?>
                        <hr>
                        <h5><?= $r['username_pembeli']; ?> &emsp;<span class="icon" style="color: gold;">★ <?= $r['bintang'] ?></span></h5>
                        <p><?= $r['isi'] ?></p>
                    <?php endforeach; ?>
                    <hr>
                </div>
            </div>
        </div>
    </main>
    <?= $this->endSection(); ?>