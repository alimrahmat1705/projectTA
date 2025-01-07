<?php $__env->startSection('menu', 'active'); ?>
<?php $__env->startSection('container'); ?>

<?php if(session()->has('pesan')): ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <i class="fas fa-check"></i> <?php echo e(session('pesan')); ?>

    </div>
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
                                <th>Nama Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $matakuliahs->kelasmahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas_mahasiswas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($kelas_mahasiswas->nama); ?></td>
                                
                                <td class="text-center">

                                    <a href="<?php echo e(route('kelas.show', $kelas_mahasiswas->id)); ?>" class="btn btn-info btn-sm">
                                        <i class="fas fa-info-circle"></i> Detail
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </tbody>


                    </table>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 ">
                        <button class="btn btn-primary btn-sm" type="submit" name="submit"><i class=" fas fa-edit"> Update</i></button>
                        <a href="/matakuliah" class="btn btn-primary btn-sm"><i class=" fas fa-reply"> Back</i></a>
                    </div>
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



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\taalimfl\resources\views/matakuliah/detail.blade.php ENDPATH**/ ?>