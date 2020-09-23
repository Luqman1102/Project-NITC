<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="we-padding">
        <div class="section-padding bg-light">
            <div class="container">
                <h2 class="contact-title">Review</h2>
                <?php foreach ($review as $r) : ?>
                    <div class="border mt-5 px-3 pt-3">
                        <h4><?= $r->username ?></h4>
                        <p><i class="fa fa-star" style="color:gold" aria-hidden="true"></i> <?= $r->bintang ?></p>
                        <p><?= $r->isi ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main> <?= $this->endSection(); ?>