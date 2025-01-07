<?php $__env->startSection('menu', 'active'); ?>
<?php $__env->startSection('container'); ?>

<?php if(session()->has('pesan')): ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <i class="fas fa-check"></i> <?php echo e(session('pesan')); ?>

    </div>
<?php endif; ?>

<a href="<?php echo e(route('nilaibobot.show', $kelasmahasiswas->id)); ?>" class="btn btn-info btn-sm">
    <i class="fas fa-info-circle"></i> Detail
</a>
<div class="row mt-4">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">


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
                                <th>Nama mahasiswa</th>
                                
                                <th>Tugas</th>
                                <th>Kuis</th>
                                <th>Uts</th>
                                <th>Uas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>

                                <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($mahasiswa->nama); ?></td>
                                
                                

                                <td class="text-center">

                                    <a href="<?php echo e(route('mahasiswa.show', ['id' => $mahasiswa->id, 'matakuliah' => $mahasiswa->matakuliah->id])); ?>" class="btn btn-info btn-sm">
                                        <i class="fas fa-info-circle"></i> Detail
                                    </a>
                                </td>
                                <td class="text-center">

                                    <a href="<?php echo e(route('mahasiswak.show',  ['id' => $mahasiswa->id, 'matakuliah' => $mahasiswa->matakuliah->id])); ?>" class="btn btn-info btn-sm">
                                        <i class="fas fa-info-circle"></i> Detail
                                    </a>
                                </td>
                                <td class="text-center">

                                    <a href="<?php echo e(route('mahasiswauts.show', ['id' => $mahasiswa->id, 'matakuliah' => $mahasiswa->matakuliah->id])); ?>" class="btn btn-info btn-sm">
                                        <i class="fas fa-info-circle"></i> Detail
                                    </a>
                                </td>
                                <td class="text-center">

                                    <a href="<?php echo e(route('mahasiswauas.show', ['id' => $mahasiswa->id, 'matakuliah' => $mahasiswa->matakuliah->id])); ?>" class="btn btn-info btn-sm">
                                        <i class="fas fa-info-circle"></i> Detail
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                        </tbody>
                    </table>
                    <div  class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 mt-2 px-4">
                        <?php if(isset($mahasiswas) && $mahasiswas instanceof \Illuminate\Pagination\LengthAwarePaginator): ?>
                            <?php echo e($mahasiswas->links('pagination::bootstrap-5')); ?>

                        <?php endif; ?>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 ">
                        <button class="btn btn-primary btn-sm" type="submit" name="submit"><i class=" fas fa-edit"> Update</i></button>
                        <a href="/matakuliah" class="btn btn-primary btn-sm"><i class=" fas fa-reply"> Back</i></a>
                    </div>

                    

                </div>
            </div>
        </div>
    </div>
</div><br>

<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#ratarata"> Click Rata-Rata</button>
<div id="ratarata" class="collapse">
<div class="row mt-4">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Mahasiswa</th>
                                <th>Rata-Rata Tugas</th>
                                <th>Rata-Rata Kuis</th>
                                <th>Rata-Rata Uts</th>
                                <th>Rata-Rata Uas</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                           
                           

                           <?php $__currentLoopData = $mahasiswas_rata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nilai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                            
                               <td class="text-center"><?php echo e($loop->iteration); ?></td>
                               <td><?php echo e($nilai->nama); ?></td>
                               

                               <?php $__currentLoopData = $nilai->nilairata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nilairata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td><?php echo e(round($nilairata->tugas)); ?></td>
                                    <td><?php echo e(round($nilairata->kuis)); ?></td>
                                    <td><?php echo e(round($nilairata->uts)); ?></td>
                                    <td><?php echo e(round($nilairata->uas)); ?></td>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                               <td class="text-center">
                                   <a href="/nilairata/<?php echo e($nilai->id); ?>/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Update</a>

                                   <form action="/nilairata/<?php echo e($nilai->id); ?>" method="post" class="d-inline">
                                       <?php echo method_field('DELETE'); ?>
                                       <?php echo csrf_field(); ?>
                                       <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data')"><i class="fas fa-trash"></i> Delete</button>
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

                                                    <form id="form_create_bobot">
                                                    

                                                    <label for="validationCustom01">Bobot Tugas</label>
                                                        <input type="number"  class="form-control  <?php $__errorArgs = ['bobot_tugas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('bobot_tugas')); ?>" name="bobot_tugas" id="bobot_tugas" >
                                                        <?php $__errorArgs = ['bobot_tugas'];
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
                                                    <label for="validationCustom01">Bobot Kuis</label>

                                                        <input type="number"  class="form-control  <?php $__errorArgs = ['bobot_kuis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('bobot_kuis')); ?>" name="bobot_kuis" id="bobot_kuis" >
                                                        <?php $__errorArgs = ['bobot_kuis'];
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
                                                    <label for="validationCustom01">Bobot Uts</label>

                                                        <input type="number"  class="form-control  <?php $__errorArgs = ['bobot_uts'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('bobot_uts')); ?>" name="bobot_uts" id="bobot_uts" >
                                                        <?php $__errorArgs = ['bobot_uts'];
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
                                                    <label for="validationCustom01">Bobot Uas</label>

                                                        <input type="number"  class="form-control  <?php $__errorArgs = ['bobot_uas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('bobot_uas')); ?>" name="bobot_uas" id="bobot_uas" >
                                                        <?php $__errorArgs = ['bobot_uas'];
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

  </div>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Tambah Bobot
  </button>
                </div>
        </div>
    </div>
</div>
</div>





<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\taalim\resources\views/kelas/detail.blade.php ENDPATH**/ ?>