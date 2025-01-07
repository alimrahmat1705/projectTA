<?php $__env->startSection('menu', 'active'); ?>
<?php $__env->startSection('container'); ?>
    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    Data Jurusan
                </div>
                <div class="card-body">
                    <a href="<?php echo e(route('data-jurusan.create')); ?>" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i>
                        Tambah Data
                    </a>
                    <div class="table-responsive my-3">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $jurusans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($data->nama_jurusan ?? '-'); ?></td>
                                        <td>
                                            <form action="<?php echo e(route('data-jurusan.destroy', $data->id)); ?>" method="POST"
                                                class="d-flex">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <a href="<?php echo e(route('data-jurusan.edit', $data->id)); ?>"
                                                    class="btn btn-sm btn-primary mx-2">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Apakah anda yakin untuk menghapus data ini?');">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\taalimfl\resources\views/rps/jurusan/index.blade.php ENDPATH**/ ?>