<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="services-area">
        <div class="container">
            <div style="background-image: -webkit-linear-gradient(0deg, #39A352 0%, #376555 100%);" class="rounded">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 mt-3">
                        <div class="section-tittle section-tittle-sm text-center mb-1">
                            <span>Kategori</span>
                            <h2 class="text-white">Cari Jasa​</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 mb-3">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="/layanan" method="post">
                                    <div class="form-group">
                                        <div class="input-group input-group-sm mb-3">
                                            <input type="search" class="form-control round-left" placeholder='Coba "Jasa Desain Poster"' name="keyword" value="<?= ucwords($keyword);?>">
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
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center">
                        <h3>Hasil Pencarian untuk "<?= ucwords($keyword);?>"​</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                    <?php foreach($produk as $p) :?>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card mb-4 box-shadow produk p-sm-0">
                            <div class="bg-light thumbnail-product">
                                <a href="">
                                    <img class="card-img-top h-100 product-cover border-bottom" src="<?= base_url()?>/assets/images/media-produk/<?= $p['media']?>" data-holder-rendered="true">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="" class="card-text card-teks"><?= $p['judul']?></a>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <small class="rating-wrapper">
                                    <span class="star-rating-s15 show-one"></span>
                                    <span class="rating-number"><?php foreach($bintang as $b){ if($p['username']==$b->username_penjual&&$p['judul']==$b->judul){ echo number_format(round($b->rata_bintang,1),1,'.','.');}} ?></span>
                                    <span class="text-muted">(<?php foreach($bintang as $b){ if($p['username']==$b->username_penjual&&$p['judul']==$b->judul){ echo $b->jumlah_review;}} ?>)</span>
                                </small>
                                <a href="" class="card-price">Rp <?= number_format($p['harga'],0,',','.')?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <?= $pager->links('produk', 'produk_pagination');?>
                    </div>
            </div>

        </div>
    </div>
</main>
<?= $this->endSection(); ?>