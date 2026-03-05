<nav class="navbar navbar-expand-lg bg-light shadow-sm" data-bs-theme="light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('welcome')); ?>">
            <?php echo e(config('app.name')); ?>

        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php echo $__env->make('layouts.nav-items.admin-auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/layouts/navbar/admin.blade.php ENDPATH**/ ?>