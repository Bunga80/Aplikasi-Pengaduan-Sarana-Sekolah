<div class="card shadow-sm">
    <div class="card-header bg-white">
        <strong>Laporan Terbaru</strong>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Siswa</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $laporanTerbaru ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->siswa->nama ?? '-'); ?></td>
                        <td><?php echo e($item->kategori->nama_kategori ?? '-'); ?></td>
                        <td>
                            <?php
                                $badge = $item->aspirasi?->status === 'selesai'
                                    ? 'success' : 'danger';
                            ?>
                            <span class="badge bg-<?php echo e($badge); ?>">
                                <?php echo e(ucfirst($item->aspirasi?->status ?? 'baru')); ?>

                            </span>
                        </td>
                        <td><?php echo e($item->created_at->format('d M Y')); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5" class="text-center text-muted py-3">
                            Belum ada laporan
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/admin/list-laporan.blade.php ENDPATH**/ ?>