<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
<div class="col-sm-12">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
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