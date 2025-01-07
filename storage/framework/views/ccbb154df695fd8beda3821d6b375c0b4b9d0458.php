<?php $__env->startSection('menu', 'active'); ?>
<?php $__env->startSection('container'); ?>

<?php if(session()->has('pesan')): ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <i class="fas fa-check"></i> <?php echo e(session('pesan')); ?>

    </div>
<?php endif; ?>
<a href="/mahasiswa/create" class="btn btn-sm btn-primary"><i class="fas fa-arrow-down"></i> Insert</a>
<form action="/mahasiswa" method="get">
<select name="kelas_id">
    <option value="">Pilih Kelas</option>
    <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($kelas->id); ?>"><?php echo e($kelas->kode_kelasmk); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

<select name="mata_kuliah_id">
    <option value="">Pilih Matakuliah</option>
    <?php $__currentLoopData = $matakuliah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matakuliah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($matakuliah->id); ?>"><?php echo e($matakuliah->matkul); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<button type="submit">Cari</button>
</form>


<div class="row mt-4">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header text-center">Mahasiswa</h5>

            <!-- Add the search form -->
            

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>nama</th>
                                <th>nama</th>
                                <th>kelas</th>
                                <th>mata kuliah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($mahasiswa->nama); ?></td>
                                <td><?php echo e($mahasiswa->nobp); ?></td>
                                <td><?php echo e($mahasiswa->kelas->kode_kelasmk); ?></td>
                                <td><?php echo e($mahasiswa->matakuliah->matkul); ?></td>
                                
                                <td class="text-center">
                                    <a href="/mahasiswa/<?php echo e($mahasiswa->id); ?>/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Update</a>

                                    <form action="/mahasiswa/<?php echo e($mahasiswa->id); ?>" method="post" class="d-inline">
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
                <?php if(isset($mahasiswas) && $mahasiswas instanceof \Illuminate\Pagination\LengthAwarePaginator): ?>
                    <?php echo e($mahasiswas->links('pagination::bootstrap-5')); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\taalimfl\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>