<!-- resources/views/barang/show.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Detail Barang</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($barang->nama_barang); ?></h5>
                <p class="card-text"><strong>Kode Barang:</strong> <?php echo e($barang->kode_barang); ?></p>
                <p class="card-text"><strong>Harga Barang:</strong> <?php echo e($barang->harga_barang); ?></p>
                <p class="card-text"><strong>Deskripsi Barang:</strong> <?php echo e($barang->deskripsi_barang); ?></p>
                <p class="card-text"><strong>Satuan Barang:</strong> <?php echo e($barang->satuan->nama_satuan); ?></p>
            </div>
        </div>
        <a href="<?php echo e(route('barang.index')); ?>" class="btn btn-primary mt-3">Kembali ke Daftar Barang</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SI pemrograman framework\masterBarangUts\resources\views/barang/show.blade.php ENDPATH**/ ?>