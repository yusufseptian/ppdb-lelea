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
    <!-- Sweet alert 2 -->
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.8/dist/sweetalert2.min.css " rel="stylesheet">
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
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow p-0">
                            <li class="dropdown-item p-0"><a id="btnPrintUndangan" style="cursor: pointer;"><i class="fas fa-address-card"></i>&ensp;Formulir</a></li>
                            <li class="dropdown-divider p-0 m-0"></li>
                            <li class="dropdown-item p-0"><a class="text-danger" style="cursor: pointer;" <?= ($isOpened) ? ' data-bs-toggle="modal" data-bs-target="#modalPengunduranDiri"' : '' ?> id="btnPengunduranDiri"><i class="fas fa-trash"></i>&ensp;Pengunduran Diri</a></li>
                            <li class="dropdown-divider p-0 m-0"></li>
                            <li class="dropdown-item p-0"><a href="<?= base_url('auth/logout_siswa') ?>"><i class="fas fa-sign-out-alt"></i>&ensp;Logout</a></li>
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

    <?php if ($isOpened) : ?>
        <!-- Modal -->
        <div class="modal fade" id="modalPengunduranDiri" tabindex="-1" aria-labelledby="modalPengunduranDiriLabel" aria-hidden="true">
            <form action="<?= base_url('siswa/pengundurandiri') ?>" method="post">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title" id="modalPengunduranDiriLabel">Pengunduran Diri</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" id="closePengunduranDiri" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger mb-3" role="alert">
                                <b><i class="fas fa-exclamation-triangle"></i> Perhatian</b>
                                <div class="ps-2">Jika anda mengundurkan diri maka anda tidak bisa mendaftar menggunakan data anda kembali pada tahun ajaran ini.</div>
                            </div>
                            <div>
                                <label for="txtAlasan" class="mb-1 form-label" style="font-weight: normal;">Jika anda yakin, maka masukan alasan anda mengundurkan diri:</label>
                                <textarea name="txtAlasan" id="txtAlasan" class="form-control" rows="3" placeholder="Masukan alasan pengunduran diri" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Lanjutkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <?php endif ?>

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
    <!-- Sweet alert 2 -->
    <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.8/dist/sweetalert2.all.min.js "></script>

    <script>
        const isOpen = Boolean(<?= $isOpened ?>);
        const isFinished = Boolean(<?= $isFinished ?>);
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
        $("#btnPengunduranDiri").click(function() {
            if (!isOpen) {
                Swal.fire(
                    'Perhatian!',
                    'Saat ini bukan masa pendaftaran, untuk melakukan pengunduran diri silahkan mendatangi pihak sekolah',
                    'info'
                );
            }
        });

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });

        $("#btnPrintUndangan").click(function() {
            if (isFinished) {
                window.location.href = '<?= base_url('siswa/undangan') ?>';
            } else {
                Swal.fire(
                    'Perhatian!',
                    'Cetak undangan hanya dapat dilakukan ketika waktu pendaftaran selesai',
                    'info'
                );
            }
        });
    </script>
    <?= $this->renderSection('bottomScript'); ?>
</body>

</html>