<?php $__env->startSection('menu', 'active'); ?>
<?php $__env->startSection('container'); ?>

    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    Tambahkan Data
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('data-metode.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label>Dosen</label>
                            <select name="dosen_id" class="form-control">
                                <option value="" selected>Pilih Dosen</option>
                                <?php $__currentLoopData = $dosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Minggu</label>
                            <select name="target_id" class="form-control">
                                <option value="" selected>Pilih Minggu</option>
                                <?php $__currentLoopData = $targets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->minggu); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Bentuk Metode</label>
                            <input type="text" name="bentuk_metode" class="form-control"
                                placeholder="Masukan nama bentuk metode">
                        </div>
                        <div class="mb-3">
                            <label>Kondisi Metode</label>
                            <input type="text" name="kondisi_metode" class="form-control"
                                placeholder="Masukan nama kondisi metode">
                        </div>
                        <div class="mb-3">
                            <label>Pengalaman Metode</label>
                            <input type="text" name="pengalaman_metode" class="form-control"
                                placeholder="Masukan nama pengalaman metode">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                            <a href="<?php echo e(route('data-metode.index')); ?>" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\taalimfl\resources\views/rps/metode/create.blade.php ENDPATH**/ ?>