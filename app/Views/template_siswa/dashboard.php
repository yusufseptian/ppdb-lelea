<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PPDB | <?= $title ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>/assets/logo.png" rel="icon">
    <link href="<?= base_url() ?>/assets/Butterfly/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php base_url() ?>/assets/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link href="<?= base_url() ?>/assets/Butterfly/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/Butterfly/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/Butterfly/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="" class="logo"><img src="<?= base_url() ?>/assets/logo.png" alt="" style="max-height: 60px !important;" class="img-fluid"></a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?= base_url('siswa/') ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('ranking/siswa') ?>">Rangking</a></li>
                    <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
                            <i class="fas fa-user"></i>&ensp;<?= session('log_auth')['akunName'] ?>
                        </a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                            <li><a href="<?= base_url('siswa') ?>" class="dropdown-item"><i class="fas fa-address-card"></i>&ensp;Formulir</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a href="<?= base_url('auth/logout_siswa') ?>" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&ensp;Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
    <div class="wrapper" style="margin-top: 100px; margin-inline: 5%;">
        <div class="container-fluid">
            <?= $this->renderSection('content'); ?>
        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>/assets/Butterfly/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url() ?>/assets/Butterfly/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/Butterfly/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>/assets/Butterfly/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/assets/Butterfly/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/Butterfly/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>/assets/Butterfly/assets/js/main.js"></script>
    <script src="<?= base_url() ?>assets/Butterfly/assets/vendor/jquery/jquery.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('assets') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        // preview img
        function bacaGambar(input) {
            try {
                $('#gambar_load').attr('src', URL.createObjectURL(input.target.files[0]));
                tampilPreview();
            } catch (error) {

            }
        }

        function tampilPreview() {
            if ($('#foto').val() == '') {
                $('#pre').addClass('d-none');
            } else {
                $('#pre').removeClass('d-none');
            }
        }

        tampilPreview();

        $('#foto').change(function() {
            bacaGambar(this);
        });
        //end preview img

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <?= $this->renderSection('bottomScript'); ?>
</body>

</html>