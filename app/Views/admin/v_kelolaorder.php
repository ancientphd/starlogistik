<?= $this->extend('layoutadmin') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h2>Kelola Order</h2>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Paket ID</th>
                <th>Catatan</th>
                <th>Tanggal Order</th>
                <th>Status</th>
                <th>Dibuat</th>
                <th>Diperbarui</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $order['id'] ?></td>
                    <td><?= $order['user_id'] ?></td>
                    <td><?= $order['paket_id'] ?></td>
                    <td><?= esc($order['catatan']) ?></td>
                    <td><?= $order['tanggal_order'] ?></td>
                    <td><?= esc($order['status']) ?></td>
                    <td><?= $order['created_at'] ?></td>
                    <td><?= $order['updated_at'] ?></td>
                    <td>
                        <a href="<?= base_url('admin/order/delete/'.$order['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus order ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
