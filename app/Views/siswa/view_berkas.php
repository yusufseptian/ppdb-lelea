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
    <div class="wrapper" style="margin-top: 100px; margin-inline: 5%;">
        <div class="container-fluid">
            <?= form_open_multipart('daftar/insertberkas') ?>
            <h4 class="text-center p-4">PPDB (Penerimaan Peserta Didik Baru) SMP Negeri 2 LELEA</h4>
            <div class="row mx-5 px-5">
                <div class="col-3">
                    <div class="card border-info">
                        <h5 class="card-header bg-info text-white">Formulir Nilai UN</h5>
                        <div class="card-body p-2">
                            <div class="row d-inline">
                                <div class="col form-group mb-3">
                                    <label>Bahasa Indonesia</label>
                                    <input type="number" class="form-control" name="nilai_indo" required>
                                </div>
                                <div class="col form-group mb-3">
                                    <label class="bold">Matematika</label>
                                    <input type="number" class="form-control" name="nilai_mtk" required>
                                </div>
                                <div class="col form-group mb-3">
                                    <label class="bold">IPA</label>
                                    <input type="number" class="form-control" name="nilai_ipa" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="card border-danger">
                        <h5 class="card-header bg-danger text-white">Berkas Calon Peserta Didik</h5>
                        <div class="card-body">
                            <div class="">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <h6 class="">Input file berkas dengan tipe file PDF untuk melengkapi pendaftaran.</h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-6 text-center">
                                    <div class="btn form-group mb-3">
                                        <label>Ijazah/Surat Keterangan Lulus/Kartu Ujian</label><br>
                                        <input type="file" accept="pdf/*" name="berkas_ijazah" class="border border-dark rounded" required>
                                    </div>
                                    <div class="btn form-group mb-3">
                                        <label>Akte Kelahiran/Surat Keterangan Lahir</label><br>
                                        <input type="file" accept="pdf/*" name="berkas_akta" class="border border-dark rounded" required>
                                    </div>
                                    <div class="btn form-group mb-3">
                                        <label>Kartu Keluarga (minimal satu tahun)</label><br>
                                        <input type="file" accept="pdf/*" name="berkas_kk" class="border border-dark rounded" required>
                                    </div>
                                    <div class="btn form-group mb-3">
                                        <label>KTP Orang Tua</label><br>
                                        <input type="file" accept="pdf/*" name="berkas_ktp_ortu" class="border border-dark rounded" required>
                                    </div>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="btn form-group mb-3">
                                        <label>Buku Raport(Kelas 4-6)</label><br>
                                        <input type="file" accept="pdf/*" name="berkas_rapor" class="border border-dark rounded" required>
                                    </div>
                                    <div class="btn form-group mb-3">
                                        <label>Surat Tanggung Jawab Mutlak Orang Tua</label><br>
                                        <input type="file" accept="pdf/*" name="berkas_surat_mutlak" class="border border-dark rounded" required>
                                    </div>
                                    <div class="btn form-group mb-3">
                                        <label>Ijazah MDA/MDTA</label><br>
                                        <input type="file" accept="pdf/*" name="berkas_ijazah_mda" class="border border-dark rounded" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center m-4">
                <button class="col-4 btn btn-success" type="submit">Daftar Sekarang</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>

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

</body>

</html>