<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Tentang Kami</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">About</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="<?= base_url('asset/img/starabout.png') ?>" alt="">
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Tentang Kami</h6>
                    <h1 class="mb-4">StarLogistic - Kami Antar, Anda Berkembang</h1>
                    <p class="mb-4">Dengan pengalaman lebih dari 25 tahun, kami hadir sebagai solusi logistik terpercaya yang mengutamakan kecepatan, keamanan, dan kepuasan pelanggan. Armada modern dan tim profesional kami siap melayani pengiriman barang Anda ke seluruh wilayah dengan efisien.

Kami berkomitmen untuk memberikan layanan logistik yang tepat waktu dan terpercaya, baik untuk kebutuhan bisnis, maupun ekspor. Percayakan pengiriman Anda kepada kami, karena kami mengerti bahwa setiap menit sangat berharga dalam dunia logistik.</p>
                </div>
            </div>
        </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid w-100" src="<?= base_url('asset/img/starlogi2.png') ?>" alt="">
                </div>
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Kenapa harus memilih kami</h6>
                    <h1 class="mb-4">Cepat, Aman, Terpercaya</h1>
                    <p class="mb-4">Layanan logistik kami dirancang untuk memenuhi kebutuhan pengiriman Anda dengan efisiensi maksimal dan keamanan tinggi. Dengan pengalaman dan teknologi modern, kami memberikan kepercayaan penuh dalam setiap pengiriman, baik darat, laut, maupun udara.

Dari layanan industri terbaik hingga dukungan darurat dan bantuan pelanggan 24 jam, kami adalah mitra logistik andalan Anda dalam mengantarkan barang secara tepat waktu dan tanpa hambatan.</p>
                    <ul class="list-inline">
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Best In Industry</h6>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Emergency Services</h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>24/7 Customer Support</h6></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Features End -->
<?= $this->endSection() ?>