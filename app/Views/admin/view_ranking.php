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
                <div>
                    <table>
                        <tr>
                            <td>Tahun Ajaran</td>
                            <td>:</td>
                            <td><?= $dtTA['ta_tahun_ajaran'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Kuota</td>
                            <td>:</td>
                            <td><?= $dtTA['ta_kuota'] ?></td>
                        </tr>
                    </table>
                </div>
                <div>
                    <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#modalTAFilter">Filter Tahun Ajaran</button>
                </div>
            </div>
        </div>
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
                        <tr class="<?= ($i >= $dtTA['ta_kuota']) ? 'bg-danger' : '' ?>">
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
<div class="modal fade" id="modalTAFilter">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Filter Data Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('datasiswa/filtertahun') ?>" method="post">
                <div class="modal-body">
                    <label>Pilih Tahun Ajaran</label>
                    <table class="table table-bordered table-striped" id="tbTAFilter">
                        <thead>
                            <tr>
                                <th class="cellFit">#</th>
                                <th>Tahun Ajaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (session('filterDataSiswa')) : ?>
                                <?php foreach ($listTA as $ta) : ?>
                                    <tr>
                                        <td>
                                            <input type="radio" name="rdTA" id="rdTA<?= $ta['ta_id'] ?>" value="<?= $ta['ta_id'] ?>" <?= (session('filterDataSiswa')['ta'] == $ta['ta_id']) ? 'checked' : '' ?> required>
                                        </td>
                                        <td>
                                            <label for="rdTA<?= $ta['ta_id'] ?>"><?= $ta['ta_tahun_ajaran'] ?></label>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            <?php else : ?>
                                <?php foreach ($listTA as $ta) : ?>
                                    <tr>
                                        <td>
                                            <input type="radio" name="rdTA" id="rdTA<?= $ta['ta_id'] ?>" value="<?= $ta['ta_id'] ?>" required>
                                        </td>
                                        <td>
                                            <label for="rdTA<?= $ta['ta_id'] ?>"><?= $ta['ta_tahun_ajaran'] ?></label>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" onclick="window.location.href='<?= base_url('datasiswa/resetfilter') ?>'">Reset Filter</button>
                    <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?= $this->endSection() ?>
<?= $this->section('bottomScript'); ?>
<script>
    $("#tbTAFilter").DataTable();
</script>
<?= $this->endSection() ?>