<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB | <?= $title ?></title>

    <link rel="icon" href="<?= base_url('assets/logo.png') ?>">

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
</head>

<body class="vh-100 d-flex align-items-center justify-content-center" style="background: url('<?= base_url('assets/liquid-bg-blue.jpg'); ?>'); background-position: center; background-size: 140%;">
    <div class="container">
        <div class="row justify-content-center shadow">
            <div class="col-6 p-0">
                <img src="<?= base_url('assets/MURID3.jpeg') ?>" class="rounded-left" style="object-position: -230px; filter: grayscale(100%);">
            </div>
            <div class="col-6 p-5 pb-1 rounded-right bg-light">
                <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Login</h1>
                <h4 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">PPDB - SMP Negeri 2 Lelea</h4>
                <form action="<?= base_url('auth/login_user') ?>" method="post" class="m-5">
                    <?php if (session('logFailed')) : ?>
                        <div class="form-group my-1">
                            <div class="alert alert-danger" role="alert">
                                <?= session('logFailed') ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <input type="email" class="form-control px-4" <?= $validation->hasError('siswa_email') ? 'is-invalid' : '' ?> name="siswa_email" id="email" placeholder="email">
                        <div class="invalid-feedback" id="emailFeedback">
                            <?= $validation->getError('siswa_email') ?>
                        </div>
                    </div>
                    <div class="form-group mb-5">
                        <input type="password" class="form-control px-4" <?= $validation->hasError('siswa_password') ? 'is-invalid' : '' ?> name="siswa_password" id="password" placeholder="Password">
                        <div class="invalid-feedback" id="passwordFeedback">
                            <?= $validation->getError('siswa_password') ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger w-100">Masuk</button>
                </form>
                <div class="small text-center justify-content-center">
                    <a href="<?= base_url('home') ?>" class="link-black"><i class="fas fa-angle-left"></i> Beranda</a>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php base_url() ?>/assets/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/summernote/summernote-bs4.min.js"></script>
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
</body>

</html>