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
            <h5 class="card-header text-center">Mata Kuliah</h5>

            <!-- Add the search form -->
            <form action="<?php echo e(route('matakuliah.search')); ?>"method="get" class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 mt-4 px-4">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Search by name">
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
                                <th>Kode Mata Kuliah</th>
                                <th>Mata Kuliah</th>
                                <th>Prodi</th>
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
                                <td><?php echo e($matkull->prodi); ?></td>
                                <td><?php echo e($matkull->semester); ?></td>
                                <td><?php echo e($matkull->sks); ?></td>

                                
                                <td class="text-center">
                                    <?php if(Auth::user()->role == 'admin'): ?>
                                    <a href="/matakuliah/<?php echo e($matkull->id); ?>/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Update</a>

                                    <form action="/matakuliah/<?php echo e($matkull->id); ?>" method="post" class="d-inline">
                                        <?php echo method_field('DELETE'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data')"><i class="fas fa-trash"></i> Delete</button>
                                    </form>
                                    <?php endif; ?>
                                    
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </tbody>





                    </table>
                </div>
            </div>

            <!-- Use the correct variable for pagination -->
            <div  class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 mt-2 px-4">
                <?php if(isset($mata_kuliahs) && $mata_kuliahs instanceof \Illuminate\Pagination\LengthAwarePaginator): ?>
                    <?php echo e($mata_kuliahs->links('pagination::bootstrap-5')); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\taalimfl\resources\views/matakuliah/index.blade.php ENDPATH**/ ?>