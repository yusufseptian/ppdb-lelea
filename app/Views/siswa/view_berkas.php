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

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="<?= base_url() ?>/assets/Butterfly/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/Butterfly/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/Butterfly/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/Butterfly/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/Butterfly/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>/assets/Butterfly/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?= $this->include('template_siswa/navbar.php'); ?>
    <div class="wrapper" style="margin-top: 100px;">
        <div class="content-wrapper">
            <div class="container-fluid">
                <?= form_open_multipart('daftar/insertberkas') ?>
                <div class="row mx-5 px-5">
                    <h4 class="text-center p-4">PPDB (Penerimaan Peserta Didik Baru) SMP Negeri 2 LELEA</h4>
                    <div class="col-6">
                        <div class="card border-info">
                            <h5 class="card-header bg-info text-white">Formulir Nilai UN</h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 form-group mb-3">
                                        <label>Bahasa Indonesia</label>
                                        <input type="number" class="form-control" name="nilai_indo" required>
                                    </div>
                                    <div class="col-4 form-group mb-3">
                                        <label class="bold">Matematika</label>
                                        <input type="number" class="form-control" name="nilai_mtk" required>
                                    </div>
                                    <div class="col-4 form-group mb-3">
                                        <label class="bold">IPA</label>
                                        <input type="number" class="form-control" name="nilai_ipa" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-danger">
                            <h5 class="card-header bg-danger text-white">Berkas Calon Peserta Didik</h5>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label>Ijazah/Surat Keterangan Lulus/Kartu Uian</label>
                                    <input type="file" accept="pdf/*" name="berkas_ijazah" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Akte Kelahiran/Surat Keterangan Lahir</label>
                                    <input type="file" accept="pdf/*" name="berkas_akta" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Kartu Keluarga (minimal satu tahun)</label>
                                    <input type="file" accept="pdf/*" name="berkas_kk" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label>KTP Orang Tua</label>
                                    <input type="file" accept="pdf/*" name="berkas_ktp_ortu" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Buku Raport(Kelas 4-6)</label>
                                    <input type="file" accept="pdf/*" name="berkas_rapor" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Surat Tanggung Jawab Mutlak Orang Tua</label>
                                    <input type="file" accept="pdf/*" name="berkas_surat_mutlak" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Ijazah MDA/MDTA</label>
                                    <input type="file" accept="pdf/*" name="berkas_ijazah_mda" class="form-control" required>
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