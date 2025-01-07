<?php $__env->startSection('menu', 'active'); ?>
<?php $__env->startSection('container'); ?>

    <?php if(session()->has('pesan')): ?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <i class="fas fa-check"></i> <?php echo e(session('pesan')); ?>

        </div>
    <?php endif; ?>
    <?php if(Auth::user()->role == 'admin'): ?>
        <a href="/matakuliah/create" class="btn btn-sm btn-primary"><i class="fas fa-arrow-down"></i> Insert</a>
    <?php endif; ?>
    <div class="row mt-4">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Mata Kuliah</h5>

                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Matkul</th>
                                    <th>Mata Kuliah</th>
                                    <th>Jurusan</th>
                                    <th>Prodi</th>
                                    <th>Dosen</th>
                                    <th>Semester</th>
                                    <th>Sks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $matakuliah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matkull): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($matkull->kode_mk); ?></td>
                                        <td><?php echo e($matkull->matkul); ?></td>
                                        <td><?php echo e($matkull->jurusan->nama_jurusan ?? '-'); ?></td>
                                        <td><?php echo e($matkull->prodi->nama_prodi ?? '-'); ?></td>
                                        <td><?php echo e($matkull->dosen->nama ?? '-'); ?></td>
                                        <td><?php echo e($matkull->semester); ?></td>
                                        <td><?php echo e($matkull->sks); ?></td>

                                        <td class="text-center">
                                            <?php if(Auth::user()->role == 'admin'): ?>
                                                <a href="/matakuliah/<?php echo e($matkull->id); ?>/edit"
                                                    class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i>
                                                    Update</a>

                                                <form action="/matakuliah/<?php echo e($matkull->id); ?>" method="post"
                                                    class="d-inline">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Yakin akan menghapus data')"><i
                                                            class="fas fa-trash"></i> Delete</button>
                                                </form>
                                            <?php endif; ?>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\taalimfl\resources\views/matakuliah/index.blade.php ENDPATH**/ ?>