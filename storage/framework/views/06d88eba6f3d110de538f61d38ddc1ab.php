<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php if (! empty(trim($__env->yieldContent('title')))): ?>
        <?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name')); ?>

        <?php else: ?>
        <?php echo e(config('app.name')); ?>

        <?php endif; ?>
    </title>
    <link rel="stylesheet" href="<?php echo e(asset('bs/font/bootstrap-icons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bs/css/bootstrap.min.css')); ?>">
    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body>
    <?php echo $__env->yieldContent('body'); ?>
    <script src="<?php echo e(asset('bs/js/bootstrap.bundle.min.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/layouts/main.blade.php ENDPATH**/ ?>