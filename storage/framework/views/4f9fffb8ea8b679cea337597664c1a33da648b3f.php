<?php $__env->startSection('menu', 'active'); ?>
<?php $__env->startSection('container'); ?>

    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('data-target.update', $targets->id)); ?>" method="POST">
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label>Dosen</label>
                            <select name="dosen_id" class="form-control">
                                <option value="" selected>Pilih Dosen</option>
                                <?php $__currentLoopData = $dosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"
                                        <?php echo e($data->id == $targets->dosen_id ? 'selected' : ''); ?>><?php echo e($data->nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Minggu Ke</label>
                            <input type="text" name="minggu" class="form-control" placeholder="Masukan minggu ke"
                                value="<?php echo e($targets->minggu); ?>">
                        </div>
                        <div class="mb-3">
                            <label>Waktu</label>
                            <input type="text" name="waktu" class="form-control" placeholder="Masukan waktu"
                                value="<?php echo e($targets->waktu); ?>">
                        </div>
                        <div class="mb-3">
                            <label>Teknik</label>
                            <input type="text" name="teknik" class="form-control" placeholder="Masukan teknik"
                                value="<?php echo e($targets->teknik); ?>">
                        </div>
                        <div class="mb-3">
                            <label>Indikator</label>
                            <input type="text" name="indikator" class="form-control" placeholder="Masukan indikator"
                                value="<?php echo e($targets->indikator); ?>">
                        </div>
                        <div class="mb-3">
                            <label>Bobot</label>
                            <input type="text" name="bobot" class="form-control" placeholder="Masukan bobot"
                                value="<?php echo e($targets->bobot); ?>">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                            <a href="<?php echo e(route('data-target.index')); ?>" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\taalimfl\resources\views/rps/target/edit.blade.php ENDPATH**/ ?>