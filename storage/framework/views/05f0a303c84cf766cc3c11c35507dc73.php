<div class="card mb-3">
    <div class="card-body">
        <table class="table table-borderless">
            <tr>
                <th width="200">Nama Siswa</th>
                <td><?php echo e($laporan->siswa->nama); ?></td>
            </tr>
            <tr>
                <th width="200">NIS</th>
                <td><?php echo e($laporan->siswa->nis); ?></td>
            </tr>
            <tr>
                <th width="200">Kelas</th>
                <td><?php echo e($laporan->siswa->kelas); ?></td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td><?php echo e($laporan->kategori->nama_kategori); ?></td>
            </tr>
            <tr>
                <th>Laporan</th>
                <td><?php echo e($laporan->ket); ?></td>
            </tr>
            <tr>
                <th>Lokasi</th>
                <td><?php echo e($laporan->lokasi); ?></td>
            </tr>
            <tr>
                <th>Status Saat Ini</th>
                <td>
                    <?php if($laporan->aspirasi?->status === 'selesai'): ?>
                    <span class="badge bg-success">Selesai</span>
                    <?php elseif($laporan->aspirasi?->status === 'proses'): ?>
                    <span class="badge bg-warning">Proses</span>
                    <?php else: ?>
                    <span class="badge bg-secondary">Belum Diproses</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th>Feedback Kepuasan</th>
                <td>
                    <span class="badge bg-info">
                        <?php echo e($laporan->feedback); ?>

                    </span>
                </td>
            </tr>
        </table>
    </div>
</div><?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/admin/laporan/detil.blade.php ENDPATH**/ ?>