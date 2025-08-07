<!-- app/Views/pages/v_home.php -->
<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Hero Start -->
<div class="jumbotron jumbotron-fluid mb-5 bg-dark text-white">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mb-3">Star Logistic</h1>
        <p class="lead mb-4">Kami Antar, Anda Berkembang</p>
        <a href="<?= base_url('price') ?>" class="btn btn-primary btn-lg">Lihat Paket</a>
    </div>
</div>
<!-- Hero End -->

<!-- About Start -->
<section id="about" class="py-5">
    <div class="container text-center">
        <h2 class="mb-4">Tentang Kami</h2>
        <p class="lead">Star Logistic adalah solusi pengiriman terpercaya untuk UMKM dan bisnis online. Kami hadir untuk mempercepat pertumbuhan bisnismu dengan layanan logistik efisien, aman, dan terjangkau.</p>
        <a class="border-bottom text-decoration-none" href="<?= base_url('about') ?>">Baca Selengkapnya</a>
    </div>
</section>
<!-- About End -->

<!-- Layanan Start -->
<section id="layanan" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4">Layanan Kami</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Pengiriman Cepat</h5>
                        <p class="card-text">Layanan same-day dan next-day delivery dengan jangkauan nasional.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Tracking Real-Time</h5>
                        <p class="card-text">Pantau perjalanan paket secara langsung dengan sistem pelacakan kami.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Harga Terjangkau</h5>
                        <p class="card-text">Paket logistik fleksibel dan ramah untuk kantong UMKM.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="border-bottom text-decoration-none" href="<?= base_url('service') ?>">Baca Selengkapnya</a>
    </div>
</section>
<!-- Layanan End -->


<?= $this->endSection() ?>

