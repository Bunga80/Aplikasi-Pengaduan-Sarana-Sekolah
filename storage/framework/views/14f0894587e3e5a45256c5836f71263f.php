<div class="mb-4">
    <div class="text-muted small">Tanggapan</div>
    <?php if($laporan->aspirasi?->status === 'selesai'): ?>
        <span class="badge bg-success">
            <i class="bi bi-check-circle"></i>
            <?php echo e(ucwords($laporan->aspirasi?->status)); ?>

        </span>
    <?php elseif($laporan->aspirasi?->status === 'proses'): ?>
        <span class="badge bg-warning">
            <i class="bi bi-hourglass-split"></i>
            <?php echo e(ucwords($laporan->aspirasi?->status)); ?>

        </span>
    <?php else: ?>
        <span class="badge bg-light text-dark">
            <i class="bi bi-hourglass-split"></i>
            Menunggu
        </span>

        
        <form action="<?php echo e(route('siswa.laporan.destroy', $laporan->id)); ?>"
            method="POST" class="d-inline ms-3"
            onsubmit="return confirm('Yakin ingin menghapus laporan ini?')">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>

            <button class="btn btn-link text-danger p-0 align-baseline">
                <i class="bi bi-trash"></i>
                Hapus Laporan ini
            </button>
        </form>
    <?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/siswa/laporan/tanggapan.blade.php ENDPATH**/ ?>