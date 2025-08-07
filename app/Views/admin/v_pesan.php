<?= $this->extend('layoutadmin') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h2>Data Pesan Masuk</h2>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Kategori</th>
                <th>Pesan</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($pesan)): ?>
                <tr><td colspan="8" class="text-center">Tidak ada pesan.</td></tr>
            <?php else: ?>
                <?php foreach ($pesan as $index => $item): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= esc($item['nama']) ?></td>
                        <td><?= esc($item['email']) ?></td>
                        <td><?= esc($item['telepon']) ?></td>
                        <td><?= esc($item['kategori']) ?></td>
                        <td><?= esc($item['pesan']) ?></td>
                        <td><?= esc($item['created_at']) ?></td>
                        <td>
                            <a href="<?= base_url('admin/pesan/delete/' . $item['id']) ?>" 
                               onclick="return confirm('Yakin ingin menghapus pesan ini?')" 
                               class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
