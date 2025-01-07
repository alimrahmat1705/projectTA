<?php $__env->startSection('menu', 'active'); ?>
<?php $__env->startSection('container'); ?>

<?php if(session()->has('pesan')): ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <i class="fas fa-check"></i> <?php echo e(session('pesan')); ?>

    </div>
<?php endif; ?>
<a href="/nilaimahasiswa/create" class="btn btn-sm btn-primary"><i class="fas fa-arrow-down"></i> Insert</a>
<div class="row mt-4">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header text-center">SKS</h5>

            <!-- Add the search form -->
            

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>nama</th>
                                <th>mata kuliah</th>
                                <th>sikap</th>
                                <th>tugas</th>
                                <th>kompetensi</th>
                                <th>bobot</th>
                                <th>nilai akhir</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $nilai_mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nilai_mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($nilai_mahasiswa->mahasiswa->nama); ?></td>
                                <td><?php echo e($nilai_mahasiswa->nilaibobot->matakuliah->matkul); ?></td>
                                <td><?php echo e($nilai_mahasiswa->sikap); ?></td>
                                <td><?php echo e($nilai_mahasiswa->tugas); ?></td>
                                <td><?php echo e($nilai_mahasiswa->kompetensi); ?></td>
                                <td><?php echo e($nilai_mahasiswa->bobot); ?></td>
                                <td><?php echo e($nilai_mahasiswa->nilai_akhir); ?></td>
                                
                                <td class="text-center">
                                    <a href="/nilaimahasiswa/<?php echo e($nilai_mahasiswa->id); ?>/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Update</a>

                                    <form action="/nilaimahasiswa/<?php echo e($nilai_mahasiswa->id); ?>" method="post" class="d-inline">
                                        <?php echo method_field('DELETE'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data')"><i class="fas fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Use the correct variable for pagination -->
            <div  class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 mt-2 px-4">
                <?php if(isset($nilai_mahasiswas) && $nilai_mahasiswas instanceof \Illuminate\Pagination\LengthAwarePaginator): ?>
                    <?php echo e($nilai_mahasiswas->links('pagination::bootstrap-5')); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\taalimfl\resources\views/nilaimahasiswa/index.blade.php ENDPATH**/ ?>