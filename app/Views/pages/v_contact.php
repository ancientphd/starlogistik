<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Kontak</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <div class="bg-primary text-dark text-center p-4">
                        <h4 class="m-0"><i class="fa fa-map-marker-alt text-white mr-2"></i>Jl. AR.Hakim No.21, Tegal</h4>
                    </div>
                    <iframe style="width: 100%; height: 470px;" 
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d57160.73193054193!2d109.13371027983925!3d-6.893028786208097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1754389481764!5m2!1sid!2sid" 
                        style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Hubungi Kami</h6>
                    <h1 class="mb-4">Hubungi Kami dari Seluruh Indonesia</h1>
                    <div class="contact-form bg-secondary" style="padding: 30px;">
                        <div id="success"></div>
                            <?php if(session()->getFlashdata('success')): ?>
                                <div class="alert alert-success">
                                    <?= session()->getFlashdata('success') ?>
                                </div>
                            <?php endif; ?>
                        <form action="<?= base_url('contact/simpan') ?>" method="post">
                            <div class="control-group">
                                <input name="nama" type="text" class="form-control border-0 p-4" placeholder="Nama Anda">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input name="email" type="email" class="form-control border-0 p-4" placeholder="Email Anda">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input name="telepon" type="text" class="form-control border-0 p-4" placeholder="Nomor Telepon Anda"
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input name="kategori" type="text" class="form-control border-0 p-4" placeholder="Keperluan">
                            </div><br>
                            <div class="control-group">
                                <textarea name="pesan" class="form-control border-0 py-3 px-4" rows="3" placeholder="Pesan Anda" rows="5"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-4" type="submit">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?= $this->endSection() ?>