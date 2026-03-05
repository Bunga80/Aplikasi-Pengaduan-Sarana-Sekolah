<?php if(auth()->guard('siswa')->check()): ?>
<li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('siswa.dashboard')); ?>">
        Dashboard
    </a>
</li>

<li class="'nav-item dropdown">
    <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown">
        <?php echo e(auth('siswa')->user()->nama); ?>

    </a>

    <ul class="dropdown-menu dropdown-menu-end shadow">
    <li>
        <a class="dropdown-item" href="<?php echo e(route('siswa.akun.edit')); ?>">
            <i class="bi bi-gear me-2"></i>
            Akun Saya
        </a>
    </li> 
    
    <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <form action="<?php echo e(route('siswa.logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="dropdown-item text-danger">
                    <i class="bi bi-box-arrow-right me-2"></i>
                    Logout
                </button>
            </form>
        </li>
    </ul>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/layouts/nav-items/siswa-auth.blade.php ENDPATH**/ ?>