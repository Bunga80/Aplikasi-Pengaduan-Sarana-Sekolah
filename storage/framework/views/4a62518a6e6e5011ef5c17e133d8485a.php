
<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>
<div action="" class="card shadow-sm" style="width: 400px;">
    <div class="card-header text-center">
        <h5 class="card-title mb-0">Login Siswa</h5>
    </div>
    <form class="card-body" method="post" action="<?php echo e(route('siswa.login')); ?>">
        <?php echo csrf_field(); ?>

        
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-person"></i>
                </span>
                <input type="text" class="form-control <?php $__errorArgs = ['nis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nis" placeholder="NIS">
            </div>
            <?php $__errorArgs = ['nis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback d-block">
                <?php echo e($message); ?>

            </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="d-grid mb-2">
            <button type="submit" class="btn btn-primary">
                Login
            </button>
        </div>
        <p class="text-center">
            Belum punya akun?
            <a href="<?php echo e(route('siswa.register')); ?>">Daftar Baru</a>
        </p>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/siswa/auth/login.blade.php ENDPATH**/ ?>