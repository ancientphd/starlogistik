<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>">


<div class="container mt-5">
    <h2>Form Pemesanan</h2>

    <form action="<?= site_url('price/save') ?>" method="post">
        <input type="hidden" name="paket_id" value="<?= $paket['id'] ?>">

        <div class="mb-3">
            <label>Catatan</label>
            <textarea name="catatan" class="form-control" placeholder="Masukkan catatan tambahan..."></textarea>
        </div>

        <button type="submit" class="btn btn-success">Kirim Order</button>
    </form>
</div>

<?= $this->endSection() ?>
