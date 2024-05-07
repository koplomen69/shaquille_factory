<!-- resources/views/barang/edit.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Edit Barang</h1>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('barang.update', $barang->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="kode_barang" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?php echo e(old('kode_barang', $barang->kode_barang)); ?>" required>
            </div>
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo e(old('nama_barang', $barang->nama_barang)); ?>" required>
            </div>
            <div class="mb-3">
                <label for="harga_barang" class="form-label">Harga Barang</label>
                <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="<?php echo e(old('harga_barang', $barang->harga_barang)); ?>" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                <textarea class="form-control" id="deskripsi_barang" name="deskripsi_barang"><?php echo e(old('deskripsi_barang', $barang->deskripsi_barang)); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="satuan_id" class="form-label">Satuan Barang</label>
                <select class="form-select" id="satuan_id" name="satuan_id" required>
                    <?php $__currentLoopData = $satuans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $satuan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($satuan->id); ?>" <?php echo e(old('satuan_id', $barang->satuan_id) == $satuan->id ? 'selected' : ''); ?>><?php echo e($satuan->nama_satuan); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="<?php echo e(route('barang.index')); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SI pemrograman framework\masterBarangUts\resources\views/barang/edit.blade.php ENDPATH**/ ?>