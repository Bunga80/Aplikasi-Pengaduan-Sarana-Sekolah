
<?php $__env->startSection('body'); ?>
<?php echo $__env->make('layouts.navbar.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/layouts/admin.blade.php ENDPATH**/ ?>