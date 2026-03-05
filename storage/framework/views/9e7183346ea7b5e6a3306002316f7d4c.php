
<?php $__env->startSection('title', 'Kategori'); ?>
<?php $__env->startSection('content'); ?>
    <h4 class="mb-3 mt-3">Kategori</h4>

    <div class="card mb-3">
        <div class="card-body">
            <a href="<?php echo e(route('admin.kategori.create')); ?>" class="btn btn-primary mb-3">
                + Tambah Kategori
            </a>

            <?php if(session('success')): ?>
                <div class="alert alert-success mt-3"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th>Nama Kategori</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->nama_kategori); ?></td>
                            <td>
                                <a href="<?php echo e(route('admin.kategori.edit', $item->id)); ?>"
                                    class="btn btn-sm btn-warning">Edit</a>

                                <form action="<?php echo e(route('admin.kategori.destroy', $item->id)); ?>" 
                                    method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Hapus kategori ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="3" class="text-center">Data kosong</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer pb-0">
            <?php echo e($kategori->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\app-apss-bunga\resources\views/admin/kategori/index.blade.php ENDPATH**/ ?>