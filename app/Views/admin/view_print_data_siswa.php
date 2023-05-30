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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php base_url() ?>/assets/dist/css/adminlte.min.css">

    <style>
        @page {
            size: A4;
            /* DIN A4 standard, Europe */
            margin: 0;
        }

        * {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
        }

        body {
            padding: 4cm 3cm 3cm 4cm;
        }

        .cellFit {
            width: 1% !important;
            white-space: nowrap;
        }

        th {
            vertical-align: middle !important;
            text-align: center !important;
        }
    </style>
</head>

<body>
    <div class="row w-100">
        <div class="col-12 text-center p-0">
            <?= $this->include('partial/kop_surat'); ?>
        </div>
        <div class="col-12 mt-5">
            <p class="h5 font-weight-bold text-center text-uppercase mb-5">
                <?php
                if (session('filterDataSiswa')) {
                    if (session('filterDataSiswa')['status'] == 'All') {
                        echo "Rekap Seluruh Data Calon Siswa<br>PPDB Tahun Ajaran " . $dt_ta['ta_tahun_ajaran'];
                    } else {
                        echo "Rekap Seluruh Data Calon Siswa " . session('filterDataSiswa')['status'] . "<br>PPDB Tahun Ajaran " . $dt_ta['ta_tahun_ajaran'];
                    }
                } else {
                    echo "Rekap Seluruh Data Calon Siswa<br>PPDB Tahun Ajaran " . $dt_ta['ta_tahun_ajaran'];
                }
                ?>
            </p>
            <p>Dicetak pada : <?= date("d/m/Y") ?></p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="cellFit">No</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Sekolah Asal</th>
                        <th>No Telp</th>
                        <th>Status Pendaftaran</th>
                        <?php if (session('filterDataSiswa')) : ?>
                            <?php if (session('filterDataSiswa')['status'] == 'Mengundurkan Diri') : ?>
                                <th>Alasan Pengunduran Diri</th>
                            <?php elseif (session('filterDataSiswa')['status'] == 'Tidak Diterima') : ?>
                                <th>Alasan Tidak Diterima</th>
                            <?php endif ?>
                        <?php endif ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($dt_siswa as $dt) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $dt['siswa_nisn'] ?></td>
                            <td><?= $dt['siswa_nama'] ?></td>
                            <td><?= $dt['siswa_jk'] ?></td>
                            <td><?= $dt['siswa_sekolah_asal'] ?></td>
                            <td><?= $dt['siswa_telepon'] ?></td>
                            <td><?= $dt['siswa_status_pendaftaran'] ?></td>
                            <?php if (session('filterDataSiswa')) : ?>
                                <?php if (session('filterDataSiswa')['status'] == 'Mengundurkan Diri') : ?>
                                    <td><?= $dt['siswa_alasan_pengunduran'] ?></td>
                                <?php elseif (session('filterDataSiswa')['status'] == 'Tidak Diterima') : ?>
                                    <td><?= $dt['siswa_alasan_ditolak'] ?></td>
                                <?php endif ?>
                            <?php endif ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>