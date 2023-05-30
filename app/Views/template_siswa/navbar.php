   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
       <div class="container d-flex align-items-center justify-content-between">

           <a href="" class="logo"><img src="<?= base_url() ?>/assets/logo.png" alt="" style="max-height: 60px !important;" class="img-fluid"></a>

           <nav id="navbar" class="navbar">
               <ul>
                   <li><a class="nav-link scrollto active" href="<?= base_url('home/') ?>#hero">Home</a></li>
                   <li><a class="nav-link scrollto" href="<?= base_url('home/') ?>#about">Tentang</a></li>
                   <li><a class="nav-link scrollto" href="<?= base_url('home/') ?>#prestasi">Prestasi</a></li>
                   <li><a class="nav-link scrollto " href="<?= base_url('home/') ?>#gallery">Galeri</a></li>
                   <li><a class="nav-link scrollto" href="<?= base_url('home/') ?>#ekskul">Ekskul</a></li>
                   <?php if (session('log_auth')) : ?>
                       <li class="nav-item dropdown">
                           <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
                               <i class="fas fa-user"></i>&ensp;<?= session('log_auth')['akunName'] ?>
                           </a>
                           <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                               <?php if (session('log_auth')['akunRole'] == 'siswa') : ?>
                                   <li><a href="<?= base_url('siswa') ?>" class="dropdown-item"><i class="fas fa-home"></i>&ensp;Dashboard</a></li>
                                   <li class="dropdown-divider"></li>
                                   <li><a href="<?= base_url('siswa') ?>" class="dropdown-item"><i class="fas fa-address-card"></i>&ensp;Formulir</a></li>
                                   <li class="dropdown-divider"></li>
                                   <li><a href="<?= base_url('auth/logout_siswa') ?>" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&ensp;Logout</a></li>
                               <?php else : ?>
                                   <li><a href="<?= base_url('admin') ?>" class="dropdown-item"><i class="fas fa-home"></i>&ensp;Dashboard</a></li>
                                   <li class="dropdown-divider"></li>
                                   <li><a href="<?= base_url('auth/logout_admin') ?>" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&ensp;Logout</a></li>
                               <?php endif ?>
                           </ul>
                       </li>
                   <?php else : ?>
                       <li>
                           <a class="nav-link" href="<?= base_url('auth') ?>">
                               <div class="btn btn-info text-white">Login</div>
                           </a>
                       </li>
                   <?php endif ?>
               </ul>
               <i class="bi bi-list mobile-nav-toggle"></i>
           </nav><!-- .navbar -->

       </div>
   </header><!-- End Header -->