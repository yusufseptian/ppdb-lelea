<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php base_url() ?>/assets/index3.html" class="brand-link">
        <img src="<?php base_url() ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PPDB-SMP LELEA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php base_url() ?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Nganu</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Profil Sekolah
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('sejarah') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tentang Sekolah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('prestasi') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Prestasi Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('ekskul') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ekstra Kulikuler</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('galeri') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Galeri</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/beranda') ?>" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            PPDB
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/beranda') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ACC Data Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/beranda') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rangking</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/beranda') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
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