<!-- resources/views/barang/index.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Daftar Barang</h1>
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Deskripsi Barang</th>
                    <th>Satuan Barang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($item->kode_barang); ?></td>
                        <td><?php echo e($item->nama_barang); ?></td>
                        <td><?php echo e($item->harga_barang); ?></td>
                        <td><?php echo e($item->deskripsi_barang); ?></td>
                        <td><?php echo e($item->satuan ? $item->satuan->nama_satuan : 'Satuan tidak tersedia'); ?></td>
                        <td>
                            <a href="<?php echo e(route('barang.show', $item->id)); ?>" class="btn btn-primary">Detail</a>
                            <a href="<?php echo e(route('barang.edit', $item->id)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('barang.destroy', $item->id)); ?>" method="POST" style="display: inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6">Tidak ada data barang.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <a href="<?php echo e(route('barang.create')); ?>" class="btn btn-success">Tambah Barang</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SI pemrograman framework\masterBarangUts\resources\views/barang/index.blade.php ENDPATH**/ ?>