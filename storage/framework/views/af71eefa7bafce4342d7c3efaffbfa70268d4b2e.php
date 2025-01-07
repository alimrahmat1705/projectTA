<?php $__env->startSection('menu', 'active'); ?>
<?php $__env->startSection('container'); ?>

    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('data-judul.update', $juduls->id)); ?>" method="POST">
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label>Dosen</label>
                            <select name="dosen_id" class="form-control">
                                <option value="" selected>Pilih Dosen</option>
                                <?php $__currentLoopData = $dosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"
                                        <?php echo e($data->id == $juduls->dosen_id ? 'selected' : ''); ?>><?php echo e($data->user->nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Nama Judul</label>
                            <input type="text" name="nama_judul" class="form-control" placeholder="Masukan nama judul"
                                value="<?php echo e($juduls->nama_judul); ?>">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                            <a href="<?php echo e(route('data-judul.index')); ?>" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\TA\taalimfl\resources\views/rps/judul/edit.blade.php ENDPATH**/ ?>