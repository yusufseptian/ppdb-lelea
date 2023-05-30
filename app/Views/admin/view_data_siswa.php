<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
<style>
    .card-header::after {
        display: none;
    }

    label {
        font-weight: normal !important;
    }
</style>
<div class="col-sm-12">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-header d-flex justify-content-between">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalFilter">Filter</button>
            <button type="button" class="btn btn-success btn-sm">Cetak</button>
        </div>
        <div class="card-body">
            <div class="border-bottom d-flex justify-content-between mb-3 pb-2">
                <div>
                    Tahun Ajaran : <?= $dt_ta['ta_tahun_ajaran'] ?>
                </div>
                <div>
                    Status Pendaftaraan :
                    <?php
                    if (session('filterDataSiswa')) {
                        if (session('filterDataSiswa')['status'] == 'All') {
                            echo 'Semua';
                        } else {
                            echo session('filterDataSiswa')['status'];
                        }
                    } else {
                        echo 'Semua';
                    }
                    ?>
                </div>
            </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <tr>
                        <th>NO</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Sekolah Asal</th>
                        <th>Status</th>
                        <th>AKSI</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($dt_siswa as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['siswa_nisn'] ?></td>
                            <td><?= $value['siswa_nama'] ?></td>
                            <td><?= $value['siswa_sekolah_asal'] ?></td>
                            <td class="text-center p-0">
                                <?php if (is_null($value['siswa_deleted_at'])) { ?>
                                    <?php if ($value['siswa_status_pendaftaran'] == 'Terdaftar') { ?>
                                        <div class="bg-primary p-3">Terdaftar</div>
                                    <?php } elseif ($value['siswa_status_pendaftaran'] == 'Diterima') { ?>
                                        <div class="bg-success p-3">Diterima</div>
                                    <?php } else { ?>
                                        <div class="bg-danger p-3">Tidak diterima</div>
                                    <?php } ?>
                                <?php } else { ?>
                                    <div class="bg-danger p-3">Mengundurkan Diri</div>
                                <?php } ?>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-flat btn-info" onclick="window.location.href='<?= base_url('datasiswa/detail/') . $value['siswa_nisn'] ?>'">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-flat btn-success" onclick="window.location.href='<?= base_url('datasiswa/diterima/') . $value['siswa_nisn'] ?>'">
                                    <i class=" fas fa-check"></i>
                                </button>
                                <button class="btn btn-sm btn-flat btn-danger" data-toggle="modal" data-target="#delete<?= $value['siswa_nisn'] ?>">
                                    <i class="fas fa-times"></i>
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
<!-- Modal filter -->
<div class="modal fade" id="modalFilter">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Filter Data Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('datasiswa/filter/') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="cmbStatusPendaftaran" class="d-inline mr-2">Status Pendaftaran : </label>
                    <select name="cmbStatusPendaftaran" id="cmbStatusPendaftaran" class="form-control d-inline" style="width: fit-content;">
                        <?php if (session('filterDataSiswa')) : ?>
                            <option value="All" <?= (session('filterDataSiswa')['status'] == 'All') ? 'selected' : '' ?>>Semua</option>
                            <option value="Terdaftar" <?= (session('filterDataSiswa')['status'] == 'Terdaftar') ? 'selected' : '' ?>>Terdaftar</option>
                            <option value="Diterima" <?= (session('filterDataSiswa')['status'] == 'Diterima') ? 'selected' : '' ?>>Diterima</option>
                            <option value="Tidak Diterima" <?= (session('filterDataSiswa')['status'] == 'Tidak Diterima') ? 'selected' : '' ?>>Tidak Diterima</option>
                            <option value="Mengundurkan Diri" <?= (session('filterDataSiswa')['status'] == 'Mengundurkan Diri') ? 'selected' : '' ?>>Mengundurkan Diri</option>
                        <?php else : ?>
                            <option value="All">Semua</option>
                            <option value="Terdaftar">Terdaftar</option>
                            <option value="Diterima">Diterima</option>
                            <option value="Tidak Diterima">Tidak Diterima</option>
                            <option value="Mengundurkan Diri">Mengundurkan Diri</option>
                        <?php endif ?>
                    </select>
                </div>
                <div class="border-top mt-3 pt-2">
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
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" onclick="window.location.href='<?= base_url('datasiswa/resetfilter') ?>'">Reset Filter</button>
                <button type="submit" class="btn btn-primary btn-sm">Filter</button>
            </div>
            <?= form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- Modal delete -->
<?php foreach ($dt_siswa as $key => $dt) { ?>
    <div class="modal fade" id="delete<?= $dt['siswa_nisn'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title">Hapus Siswa ?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open('datasiswa/ditolak/' . $dt['siswa_nisn']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="siswa_alasan_ditolak" id="" rows="5"><?= $dt['siswa_alasan_ditolak'] ?></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger btn-sm">Ubah</button>
                </div>
                <?= form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>
<?= $this->endSection() ?>
<?= $this->section('bottomScript'); ?>
<script>
    $("#tbTAFilter").DataTable();
</script>
<?= $this->endSection(); ?>