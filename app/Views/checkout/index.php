<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="we-padding">
        <div class="py-lg-5 bg-white">
            <div class="container">
                <div class="row h-100">
                    <div class="col-lg-12 text-center mb-3">
                        <h2>Checkout</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="card border-0 rounded-lg shadow">
                            <div class="row no-gutters">
                                <div class="col-md-4 p-2">
                                <img src="<?= base_url()?>/assets/images/media-produk/<?= $produk['media']?>" class="card-img product-cover  thumbnail-product" alt="">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body p-2">
                                    <h4 class="card-title"><?= $produk['judul']?></h4>
                                    <small class="rating-wrapper">
                                        <span class="star-rating-s15 <?=$rate?>"></span>
                                        <span class="rating-number"><?= $bintang->rata_bintang?></span>
                                        <span class="text-muted">(<?= $bintang->jumlah_review?> review)</span>
                                    </small>
                                    <p class="card-text"><?= $produk['deskripsi_produk']?></p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 border p-4 bg-white">
                        <h4>Rincian</h4>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-price">Harga</p>
                            <p class="card-price font-weight-bold">Rp <?= number_format($produk['harga'],0,',','.')?></p>
                        </div>
                        <hr>
                        <h4>Masukkan Data</h4>
                        <form method="POST" action="/checkout/pesan">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="no_rekening">Nomor Rekening</label>
                                <input name="no_rekening" type="text" class="form-control <?= ($validation->hasError('no_rekening')) ? 'is-invalid' : ''; ?>" id="no_rekening" value="<?= old('no_rekening') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('no_rekening'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_rekening">Atas Nama</label>
                                <input name="nama_rekening" type="text" class="form-control <?= ($validation->hasError('nama_rekening')) ? 'is-invalid' : ''; ?>" id="nama_rekening" value="<?= old('nama_rekening') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_rekening'); ?>
                                </div>
                            </div>
                            <input name="judul" type="hidden" id="judul" value="<?= $produk['judul'];?>">
                            <input name="username" type="hidden" id="username" value="<?= $produk['username'];?>">
                            <input name="jumlah_revisi" type="hidden" id="jumlah_revisi" value="<?= $produk['jumlah_revisi'];?>">
                            <input name="harga" type="hidden" id="harga" value="<?= $produk['harga'];?>">
                            <button type="submit" class="btnt btn-lg btn-block">Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?= $this->endSection(); ?>