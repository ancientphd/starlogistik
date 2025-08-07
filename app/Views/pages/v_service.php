<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Layanan Kami</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Service</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Layanan Kami</h6>
                <h1 class="mb-4">Layanan Terbaik Kami</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-plane text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Pengiriman Udara</h6>
                    </div>
                    <p>Layanan pengiriman lewat udara yang cepat dan efisien, cocok untuk barang prioritas dengan tujuan domestik maupun internasional.</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-ship text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Pengiriman Laut</h6>
                    </div>
                    <p>Solusi pengiriman via laut dengan biaya efisien dan kapasitas besar. Ideal untuk pengiriman dalam jumlah besar ke seluruh dunia.</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-truck text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Pengiriman Darat</h6>
                    </div>
                    <p>Layanan pengangkutan darat untuk distribusi antar kota dan antar provinsi dengan armada terbaik dan waktu pengiriman yang tepat.</p>
                   
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-store text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Gudang Cargo</h6>
                    </div>
                    <p>Kami menyediakan fasilitas penyimpanan barang yang aman dan terjamin, cocok untuk kebutuhan jangka pendek maupun panjang.</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!--  Quote Request Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 py-5 py-lg-0">
                    <h1 class="mb-4">Minta Penawaran Layanan Untuk Bisnis</h1>
                    <p class="mb-4">Ingin tahu biaya pengiriman atau solusi logistik untuk bisnis Anda? Isi formulir di samping, dan tim kami akan memberikan penawaran terbaik sesuai kebutuhan Anda — cepat, akurat, dan tanpa biaya!</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">225</h1>
                            <h6 class="font-weight-bold mb-4">SKilled Experts</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">1050</h1>
                            <h6 class="font-weight-bold mb-4">Happy Clients</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">2500</h1>
                            <h6 class="font-weight-bold mb-4">Complete Projects</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">

<form action="<?= base_url('service/submit') ?>" method="post" class="py-5">
    <div class="form-group">
        <input type="text" name="name" class="form-control border-0 p-4" placeholder="Nama Anda" required />
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control border-0 p-4" placeholder="Email Anda" required />
    </div>
    <div class="form-group">
        <select name="service" class="custom-select border-0 px-4" style="height: 47px;" required>
            <option value="">Pilih Layanan</option>
            <option value="1">Udara</option>
            <option value="2">Laut</option>
            <option value="3">Darat</option>
        </select>
    </div>
    <div>
        <button class="btn btn-dark btn-block border-0 py-3" type="submit">Get A Quote</button>
    </div>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Request Start -->

    <?= $this->endSection() ?>