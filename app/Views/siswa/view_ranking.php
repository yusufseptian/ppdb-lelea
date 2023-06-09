<?= $this->extend('template_siswa/dashboard') ?>
<?= $this->section('content') ?>
<style>
    th {
        text-align: center;
    }
</style>
<div class="row" style="margin-inline: 100px;">
    <div class="col-12">
        <div class="card border-info">
            <h5 class="card-header bg-info text-white">Perangkingan Siswa</h5>
            <div class="card-body">
                <div class="border-bottom pb-3 mb-3">
                    <h3>Ranking PPDB</h3>
                    <div class="d-flex justify-content-between">
                        <div>
                            <table>
                                <tr>
                                    <td>Tahun Ajaran</td>
                                    <td>:</td>
                                    <td><?= $dtTA['ta_tahun_ajaran'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kuota Pendaftaran</td>
                                    <td>:</td>
                                    <td><?= $dtTA['ta_kuota'] ?></td>
                                </tr>
                                <tr>
                                    <td>Ranking Kamu</td>
                                    <td>:</td>
                                    <td><?= (empty($dtRanking)) ? '-' : $dtRanking['ranking'] . ' dari ' . count($dtSiswa) . ' siswa' ?></td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <td>Pendaftaran Buka</td>
                                    <td>:</td>
                                    <td><?= $dtTA['ta_mulai_daftar'] ?></td>
                                </tr>
                                <tr>
                                    <td>Pendaftaran Tutup</td>
                                    <td>:</td>
                                    <td><?= $dtTA['ta_selesai_daftar'] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <table id="tbRanking" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Ranking</th>
                            <th rowspan="2">NISN</th>
                            <th rowspan="2">Nama</th>
                            <th colspan="3">Nilai</th>
                            <th rowspan="2">Jarak (km)</th>
                            <th rowspan="2">Nilai</th>
                            <th rowspan="2">Tanggal Daftar</th>
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
                            <tr class="<?= ($i + 1 > $dtTA['ta_kuota']) ? 'bg-danger' : '' ?>">
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
                                <td><?= date("d-m-Y H:i:s", strtotime($value['siswa_created_at'])) ?></td>
                            </tr>
                        <?php
                            $tmpNilai = $value['totalNilai'];
                            $i++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('bottomScript'); ?>
<script>
    $(function() {
        $("#tbRanking").DataTable();
    });
</script>
<?= $this->endSection() ?>