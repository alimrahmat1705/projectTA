        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="image">
                    <img src=<?php echo e(asset('img/logoti.png')); ?> class="img-circle elevation-2" alt="User Image" width="40px">
                </div>
                <div class="sidebar-brand-text mx-3">Teknologi Informasi </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <?php if(Auth::user()->role == 'admin' || Auth::user()->role == 'dosen' || Auth::user()->role == 'kaprodi'): ?>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="/">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>


                <!-- Divider -->
                <hr class="sidebar-divider">
            <?php endif; ?>

            <?php if(Auth::user()->role == 'admin'): ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Admin</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Fitur Admin:</h6>
                            <a class="collapse-item" href="<?php echo e(route('data-jurusan.index')); ?>">Jurusan</a>
                            <a class="collapse-item" href="<?php echo e(route('data-prodi.index')); ?>">Prodi</a>
                            <a class="collapse-item" href="<?php echo e(route('dosen.index')); ?>">Dosen</a>
                            <a class="collapse-item" href="/matakuliah">Mata Kuliah</a>
                            <a class="collapse-item" href="/kelas">Kelas</a>
                            <a class="collapse-item" href="/mahasiswa">Mahasiswa</a>
                            <a class="collapse-item" href="/user">User Registrasi</a>
                        </div>
                    </div>
                </li>
            <?php endif; ?>

            <?php if(Auth::user()->role == 'dosen' || Auth::user()->role == 'admin'): ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
                        aria-expanded="true" aria-controls="collapseUser">
                        <i class="fas fa-fw fa-user"></i>
                        <span>User</span>
                    </a>
                    <div id="collapseUser" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Fitur User:</h6>
                            <a class="collapse-item" href="/nilaimahasiswa">Nilai Mahasiswa</a>
                            <a class="collapse-item" href="/nilaibobot">Grade Nilai Mahasiswa</a>
                            <a class="collapse-item" href="/nilaiakhir">Nilai akhir</a>
                        </div>
                    </div>
                </li>
            <?php endif; ?>
            <?php if(Auth::user()->role == 'dosen' || Auth::user()->role == 'admin' || Auth::user()->role == 'kaprodi'): ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRps"
                        aria-expanded="true" aria-controls="collapseRps">
                        <i class="fas fa-fw fa-table"></i>
                        <span>RPS</span>
                    </a>
                    <div id="collapseRps" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Fitur RPS:</h6>
                            <a class="collapse-item" href="<?php echo e(route('data-judul.index')); ?>">Judul</a>
                            
                            <a class="collapse-item" href="<?php echo e(route('data-target.index')); ?>">Target Mingguan</a>
                            
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('data-rps.index')); ?>">
                        <i class="fas fa-print fa-2x text-gray-300"></i>
                        <span>Cetak RPS</span></a>
                </li>
            <?php endif; ?>


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->
<?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\TA\taalimfl\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>