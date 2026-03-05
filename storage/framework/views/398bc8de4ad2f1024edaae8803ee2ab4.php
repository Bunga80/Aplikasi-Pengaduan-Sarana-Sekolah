<table class="table table-striped mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Siswa</th>
            <th>Kategori</th>
            <th>Laporan</th>
            <th>Status</th>
            <th>Feedback</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($loop->iteration + $laporan->firstItem() - 1); ?></td>
            <td><?php echo e($item->siswa->nama ?? '-'); ?></td>
            <td><?php echo e($item->kategori->nama_kategori ?? '-'); ?></td>
            <td><?php echo e(Str::limit($item->ket, 50)); ?></td>
            <td>
                <?php if($item->status === 'selesai'): ?> <span class="badge bg-success">Selesai</span>
                <?php elseif($item->status === 'proses'): ?> <span class="badge bg-warning">Proses</span>
                <?php else: ?> <span class="badge bg-secondary">Belum Diproses</span> <?php endif; ?>
            </td>
            <td><?php echo e($item->feedback); ?></td>
            <td><a href="<?php echo e(route('admin.laporan.show', $item->id)); ?>" class="btn btn-sm btn-primary">Detail</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
        <tr>
            <td colspan="7" class="text-center">Data tidak tersedia</td>
        </tr> 
        <?php endif; ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/admin/laporan/list.blade.php ENDPATH**/ ?>