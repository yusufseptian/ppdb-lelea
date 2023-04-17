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

    <?= $this->include('template_siswa/navbar.php'); ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="min-height: 700px;">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>SMP Negeri 2 Lelea</h1>
                    <h2><?= $tentang['profil_deskripsi'] ?></h2>
                    <div><a href="<?= base_url('daftar') ?>" class="btn-get-started scrollto">Daftar Sekarang</a></div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="<?= base_url() ?>/assets/Butterfly/assets/img/home.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="services section-bg" style="min-height: 650px;">
            <?= $this->include('template_siswa/tentang'); ?>
        </section><!-- End About Section -->

        <!-- ======= Prestasi Section ======= -->
        <section id="prestasi" class="testimonials" style="min-height: 650px;">
            <?= $this->include('template_siswa/prestasi'); ?>
        </section><!-- End Prestasi Section -->


        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery" style="min-height: 650px;">
            <?= $this->include('template_siswa/galeri'); ?>
        </section><!-- End Gallery Section -->

        <!-- ======= Ekskul Section ======= -->
        <section id="ekskul" class="team section-bg" style="min-height: 650px;">
            <?= $this->include('template_siswa/ekskul'); ?>
        </section><!-- End Ekskul Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Barokah Coding</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/butterfly-free-bootstrap-theme/ -->
                Designed by <a href="">BarokahCoding</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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