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

            <?php if(Auth::user()->role == 'admin'|| Auth::user()->role == 'dosen' || Auth::user()->role == 'kaprodi'): ?>
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
            <!-- Heading -->
            <div class="sidebar-heading">
               Admin
            </div>
            <li class="nav-item">
                <a class="nav-link" href="/user">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    <span>User</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/matakuliah">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    <span>Mata Kuliah</span></a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="/kelas">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>Kelas</span></a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="/mahasiswa">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>Mahasiswa</span></a>
                </li>
            <hr class="sidebar-divider">

<?php endif; ?>


            <!-- Nav Item - Pages Collapse Menu -->



            <!-- Nav Item - Utilities Collapse Menu -->


            <!-- Divider -->

            <!-- Heading -->
            <div class="sidebar-heading">
               User
            </div>

            <!-- Nav Item - Pages Collapse Menu -->


            <!-- user -->


            <?php if(Auth::user()->role == 'dosen' || Auth::user()->role == 'admin'): ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    <span>Input RPS</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="/otorisasi">Otorisasi</a>
                        <a class="collapse-item" href="/cplprodi"> Capai Pembelajaran Prodi</a>
                        <a class="collapse-item" href="/cpmk"> Capai Pembelajaran Matkul</a>
                        <a class="collapse-item" href="/pustaka"> Pustaka</a>
                        <a class="collapse-item" href="/team"> team teaching </a>
                    </div>
                </div>
            </li>

            <!-- jensi akun -->
            <li class="nav-item">
                <a class="nav-link" href="/kelas">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>Nilai Mahasiswa</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/nilaibobot">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Grade Nilai mahasiswa</span></a>
            </li>
            <?php endif; ?>
            <?php if(Auth::user()->role == 'dosen' || Auth::user()->role == 'admin'|| Auth::user()->role == 'kaprodi'): ?>

            <li class="nav-item">
                <a class="nav-link" href="/nilaiakhir">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Nilai Akhir</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/rp">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    <span>RPS </span></a>
            </li>
            <?php endif; ?>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->
<?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\taalimfl\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>