<?php $__env->startSection('menu', 'active'); ?>
<?php $__env->startSection('container'); ?>

    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('data-konten.update', $kontens->id)); ?>" method="POST">
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label>Dosen</label>
                            <select name="dosen_id" class="form-control">
                                <option value="" selected>Pilih Dosen</option>
                                <?php $__currentLoopData = $dosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"
                                        <?php echo e($data->id == $kontens->dosen_id ? 'selected' : ''); ?>><?php echo e($data->nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Judul</label>
                            <select name="judul_id" class="form-control">
                                <option value="" selected>Pilih Judul</option>
                                <?php $__currentLoopData = $juduls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"
                                        <?php echo e($data->id == $kontens->judul_id ? 'selected' : ''); ?>><?php echo e($data->nama_judul); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>SubJudul</label>
                            <select name="subjudul_id" class="form-control">
                                <option value="" selected>Pilih Subjudul</option>
                                <?php $__currentLoopData = $subjuduls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        value="<?php echo e($data->id); ?>"<?php echo e($data->id == $kontens->subjudul_id ? 'selected' : ''); ?>>
                                        <?php echo e($data->nama_subjudul); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Nama Subjudul</label>
                            <textarea name="isi_konten" id="" cols="30" rows="10" class="form-control"><?php echo e($kontens->isi_konten); ?></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                            <a href="<?php echo e(route('data-konten.index')); ?>" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\taalimfl\resources\views/rps/kontent/edit.blade.php ENDPATH**/ ?>