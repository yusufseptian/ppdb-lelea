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
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Tahun</th>
                        <th>Tingkat</th>
                        <th>Prestasi</th>
                        <th>Foto</th>
                        <th>AKSI</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($prestasi as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['p_nama'] ?></td>
                            <td><?= $value['p_keterangan'] ?></td>
                            <td><?= $value['p_tahun'] ?></td>
                            <td><?= $value['p_tingkat'] ?></td>
                            <td><?= $value['p_prestasi'] ?></td>
                            <td class="text-center">
                                <img class="img-fluid shadow" src="<?= base_url('foto_prestasi/' . $value['p_foto']) ?>" width="100px">
                            </td>
                            <td>
                                <button class="btn btn-sm btn-flat btn-warning" data-toggle="modal" data-target="#edit<?= $value['p_id'] ?>">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-flat btn-danger" data-toggle="modal" data-target="#delete<?= $value['p_id'] ?>">
                                    <i class="fas fa-trash"></i>
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
<!-- Modal Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title">Tambah Prestasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('prestasi/insertdata') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input name="p_nama" class="form-control" placeholder="Masukkan Nama" required>
                </div>
                <div class="form-group">
                    <label>Tahun</label>
                    <input name="p_tahun" class="form-control" type="date" required>
                </div>
                <div class="form-group">
                    <label>Tingkat</label>
                    <input name="p_tingkat" class="form-control" placeholder="Masukkan Tingkat" required>
                </div>
                <div class="form-group">
                    <label>Prestasi</label>
                    <input name="p_prestasi" class="form-control" placeholder="Masukkan Prestasi" required>
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <textarea class="form-control" name="p_keterangan" id="" rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Foto</label>
                            <input id="foto" type="file" accept="image/*" name="p_foto" class="form-control" onchange="bacaGambar(event)" required>
                        </div>
                        <div class="form-group" id="pre">
                            <label>Preview</label><br>
                            <img src="" id="gambar_load" width="200px">
                        </div>
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
<?php foreach ($prestasi as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['p_id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h4 class="modal-title">Edit Prestasi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('prestasi/editdata/' . $value['p_id']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="p_nama" class="form-control" placeholder="Masukkan Nama" value="<?= $value['p_nama'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <input name="p_tahun" class="form-control" type="date" required>
                    </div>
                    <div class="form-group">
                        <label>Tingkat</label>
                        <input name="p_tingkat" class="form-control" placeholder="Masukkan tingkat" value="<?= $value['p_tingkat'] ?>" required>
                    </div>
                    <div class=" form-group">
                        <label>Prestasi</label>
                        <input name="p_prestasi" class="form-control" placeholder="Masukkan Prestasi" value="<?= $value['p_prestasi'] ?>" required>
                    </div>
                    <div class=" form-group">
                        <label for="">Keterangan</label>
                        <textarea class="form-control" name="p_keterangan" id="" rows="3"><?= $value['p_keterangan'] ?></textarea>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Foto</label>
                                <input id="p_foto" type="file" accept="image/*" name="p_foto" class="form-control" onchange="editGambar(event,'#gambar_load_edit')" required>
                            </div>
                            <div class="form-group" id="pre">
                                <label>Preview</label><br>
                                <img src="<?= base_url('foto_prestasi/' . $value['p_foto']) ?>" id="gambar_load_edit" width="200px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
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
<?php } ?>
<!-- Modal Delete -->
<?php foreach ($prestasi as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['p_id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title">Hapus Prestasi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda ingin menghapus <b><?= $value['p_nama'] ?></b>?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Tutup</button>
                    <a href="<?= base_url('prestasi/deleteData/' . $value['p_id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>
<?= $this->endSection() ?>