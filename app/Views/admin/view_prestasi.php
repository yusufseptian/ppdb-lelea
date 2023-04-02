<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
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
                    <th>Judul</th>
                    <th>Keterangan</th>
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
                        <td><?= $value['p_judul'] ?></td>
                        <td><?= $value['p_keterangan'] ?></td>
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
                    <label>Judul</label>
                    <input name="p_judul" class="form-control" placeholder="Masukkan Nama" required>
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <textarea class="form-control" name="p_keterangan" id="" rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Foto</label>
                            <input id="p_foto" type="file" accept="image/*" name="p_foto" class="form-control" onchange="bacaGambar(event)" required>
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
                    <h4 class="modal-title">Edit prestasi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('prestasi/editdata/' . $value['p_id']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul</label>
                        <input name="p_judul" class="form-control" placeholder="Masukkan Nama" value="<?= $value['p_judul'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea class="form-control" name="p_keterangan" value="<?= $value['p_keterangan'] ?>" id="" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Foto</label>
                                <input id="p_foto" type="file" accept="image/*" name="galeri_foto" class="form-control" onchange="bacaGambar(event)" required>
                            </div>
                            <div class="form-group" id="pre">
                                <label>Preview</label><br>
                                <img src="" id="gambar_load" width="200px">
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
                    Apakah Anda ingin menghapus <b><?= $value['p_judul'] ?></b>?
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