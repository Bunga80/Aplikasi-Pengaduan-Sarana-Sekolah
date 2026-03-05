<?php if(auth()->guard('siswa')->guest()): ?>
<li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('siswa.login')); ?>">
        Login
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('siswa.register')); ?>">
        Daftar?
    </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/layouts/nav-items/siswa-guest.blade.php ENDPATH**/ ?>