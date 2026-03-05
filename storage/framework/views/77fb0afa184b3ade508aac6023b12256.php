<div class="mb-4">
    <div class="text-muted small mb-2">Feedback Kepuasan</div>

    <?php if($laporan->aspirasi?->feedback): ?>
        
        <div class="alert alert-success mb-0">
            Feedback telah diberikan:
            <strong>
                <?php echo e([
                    1 => 'Tidak Puas',
                    2 => 'Kurang Puas',
                    3 => 'Cukup Puas',
                    4 => 'Puas',
                    5 => 'Sangat Puas',
                ][$laporan->aspirasi->feedback] ?? '-'); ?>

            </strong>
        </div>

    <?php else: ?>
        
        <form action="<?php echo e(route('siswa.laporan.feedback', $laporan->aspirasi->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="d-flex flex-column gap-2">
                <?php $__currentLoopData = [1=>'Tidak Puas',2=>'Kurang Puas',3=>'Cukup Puas',4=>'Puas',5=>'Sangat Puas']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nilai => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label class="d-flex align-items-center gap-2">
                        <input type="radio" name="feedback" value="<?php echo e($nilai); ?>">
                        <span><?php echo e($label); ?></span>
                    </label>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <?php $__errorArgs = ['feedback'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger small mt-2">
                    <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <button class="btn btn-primary btn-sm mt-3">
                Kirim Feedback
            </button>
        </form>
    <?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/siswa/laporan/feedback.blade.php ENDPATH**/ ?>