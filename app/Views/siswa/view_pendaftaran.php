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
                <div class="row m-5 px-5">
                    <h4 class="text-center p-4">PPDB (Penerimaan Peserta Didik Baru) SMP Negeri 2 LELEA</h4>
                    <?= form_open_multipart('daftar/insertSiswa') ?>
                    <div class="col-6">
                        <div class="card border-info">
                            <h5 class="card-header bg-info text-white">Formulir Data Siswa</h5>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label>NISN</label>
                                    <input type="text" class="form-control" name="siswa_nisn" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="bold">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="siswa_nama" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Foto</label>
                                    <input id="foto" type="file" accept="image/*" name="siswa_foto" class="form-control" onchange="bacaGambar(event)" required>
                                </div>
                                <div class="form-group mb-3" id="pre">
                                    <label for="gbr">Preview</label><br>
                                    <img src="" id="gambar_load" name="gbr" width="250px">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label>Jenis Kelamin</label>
                                            <div class="d-flex">
                                                <div class="form-check ml-3">
                                                    <input class="form-check-input" type="radio" id="jk_L" name="siswa_jenis_kelamin" required>
                                                    <label class="form-check-label" for="jk_L">Laki-laki</label>
                                                </div>
                                                <div class="form-check px-5">
                                                    <input class="form-check-input" type="radio" id="jk_P" name="siswa_jenis_kelamin">
                                                    <label class="form-check-label" for="jk_P">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label for="select_agama">Agama</label>
                                            <select id="select_agama" name="siswa_jk" class="form-control">
                                                <option selected>-- Pilih Agama --</option>
                                                <option value="">Islam</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Tempat / Tanggal Lahir</label>
                                    <div class="row">
                                        <div class="col-7 pe-0">
                                            <input type="text" class="form-control" name="siswa_tempat_lahir" required>
                                        </div>
                                        <div class="col-5">
                                            <input type="date" class="form-control" name="siswa_tanggal_lahir" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Status</label>
                                    <input type="text" class="form-control" name="siswa_status" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Alamat</label>
                                    <textarea name="siswa_alamat" id="" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Telepon</label>
                                    <input type="number" class="form-control" name="siswa_telepon" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="siswa_email" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-danger">
                            <h5 class="card-header bg-danger text-white">Formulir Data Orang Tua</h5>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label>Nama Ayah</label>
                                    <input type="text" class="form-control" name="ortu_nama_ayah" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="bold">Pendidikan Ayah</label>
                                    <input type="text" class="form-control" name="ortu_pendidikan_ayah" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="bold">Telepon Ayah</label>
                                    <input type="text" class="form-control" name="ortu_telepon_ayah" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="bold">Pekerjaan Ayah</label>
                                    <input type="text" class="form-control" name="ortu_pekerjaan_ayah" required>
                                </div>
                            </div>
                        </div>
                        <div class="card border-primary border-top-0">
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label>Nama Ibu</label>
                                    <input type="text" class="form-control" name="ortu_nama_ibu" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="bold">Pendidikan Ibu</label>
                                    <input type="text" class="form-control" name="ortu_penddikan_ibu" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="bold">Telepon Ibu</label>
                                    <input type="text" class="form-control" name="ortu_telepon_ibu" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="bold">Pekerjaan Ibu</label>
                                    <input type="text" class="form-control" name="ortu_pekerjaan_ibu" required>
                                </div>
                            </div>
                        </div>
                        <div class="card border-success border-top-0">
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label>Nama Wali</label>
                                    <input type="text" class="form-control" name="ortu_nama_wali">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="bold">Pendidikan Wali</label>
                                    <input type="text" class="form-control" name="ortu_pendidikan_wali">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="bold">Telepon Wali</label>
                                    <input type="text" class="form-control" name="ortu_telepon_wali">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="bold">Pekerjaan Wali</label>
                                    <input type="text" class="form-control" name="ortu_pekerjaan_wali">
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-success mt-4" type="submit">
                        Daftar Sekarang
                    </button>
                    <?= form_close() ?>
                </div>
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
    </script>
</body>

</html>