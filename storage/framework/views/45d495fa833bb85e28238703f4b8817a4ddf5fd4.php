<?php $__env->startSection('menu', 'active'); ?>
<?php $__env->startSection('container'); ?>

    <?php if(session()->has('pesan')): ?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <i class="fas fa-check"></i> <?php echo e(session('pesan')); ?>

        </div>
    <?php endif; ?>

    <form action="/nilaiakhir" method="get">

        <div class="row">
            <div class="col-lg-5">
                <select name="mata_kuliah_id" class="form-control">
                    <option value="">Pilih Matakuliah</option>
                    <?php $__currentLoopData = $matakuliah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matakuliah_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($matakuliah_data->id); ?>"><?php echo e($matakuliah_data->matkul); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-">
                <button type="submit" class="btn btn-info">Cari</button>
            </div>
        </div>
    </form>

    <div class="row mt-3">
        <div class="col-lg">
            <a href="<?php echo e(route('cetaknilaiakhirpreview')); ?>" class="btn btn-success"><i class="fas fa-eye"></i>
                Pratinjau
                PDF</a>
            <a href="<?php echo e(route('cetaknilaiakhir')); ?>" class="btn btn-warning" target="_blank">CETAK PDF</a>
            <a href="<?php echo e(route('exportnilaiakhir')); ?>" class="btn btn-primary" target="_blank">CETAK CSV</a>

            
            

        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header text-center">Rata Rata</h5>


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Mahasiswa</th>
                                    <th>Kompetensi</th>
                                    <th>Sikap</th>
                                    <th>Tugas</th>
                                    <th>Nilai Akhir</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $__currentLoopData = $nilaiakhir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nilai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($nilai->mahasiswa->nama); ?></td>
                                        <td><?php echo e($nilai->kompetensi); ?></td>
                                        <td><?php echo e($nilai->sikap); ?></td>
                                        <td><?php echo e($nilai->tugas); ?></td>
                                        <td><?php echo e($nilai->nilaiakhir); ?></td>

                                        <td class="text-center">

                                            

                                            <form action="/nilaiakhir/<?php echo e($nilai->id); ?>" method="post" class="d-inline">
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

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <form id="form_create_nilaiakhir">
                                            

                                            <label for="validationCustom01">Mahasiswa </label>
                                            <select class="form-control  <?php $__errorArgs = ['mahasiswa_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('mahasiswa_id')); ?>" name="mahasiswa_id" id="mahasiswa_nama"
                                                required>
                                                <option value="" disabled selected>Nama</option>
                                                <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nilai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($nilai->id); ?>"><?php echo e($nilai->nama); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['mahasiswa_id'];
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

                                            <label for="validationCustom01">Matakuliah </label>
                                            <select class="form-control  <?php $__errorArgs = ['mata_kuliah_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('mata_kuliah_id')); ?>" name="mata_kuliah_id"
                                                id="mata_kuliah_id" required>
                                                <option value="" disabled selected>Nama</option>
                                                <?php $__currentLoopData = $matakuliah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nilai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($nilai->id); ?>"><?php echo e($nilai->matkul); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['mata_kuliah_id'];
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


                                            <label for="validationCustom01">Kompetensi </label>
                                            <select class="form-control  <?php $__errorArgs = ['kompetensi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('kompetensi')); ?>" name="kompetensi" id="kompeten" required>
                                                <option value="" disabled selected>Nilai</option>
                                            </select>
                                            <?php $__errorArgs = ['kompetensi'];
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
                                            <label for="validationCustom01">sikap </label>
                                            <select class="form-control  <?php $__errorArgs = ['sikap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('sikap')); ?>" name="sikap" id="sikap" required>
                                                <option value="" disabled selected>Nilai</option>
                                            </select>
                                            <?php $__errorArgs = ['sikap'];
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
                                            <label for="validationCustom01">tugas </label>
                                            <select class="form-control  <?php $__errorArgs = ['tugas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('tugas')); ?>" name="tugas" id="tugas" required>
                                                <option value="" disabled selected>Nilai</option>
                                            </select>
                                            <?php $__errorArgs = ['tugas'];
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
                                            <label for="validationCustom01">Nilai Akhir</label>

                                            <input type="number"
                                                class="form-control  <?php $__errorArgs = ['nilaiakhir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('nilaiakhir')); ?>" name="nilaiakhir" id="nilaiakhir">
                                            <?php $__errorArgs = ['nilaiakhir'];
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
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>



                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php if(Auth::user()->role == 'dosen' || Auth::user()->role == 'admin'): ?>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#exampleModalLong">
                            Tambah Nilai
                        </button>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Use the correct variable for pagination -->
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 mt-2 px-4">
                <?php if(isset($nilai) && $nilai instanceof \Illuminate\Pagination\LengthAwarePaginator): ?>
                    <?php echo e($nilai->links('pagination::bootstrap-5')); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\TA\taalimfl\resources\views/nilaiakhir.blade.php ENDPATH**/ ?>