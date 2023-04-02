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
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>AKSI</th>
                </tr>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($galeri as $key => $value) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value['galeri_nama'] ?></td>
                        <td class="text-center">
                            <img class="img-fluid shadow" src="<?= base_url('foto_galeri/' . $value['galeri_foto']) ?>" width="100px">
                        </td>
                        <td>
                            <button class="btn btn-sm btn-flat btn-warning" data-toggle="modal" data-target="#edit<?= $value['galeri_id'] ?>">
                                <i class="fas fa-pen"></i>
                            </button>
                            <button class="btn btn-sm btn-flat btn-danger" data-toggle="modal" data-target="#delete<?= $value['galeri_id'] ?>">
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
                <h4 class="modal-title">Tambah Foto Galeri</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('galeri/insertdata') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input name="galeri_nama" class="form-control" placeholder="Masukkan Nama" required>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Foto</label>
                            <input id="eks_foto" type="file" accept="image/*" name="galeri_foto" class="form-control" onchange="bacaGambar(event)" required>
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
<?php foreach ($galeri as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['galeri_id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h4 class="modal-title">Edit galeri</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('galeri/editdata/' . $value['galeri_id']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>nama</label>
                        <input name="galeri_nama" class="form-control" placeholder="Masukkan Nama" value="<?= $value['galeri_nama'] ?>" required>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Foto</label>
                                <input id="galeri_foto" type="file" accept="image/*" name="galeri_foto" class="form-control" onchange="bacaGambar(event)" required>
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
<?php foreach ($galeri as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['galeri_id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title">Hapus Galeri</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda ingin menghapus <b><?= $value['galeri_nama'] ?></b>?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Tutup</button>
                    <a href="<?= base_url('galeri/deleteData/' . $value['galeri_id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>
<?= $this->endSection() ?>