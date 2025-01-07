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
            <h5 class="card-header text-center">Uas</h5>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Uas</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                           <h6>Rata-Rata Uas : <?php echo e($rata_rata['uas']); ?><br></h6>
                           

                           <?php $__currentLoopData = $all_nilai_uas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr id="items">
                               <td class="text-center"><?php echo e($loop->iteration); ?></td>
                               <td><?php echo e($item->mahasiswa->nama); ?></td>
                               <td><a href="" class="editable" data-type="text" data-name="uas" data-pk="<?php echo e($item->id); ?>"><?php echo e($item->uas); ?></td>
                               <td class="text-center">
                               <form action="/nilaiuas//hapusuas/<?php echo e($item->id); ?>" method="post" class="d-inline">
                                   <?php echo method_field('DELETE'); ?>
                                   <?php echo csrf_field(); ?>
                                   <button type="submit" class= "btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data')"><i class="fas fa-trash"></i> Delete</button>
                               </form>

                       

                       </td>
                       </tr>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                                        <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <label for="validationCustom01">uas</label>
            <form id="form_create_nilai_uas">
                <input type="hidden" name="mahasiswa_id" id="mahasiswa_id" value="<?php echo e($id); ?>">
                <input type="hidden" name="matakuliah_id" id="matakuliah_id" value="<?php echo e($_GET['matakuliah']); ?>">
                <input type="number"  class="form-control  <?php $__errorArgs = ['uas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('uas')); ?>" name="uas" id="uas" >
                <?php $__errorArgs = ['uas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
      </div>
    </div>
  </div>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Tambah Uas
  </button>
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







<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\taalimfl\resources\views/mahasiswa/detailuas.blade.php ENDPATH**/ ?>