<table class="table table-hover mb-0">
    <thead class="table-light">
        <tr>
            <th>#</th>
            <th>Keterangan Laporan</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($loop->iteration + ($laporan->firstItem() - 1)); ?></td>
            <td>
                <?php echo e($item->ket); ?>

                <p>
                    <small class="text-muted">
                        <?php echo e($item->created_at->format('d M Y')); ?>

                    </small>
                </p>
                <p class="text-muted">
                    Kategori : <?php echo e($item->kategori->nama_kategori ?? '-'); ?>,
                    Lokasi : <?php echo e($item->lokasi); ?>,
                    Feedback : <?php echo e($item->feedback); ?>

                </p>
            </td>
            <td>
                <?php if($item->status == 'proses'): ?>
                    <span class="badge bg-warning text-dark">Diproses</span>
                <?php elseif($item->status == 'selesai'): ?>
                    <span class="badge bg-success">Selesai</span>
                <?php else: ?>
                    <span class="badge bg-light text-dark">Menunggu</span>
                <?php endif; ?>
            </td>
            <td>
                <a href="<?php echo e(route('siswa.laporan.show', $item->id)); ?>" class="btn btn-sm btn-primary">
                    <i class="bi bi-eye"></i>
                </a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="6" class="text-center text-muted py-4">
                Belum ada laporan
            </td>
        </tr>
    <?php endif; ?>
</tbody>
</table><?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/siswa/partials/list-dashboard.blade.php ENDPATH**/ ?>