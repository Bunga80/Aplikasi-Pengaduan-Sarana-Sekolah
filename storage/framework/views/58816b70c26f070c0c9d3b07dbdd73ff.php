

<?php $__env->startSection('content'); ?>
    <div class="card mt-3">
        <div class="card-body d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Riwayat Laporan Saya</h5>
            <a href="<?php echo e(route('siswa.laporan.create')); ?>" class="btn btn-primary btn-sm">
                <i class="bi bi-plus-circle"></i> Buat Pengaduan
            </a>
        </div>

        <?php if(session('success')): ?>
            <div class="card-body">
                <div class="alert alert-success alert-dismissible fade show">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        <?php endif; ?>

        <div class="card-body p-0 table-responsive">
            <?php echo $__env->make('siswa.partials.list-dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>

        <div class="card-footer pb-0">
            <?php echo e($laporan->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.siswa', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/siswa/dashboard.blade.php ENDPATH**/ ?>