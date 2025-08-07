<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="<?= base_url('/') ?>" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-truck mr-2"></i>starlogistic</h1>
        </a>
            
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a class="nav-link <?= (uri_string() == '') ? 'active' : '' ?>" href="<?= base_url('/') ?>">Beranda</a>
                <a class="nav-link <?= (uri_string() == 'about') ? 'active' : '' ?>" href="<?= base_url('about') ?>">Tentang Kami</a>
                <a class="nav-link <?= (uri_string() == 'service') ? 'active' : '' ?>" href="<?= base_url('service') ?>">Layanan</a>
                <a class="nav-link <?= (uri_string() == 'price') ? 'active' : '' ?>" href="<?= base_url('price') ?>">Harga</a>
                <a class="nav-link <?= (uri_string() == 'contact') ? 'active' : '' ?>" href="<?= base_url('contact') ?>">Kontak</a>
            </div>
           
            <div class="nav-item dropdown ms-lg-3" id="authDropdown">
    <?php if (session()->get('isLoggedIn')): ?>
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="dropdownMenuButton">
            <i class="bi bi-person-circle me-1"></i>
            <?= session()->get('username'); ?> (<?= session()->get('role'); ?>)
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
        <?php
            if (session()->get('role') == 'admin') {
        ?>
            <a class="dropdown-item" href="<?= base_url('admin/dashboard') ?>">
                <i class="bi bi-person-lines-fill me-2"></i>Admin
            </a>
        <?php
        }
        ?>
            <a class="dropdown-item" href="<?= base_url('logout') ?>">
                <i class="bi bi-box-arrow-right me-2"></i>Keluar
            </a>
        </div>

    <?php else: ?>
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="dropdownMenuButton">
            <i class="bi bi-person-circle me-1"></i> MASUK
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="<?= base_url('login') ?>">
                <i class="bi bi-box-arrow-in-right me-2"></i>Masuk
            </a>
         <!--   <a class="dropdown-item" href="">
                <i class="bi bi-person-plus me-2"></i>Daftar
            </a> -->
        </div>
    <?php endif; ?>
</div>
        </div>
    </nav>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownToggle = document.getElementById('dropdownMenuButton');

        if (dropdownToggle) {
            dropdownToggle.addEventListener('click', function (e) {
                e.preventDefault();
                const dropdownMenu = dropdownToggle.nextElementSibling;

                if (dropdownMenu && dropdownMenu.classList.contains('dropdown-menu')) {
                    dropdownMenu.classList.toggle('show');
                }
            });
        }
    });
</script>