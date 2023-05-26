<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
<style>
    th {
        text-align: center;
    }
</style>
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <button class="btn btn-sm btn-primary tambah" data-toggle="modal" data-target="#add">
                    Tambah Data
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Ranking</th>
                        <th rowspan="2">NISN</th>
                        <th rowspan="2">Nama</th>
                        <th colspan="3">Nilai</th>
                        <th rowspan="2">Jarak (km)</th>
                        <th rowspan="2">Nilai</th>
                    </tr>
                    <tr>
                        <th>Matematika</th>
                        <th>B. Indonesia</th>
                        <th>IPA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $tmpNilai = 0;
                    $i = 0;
                    $count = 0;
                    foreach ($dtSiswa as $key => $value) { ?>
                        <tr class="<?= ($i >= 7) ? 'bg-danger' : '' ?>">
                            <td class="text-center"><?= $i + 1 ?></td>
                            <td>
                                <?php
                                if ($i == 0) {
                                    echo $no;
                                } else {
                                    if ($tmpNilai == $value['totalNilai']) {
                                        echo $no;
                                        $count++;
                                    } else {
                                        $no += $count;
                                        echo ++$no;
                                        $count = 0;
                                    }
                                } ?>
                            </td>
                            <td><?= $value['siswa_nisn'] ?></td>
                            <td><?= $value['siswa_nama'] ?></td>
                            <td><?= $value['nilai_mtk'] ?></td>
                            <td><?= $value['nilai_indo'] ?></td>
                            <td><?= $value['nilai_ipa'] ?></td>
                            <td><?= $value['siswa_jarak'] ?></td>
                            <td><?= $value['totalNilai'] ?></td>
                        </tr>
                    <?php
                        $tmpNilai = $value['totalNilai'];
                        $i++;
                    } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
<?= $this->endSection() ?>