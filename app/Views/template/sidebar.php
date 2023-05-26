<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('') ?>" class="brand-link">
        <img src="<?= base_url() ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PPDB-SMP LELEA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>/assets/user.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= session('log_auth')['akunName'] ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-place-of-worship"></i>
                        <p>
                            Profil Sekolah
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('tentang') ?>" class="nav-link">
                                <i class="fa fa-landmark nav-icon"></i>
                                <p>Tentang Sekolah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('prestasi') ?>" class="nav-link">
                                <i class="fa fa-award nav-icon"></i>
                                <p>Prestasi Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('ekskul') ?>" class="nav-link">
                                <i class="fa fa-star nav-icon"></i>
                                <p>Ekstrakurikuler</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('galeri') ?>" class="nav-link">
                                <i class="fa fa-photo-video nav-icon"></i>
                                <p>Galeri</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/beranda') ?>" class="nav-link">
                        <i class="nav-icon fa fa-paperclip"></i>
                        <p>
                            PPDB
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('datasiswa') ?>" class="nav-link">
                                <i class="fa fa-check-square nav-icon"></i>
                                <p>ACC Data Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/beranda') ?>" class="nav-link">
                                <i class="fa fa-trophy nav-icon"></i>
                                <p>Rangking</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/beranda') ?>" class="nav-link">
                                <i class="fa fa-calendar nav-icon"></i>
                                <p>Tahun Ajaran</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>