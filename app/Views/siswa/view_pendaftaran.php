<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php header("Content-Security-Policy: img-src 'self' blob: data: " . base_url()); ?>

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
            <?= form_open_multipart('daftar/insertSiswa') ?>
            <h4 class="text-center p-4">PPDB (Penerimaan Peserta Didik Baru) SMP Negeri 2 LELEA</h4>
            <div class="row mx-5 px-5">
                <div class="col-6">
                    <div class="card border-info">
                        <h5 class="card-header bg-info text-white">Formulir Data Siswa</h5>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label>NISN</label>
                                <input type="text" class="form-control" name="siswa_nisn" required aria-describedby="nisnHelp">
                                <small id="nisnHelp" class="form-text text-danger">NISN tidak bisa dirubah lagi.</small>
                            </div>
                            <div class="form-group mb-3">
                                <label class="bold">Nama Lengkap</label>
                                <input type="text" class="form-control" name="siswa_nama" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="bold">Asal Sekolah</label>
                                <input type="text" class="form-control" name="siswa_sekolah_asal" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="bold">Password</label>
                                <input type="password" class="form-control" name="siswa_password" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Foto</label>
                                <input id="foto" type="file" accept="image/*" name="siswa_foto" class="form-control" onchange="bacaGambar(event)" aria-describedby="fotoHelp" required>
                                <small id="fotoHelp" class="form-text text-danger">Foto tidak bisa dirubah lagi.</small>
                            </div>
                            <div class="form-group mb-3" id="pre">
                                <label for="gbr">Preview</label><br>
                                <img src="" id="gambar_load" name="gbr" width="275px">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label>Jenis Kelamin</label>
                                        <div class="d-flex">
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" id="jk_L" value="Laki-Laki" name="siswa_jk" required>
                                                <label class="form-check-label" for="jk_L">Laki-laki</label>
                                            </div>
                                            <div class="form-check px-5">
                                                <input class="form-check-input" type="radio" id="jk_P" value="Perempuan" name="siswa_jk">
                                                <label class="form-check-label" for="jk_P">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label>Agama</label>
                                        <select name="siswa_agama" class="form-control">
                                            <option value="">--Pilih Agama--</option>
                                            <?php foreach ($agama as $dt) : ?>
                                                <option value="<?= $dt ?>"><?= $dt ?></option>
                                            <?php endforeach; ?>
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
                                        <input type="date" class="form-control" name="siswa_tgl_lahir" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group mb-3">
                                    <label>Status</label>
                                    <select name="siswa_status" class="form-control">
                                        <option value="">--Pilih Status--</option>
                                        <option value="Anak Kandung">Anak Kandung</option>
                                        <option value="Anak Angkat">Anak Angkat</option>
                                    </select>
                                </div>
                                <div class="col-6 form-group mb-3">
                                    <label>Jarak dari Rumah</label>
                                    <input type="text" class="form-control" name="siswa_jarak" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label>Alamat</label>
                                <textarea name="siswa_alamat" id="" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label>Telepon</label>
                                <input type="text" class="form-control" name="siswa_telepon" required>
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
                                <input type="text" class="form-control" name="ortu_pendidikan_ibu" required>
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