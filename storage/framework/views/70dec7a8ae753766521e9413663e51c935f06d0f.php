<?php $__env->startSection('menu', 'active'); ?>
<?php $__env->startSection('container'); ?>
    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    Data Konten
                </div>
                <div class="card-body">
                    <a href="<?php echo e(route('data-konten.create')); ?>" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i>
                        Tambah Data
                    </a>
                    <div class="d-flex justify-content-end mb-2"> <!-- Use d-flex and justify-content-end to move to the right -->
                        <a href="<?php echo e(route('data-capaian.index')); ?>" class="btn btn-primary btn-sm mr-2">
                            <i class=""></i>
                            Back
                        </a>
                    </div>
                    <div class="table-responsive my-3">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Dosen</th>
                                    <th>Judul</th>
                                    <th>SubJudul</th>
                                    <th>Konten</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $kontens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($data->dosen->user->nama  ?? '-'); ?></td>
                                        <td><?php echo e($data->judul->nama_judul ?? '-'); ?></td>
                                        <td><?php echo e($data->subjudul->nama_subjudul ?? '-'); ?></td>
                                        <td><?php echo e($data->isi_konten ?? '-'); ?></td>
                                        <td>
                                            <form action="<?php echo e(route('data-konten.destroy', $data->id)); ?>" method="POST"
                                                class="d-flex">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <a href="<?php echo e(route('data-konten.edit', $data->id)); ?>"
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\TA\taalimfl\resources\views/rps/kontent/index.blade.php ENDPATH**/ ?>