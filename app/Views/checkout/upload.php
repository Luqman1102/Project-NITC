<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="we-padding">
        <div class="py-lg-5 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="border p-4 bg-white h-100">
                            <h2 class="contact-title text-center">Silahkan transfer di salah satu bank berikut:</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Bank</th>
                                        <th scope="col" class="text-center">Atas Nama</th>
                                        <th scope="col" style="width: 12rem;">No. Rekening</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="<?= base_url()?>/assets/img/preview/bank-bri.png" alt="" style="max-width:80px;"></td>
                                        <td class="text-center">JASAIN</td>
                                        <td>034 031 010 987 999</td>
                                    </tr>
                                    <tr>
                                        <td><img src="<?= base_url()?>/assets/img/preview/bank-mandiri.png" alt="" style="max-width:80px;"></td>
                                        <td class="text-center">JASAIN</td>
                                        <td>0700 010 385 999</td>
                                    </tr>
                                    <tr>
                                        <td><img src="<?= base_url()?>/assets/img/preview/bank-bni.png" alt="" style="max-width:80px;"></td>
                                        <td class="text-center">JASAIN</td>
                                        <td>017 936 8999</td>
                                    </tr>
                                    <tr>
                                        <td><img src="<?= base_url()?>/assets/img/preview/bank-bca.png" alt="" style="max-width:80px;"></td>
                                        <td class="text-center">JASAIN</td>
                                        <td>731 025 7999</td>
                                    </tr>
                                    <tr>
                                        <td><img src="<?= base_url()?>/assets/img/preview/bank-mega.png" alt="" style="max-width:80px;"></td>
                                        <td class="text-center">JASAIN</td>
                                        <td>0100 1007 4842 999</td>
                                    </tr>
                                    <tr>
                                        <td><img src="<?= base_url()?>/assets/img/preview/bank-danamon.png" alt="" style="max-width:80px;"></td>
                                        <td class="text-center">JASAIN</td>
                                        <td>0058 6247 99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="border p-4 bg-white h-100">
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
    </div>
</main>

<?= $this->endSection(); ?>
