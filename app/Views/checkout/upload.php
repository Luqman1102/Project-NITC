<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="we-padding">
        <div class="py-lg-5 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 border p-4 bg-white">
                        <h2 class="contact-title text-center">Upload Bukti Pembayaran</h2>
                        <form method="POST" action="/checkout/save" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="d-flex justify-content-between">
                                <img src="<?= base_url()?>/assets/img/preview/preview-bukti-pembayaran.jpg" alt="Bukti Pembayaran" class="img-preview img-thumbnail mb-3 mx-auto d-block" style="height: 50vh; width: 100vw; object-fit: contain; background-color:#f0f3f0; padding:0">
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="bukti_pembayaran" class="custom-file-input <?= ($validation->hasError('bukti_pembayaran')) ? 'is-invalid' : ''; ?>" id="bukti_pembayaran" onchange="previewImg()">
                                    <label class="custom-file-label" for="bukti_pembayaran">Pilih File..</label>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('bukti_pembayaran'); ?>
                                </div>
                            </div>
                            <input name="id" type="hidden" id="id" value="<?= $id;?>">
                            <button type="submit" class="btn header-btn">Konfirmasi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection(); ?>