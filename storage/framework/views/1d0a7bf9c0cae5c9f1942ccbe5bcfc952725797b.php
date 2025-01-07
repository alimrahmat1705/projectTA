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
                <h5 class="card-header">KELAS</h5>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Dosen</th>
                                    <th>Kode Kelas</th>
                                    <th>Prodi</th>
                                    <th>Kelas</th>
                                    <th>Mata Kuliah</th>
                                    <th>Kode MK</th>
                                    <th>SKS MK</th>
                                    <th>Action</th>
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
                                                <a href="/kelas/<?php echo e($kelas_mahasiswa->id); ?>/edit"
                                                    class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i>
                                                    Update</a>

                                                <form action="/kelas/<?php echo e($kelas_mahasiswa->id); ?>" method="post"
                                                    class="d-inline">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm my-1"
                                                        onclick="return confirm('Yakin akan menghapus data')"><i
                                                            class="fas fa-trash"></i> Delete</button>
                                                </form>
                                            <?php endif; ?>
                                            <a href="<?php echo e(route('kelas.show', [$kelas_mahasiswa->id, 'matakuliah' => $kelas_mahasiswa->matakuliah->id])); ?>"
                                                class="btn btn-info btn-sm">
                                                <i class="fas fa-info-circle"></i> Detail
                                            </a>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\TA\taalimfl\resources\views/kelas/index.blade.php ENDPATH**/ ?>