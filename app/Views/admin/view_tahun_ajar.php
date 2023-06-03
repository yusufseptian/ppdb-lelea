<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
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
                    <tr>
                        <th>NO</th>
                        <th>Tahun Ajaran</th>
                        <th>Kuota</th>
                        <th>Mulai Pendaftaran</th>
                        <th>Selesai Pendaftaran</th>
                        <th>AKSI</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($dt_ta as $key => $value) { ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td><?= $value['ta_tahun_ajaran'] ?></td>
                            <td class="text-center"><?= $value['ta_kuota'] ?></td>
                            <td><?= $value['ta_mulai_daftar'] ?></td>
                            <td><?= $value['ta_selesai_daftar'] ?></td>
                            <td class="text-center">
                                <?php if ($no == 2) : ?>
                                    <button class="btn btn-sm btn-flat btn-warning" data-toggle="modal" data-target="#edit<?= $value['ta_id'] ?>">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                    <button class="btn btn-sm btn-flat btn-danger" data-toggle="modal" data-target="#delete<?= $value['ta_id'] ?>">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                <?php endif ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
<!-- Modal Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title">Tambah Tahun Ajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('tahunajar/insertdata') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Tahun Ajaran</label>
                    <input type="text" name="ta_tahun_ajaran" class="form-control" placeholder="Masukkan Tahun Ajaran" required>
                </div>
                <div class="form-group">
                    <label>Kuota</label>
                    <input type="text" name="ta_kuota" class="form-control" placeholder="Masukkan Kuota pendaftaran" required>
                </div>
                <div class="form-group">
                    <label>Mulai Pendaftaran</label>
                    <input type="datetime-local" name="ta_mulai_daftar" class="form-control" placeholder="Masukkan Tahun Ajaran" required>
                </div>
                <div class="form-group">
                    <label>Selesai Pendaftaran</label>
                    <input type="datetime-local" name="ta_selesai_daftar" class="form-control" placeholder="Masukkan Tahun Ajaran" required>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
            <?= form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</div>
<!-- Modal Edit -->
<?php foreach ($dt_ta as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['ta_id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h4 class="modal-title">Edit Tahun Ajaran</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open('tahunajar/editdata/' . $value['ta_id']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tahun Ajaran</label>
                        <input type="text" name="ta_tahun_ajaran" class="form-control" placeholder="Masukkan Tahun Ajaran" required value="<?= $value['ta_tahun_ajaran'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Kuota</label>
                        <input type="text" name="ta_kuota" class="form-control" placeholder="Masukkan Kuota pendaftaran" required value="<?= $value['ta_kuota'] ?>">
                    </div>
                    <div class=" form-group">
                        <label>Mulai Pendaftaran</label>
                        <input type="datetime-local" name="ta_mulai_daftar" class="form-control" required value="<?= $value['ta_mulai_daftar'] ?>">
                    </div>
                    <div class=" form-group">
                        <label>Selesai Pendaftaran</label>
                        <input type="datetime-local" name="ta_selesai_daftar" class="form-control" required value="<?= $value['ta_selesai_daftar'] ?>">
                    </div>
                </div>
                <div class=" modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-warning btn-sm">Ubah</button>
                </div>
                <?= form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php
    break;
} ?>
<!-- Modal Delete -->
<?php foreach ($dt_ta as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['ta_id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title">Hapus Tahun Ajaran</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda ingin menghapus <b><?= $value['ta_tahun_ajaran'] ?></b>?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Tutup</button>
                    <a href="<?= base_url('tahunajar/deleteData/' . $value['ta_id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>
<?= $this->endSection() ?>