

<?php $__env->startSection('title', 'Laporan Pengaduan'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="card-title mb-0">
                Laporan Pengaduan
            </h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-8">

                    
                    <div class="mb-4">
                        <div class="text-muted small">Kategori</div>
                        <div class="fw-semibold">
                            <?php echo e($laporan->kategori->nama_kategori ?? '-'); ?>

                        </div>
                    </div>

                    
                    <div class="mb-4">
                        <div class="text-muted small">Lokasi Kejadian</div>
                        <div class="fw-semibold">
                            <?php echo e($laporan->lokasi); ?>

                        </div>
                    </div>

                    
                    <div class="mb-4">
                        <div class="text-muted small">Keterangan</div>
                        <div>
                            <?php echo e($laporan->ket); ?>

                        </div>
                    </div>

                    
                    <?php echo $__env->make('siswa.laporan.tanggapan', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                    
                    <?php if($laporan->aspirasi?->status == 'selesai'): ?>
                        <?php echo $__env->make('siswa.laporan.feedback', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endif; ?>

                    <a href="<?php echo e(route('siswa.dashboard')); ?>" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i>
                        Kembali
                    </a>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.siswa', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/siswa/laporan/show.blade.php ENDPATH**/ ?>