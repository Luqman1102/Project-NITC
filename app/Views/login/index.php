<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="we-padding">
        <div style="background-image: -webkit-linear-gradient(0deg, #39A352 0%, #376555 100%);">
            <div class="container">
                <div class="row justify-content-center pt-4 pb-5">
                    <div class="col-lg-8 d-flex">
                        <img style="width: 206px" class="mx-auto" src="<?= base_url()?>/assets/img/logo/logo-jasain-putih.png" data-holder-rendered="true">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5 mb-5">
                        <div class="border bg-white rounded shadow p-4">
                            <h2 class="contact-title">Login</h2>
                            <?php if (session()->getFLashdata('error')) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session()->getFLashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <form method="POST" action="/Login">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input name="username" type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('username'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn header-btn">Masuk</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-5">
                        <div class="border bg-white rounded shadow p-4 mb-5">
                            <h2 class="contact-title">Register</h2>
                            <p class="text-dark">Belum punya akun? Daftar sekarang sebagai</p>
                            <a href="/register-pembeli" class="button btn-block button-contactForm boxed-btn boxed-btn-jasain">Pembeli</a>
                            <p class="my-2 text-center">Atau</p>
                            <a href="/register-penjual" class="button btn-block button-contactForm boxed-btn boxed-btn-jasain">Penjual</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</main>

<?= $this->endSection(); ?>
