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
    </style>
</head>

<body>
    <div class="row w-100">
        <div class="col-12 text-center p-0">
            <?= $this->include('partial/kop_surat'); ?>
        </div>
        <div class="col-12 mt-5">
            <p class="h5 font-weight-bold text-center text-uppercase mb-5">Surat Pernyataan</p>
            <p>Yang bertanda tangan di bawah ini:</p>
            <table>
                <tr>
                    <td width="150px">Nama</td>
                    <td class="px-2">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td width="150px">NIP</td>
                    <td class="px-2">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td width="150px">Jabatan</td>
                    <td class="px-2">:</td>
                    <td></td>
                </tr>
            </table>
            <p class="my-3">Dengan ini menyatakan bahwa:</p>
            <table>
                <tr>
                    <td width="150px">Nama Lengkap</td>
                    <td class="px-2">:</td>
                    <td>YUdi</td>
                </tr>
                <tr>
                    <td width="150px">Tempat, Tgl Lahir</td>
                    <td class="px-2">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td width="150px">Nama Orang Tua</td>
                    <td class="px-2">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td width="150px">Alamat</td>
                    <td class="px-2">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td width="150px">Asal Sekolah</td>
                    <td class="px-2">:</td>
                    <td></td>
                </tr>
            </table>
            <div class="border border-dark border-2 my-5 mx-auto w-25">
                <h3 class="font-weight-bold text-center p-2 text-uppercase">diterima</h3>
            </div>
            <p class="my-3">Sebagai siswa kelas VII SMP Negeri 2 Lelea Tahun Pelajaran 2023/2024 setelah memenuhi semua persyaratan sesuai dengan peraturan perundang-undangan yang berlaku.</p>
            <p class="my-3">Demikian Surat Pernyataan ini kami buat dengan sesungguh-sungguhnya untuk dipergunakan sebagaimana mestinya.</p>
            <div class="float-right mt-5">
                <div>Lelea, <?= date('d M Y'); ?></div>
                <div class="text-center">Kepala Sekolah</div>
                <p class="font-weight-bold text-center text-uppercase" style="margin-top: 100px;">Wahyu</p>
            </div>
        </div>
    </div>


    <script>
        window.print();
    </script>
</body>

</html>