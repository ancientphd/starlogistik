<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Harga</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Price</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Harga Layanan</h6>
                <h1 class="mb-4">Ramah Untuk UMKM</h1>
            </div>
            <div class="row">
                <?php foreach ($paket as $p): ?>
    <div class="col-md-4 mb-5">
        <div class="bg-secondary">
            <div class="text-center p-4">
                <h1 class="display-4 mb-0">
                    <small class="align-top text-muted font-weight-medium" style="font-size: 22px;">Rp</small>
                    <?= number_format($p['harga'], 0, ',', '.') ?>K
                    <small class="align-bottom text-muted font-weight-medium" style="font-size: 16px;">/Mo</small>
                </h1>
            </div>
            <div class="bg-primary text-center p-4">
                <h3 class="m-0"><?= esc($p['nama']) ?></h3>
            </div>
            <div class="d-flex flex-column align-items-center py-4">
                            <ul class="list-unstyled text-muted mb-4" style="min-height: 140px;">
                <?php foreach (explode(',', $p['fitur']) as $f): ?>
                    <li class="mb-1">- <?= trim($f); ?></li>
                <?php endforeach; ?>
            </ul>
                <a href="<?= site_url('price/form/' . $p['slug']) ?>" class="btn btn-primary">Pesan Sekarang</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>

            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


<?= $this->endSection() ?>


