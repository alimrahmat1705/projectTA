<?php $__env->startSection('menu', 'active'); ?>
<?php $__env->startSection('container'); ?>

    <?php if(session()->has('pesan')): ?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <i class="fas fa-check"></i> <?php echo e(session('pesan')); ?>

        </div>
    <?php endif; ?>
    <a href="/user/create" class="btn btn-sm btn-primary"><i class="fas fa-arrow-down"></i> Insert</a>
    <div class="row mt-4">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">User</h5>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>NIP</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($user->nama); ?></td>
                                        <td><?php echo e($user->nip); ?></td>
                                        <td><?php echo e($user->role); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td class="text-center">
                                            <a href="/user/<?php echo e($user->id); ?>/edit" class="btn btn-primary btn-sm"><i
                                                    class="fas fa-pencil-alt"></i> Update</a>

                                            <form action="/user/<?php echo e($user->id); ?>" method="post" class="d-inline">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Yakin akan menghapus data')"><i
                                                        class="fas fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Use the correct variable for pagination -->
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 mt-2 px-4">
                    <?php if(isset($users) && $users instanceof \Illuminate\Pagination\LengthAwarePaginator): ?>
                        <?php echo e($users->links('pagination::bootstrap-5')); ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\TA\taalimfl\resources\views/user/index.blade.php ENDPATH**/ ?>