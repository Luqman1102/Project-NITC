<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="we-padding">
        <div class="py-5 bg-light">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-2 border p-4 bg-white h-100">
                        <div class="footer-area">
                            <div class="footer-tittle">
                                <h4 class="mb-4">Profil Saya</h4>
                                <ul>
                                    <li><a href="http://localhost:8080/index.html" class="menu-aktif">Profil</a></li>
                                    <li><a href="http://localhost:8080/about.html" class="menu-tidak-aktif">Produk Jasa</a></li>
                                    <li><a href="http://localhost:8080/single-blog.html" class="menu-tidak-aktif">Pesanan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 border p-4 bg-white">
                        <h2>Profilku</h2>
                        <p>Kelola informasi profil anda untuk mengontrol, melindungi, dan mengamankan akun</p>
                        <hr>
                        <div class="container-fluid">
                            <form>
                                <?= csrf_field(); ?>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control " id="staticEmail" placeholder="Your email">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticNama" class="col-sm-4 col-form-label">Nama</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control " id="staticNama" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticTelepon" class="col-sm-4 col-form-label">No Telepon </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control " id="staticTelepon" placeholder="62+">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inlineRadio" class="col-sm-5 col-form-label">Jenis Kelamin </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-4 col-form-label">Tanggal Lahir</label>
                                    <div class="col-6">
                                        <input class="form-control" type="date" id="example-date-input">
                                    </div>
                                </div> <br>
                                <button type="submit" class="genric-btn primary radius">Simpan</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

</main>

<?= $this->endSection(); ?>