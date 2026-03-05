
<?php $__env->startSection('title', 'Laporan Aspirasi'); ?>
<?php $__env->startSection('content'); ?>

<h4 class="mb-4 mt-3">Laporan Aspirasi</h4>

<?php if(session('success')): ?>
<div class="alert alert-success">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<div class="row">
    <!-- Detail laporan -->
    <div class="col-md-8">
        <?php echo $__env->make('admin.laporan.detil', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

    <!-- Form update status -->
    <div class="col-md-4">
        <?php echo $__env->make('admin.laporan.form-status', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/admin/laporan/show.blade.php ENDPATH**/ ?>