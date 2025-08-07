<?= $this->extend('layoutadmin') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h3 class="mb-4">Kelola Quote</h3>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Layanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($quotes)) : ?>
                    <?php $no = 1; foreach ($quotes as $quote) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= esc($quote['name']) ?></td>
                            <td><?= esc($quote['email']) ?></td>
                            <td><?= esc($quote['service']) ?></td>
                            <td>
                                <form action="<?= base_url('admin/quote/delete/' . $quote['id']) ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data quote</td>
                    </tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
