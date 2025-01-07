<?php $__env->startSection('menu', 'active'); ?>
<?php $__env->startSection('container'); ?>

<?php if(session()->has('pesan')): ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <i class="fas fa-check"></i> <?php echo e(session('pesan')); ?>

    </div>
<?php endif; ?>
<?php if(Auth::user()->role == 'dosen' || Auth::user()->role == 'admin'): ?>
<a href="/rp/create" class="btn btn-sm btn-primary"><i class="fas fa-arrow-down"></i> Insert</a>
<?php endif; ?>


<div class="row mt-4">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header text-center">RPS</h5>

            <!-- Add the search form -->
            

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Otorisasi</th>
                                <th>Capai Pembelajaran</th>
                                <th>Deskripsi Matkul</th>
                                <th>Deskripsi Bahan Kajian</th>
                                <th>Pustaka</th>
                                <th>Team Teaching</th>
                                <th>Tanggal Penyusunan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $rps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <tr>
                                <td class="text-center"><?php echo e($loop->iteration); ?></td>

                                <td><?php echo e($rp->matakuliah->matkul); ?></td>
                                <td><?php echo e($rp->sks); ?></td>
                                <td><?php echo e($rp->otorisasi->pe_rps); ?></td>
                                <td><?php echo e($rp->cplprodi->judul); ?></td>
                                <td><?php echo e($rp->desc_matkul); ?></td>
                                <td><?php echo e($rp->desc_bk); ?></td>
                                <td><?php echo e($rp->pustaka->utama); ?></td>
                                <td><?php echo e($rp->team->nama); ?></td>
                                <td><?php echo e($rp->tgl_penyusunan); ?></td>

                                
                                <td class="text-center">
                                    <a href="/rp/<?php echo e($rp->id); ?>/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Update</a>
                                    <a href="<?php echo e(route('rp.cetakrp', $rp->id)); ?>" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i> Pratinjau PDF</a>
                                    <a href="<?php echo e(route('cetak_pdf',$rp->id)); ?>" class="btn btn-primary" target="_blank">CETAK PDF</a>

                                    <form action="/rp/<?php echo e($rp->id); ?>" method="post" class="d-inline">
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
                <?php if(isset($rps) && $rps instanceof \Illuminate\Pagination\LengthAwarePaginator): ?>
                    <?php echo e($rps->links('pagination::bootstrap-5')); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\taalimfl\resources\views/rp/index.blade.php ENDPATH**/ ?>