<?php $__env->startSection('menu', 'active'); ?>
<?php $__env->startSection('container'); ?>

<?php if(session()->has('pesan')): ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <i class="fas fa-check"></i> <?php echo e(session('pesan')); ?>

    </div>
<?php endif; ?>
<?php if(Auth::user()->role == 'admin'): ?>

<a href="/kelas/create" class="btn btn-sm btn-primary"><i class="fas fa-arrow-down"></i> Insert</a>
<?php endif; ?>
<div class="row mt-4">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header text-center">KELAS</h5>

            <!-- Add the search form -->
            <form action="<?php echo e(route('kelas.search')); ?>"method="get" class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 mt-4 px-4">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Search by kelas">
                    <div class="input-group-append px-2">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">

                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Dosen</th>
                                <th>Kode Kelas MK</th>
                                <th>Prodi</th>
                                <th>Kelas</th>
                                <th>Mata Kuliah</th>
                                <th>Kode MK</th>
                                <th>SKS MK</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $kelasmahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas_mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($kelas_mahasiswa->user->nama); ?></td>
                                <td><?php echo e($kelas_mahasiswa->kode_kelasmk); ?></td>
                                <td><?php echo e($kelas_mahasiswa->prodi); ?></td>
                                <td><?php echo e($kelas_mahasiswa->kelas); ?></td>
                                <td><?php echo e($kelas_mahasiswa->matakuliah->matkul); ?></td>
                                <td><?php echo e($kelas_mahasiswa->kodemk); ?></td>
                                <td><?php echo e($kelas_mahasiswa->sksmk); ?></td>
                                

                                

                                
                                <td class="text-center">
            <?php if(Auth::user()->role == 'admin'): ?>

                                    <a href="/kelas/<?php echo e($kelas_mahasiswa->id); ?>/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Update</a>

                                    <form action="/kelas/<?php echo e($kelas_mahasiswa->id); ?>" method="post" class="d-inline">
                                        <?php echo method_field('DELETE'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data')"><i class="fas fa-trash"></i> Delete</button>
                                    </form>
                                    <?php endif; ?>
                                    <a href="<?php echo e(route('kelas.show', [$kelas_mahasiswa->id, 'matakuliah' => $kelas_mahasiswa->matakuliah->id])); ?>" class="btn btn-info btn-sm">
                                        <i class="fas fa-info-circle"></i> Detail
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Use the correct variable for pagination -->
            <div  class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 mt-2 px-4">
                <?php if(isset($kelas_mahasiswas ) && $kelas_mahasiswas  instanceof \Illuminate\Pagination\LengthAwarePaginator): ?>
                    <?php echo e($kelas_mahasiswas ->links('pagination::bootstrap-5')); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\taalimfl\resources\views/kelas/index.blade.php ENDPATH**/ ?>