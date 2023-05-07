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
                        <th>Kategori</th>
                        <th>Foto</th>
                        <th>AKSI</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($ekskul as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['eks_nama'] ?></td>
                            <td><?= $value['eks_kategori'] ?></td>
                            <td class="text-center">
                                <img class="img-fluid shadow" src="<?= base_url('foto_ekskul/' . $value['eks_foto']) ?>" width="100px">
                            </td>
                            <td>
                                <button class="btn btn-sm btn-flat btn-warning" data-toggle="modal" data-target="#edit<?= $value['eks_id'] ?>">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-flat btn-danger" data-toggle="modal" data-target="#delete<?= $value['eks_id'] ?>">
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
                <h4 class="modal-title">Tambah Ekstra Kulikuler</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('ekskul/insertdata') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Ekstra Kulikuler</label>
                    <input name="eks_nama" class="form-control" placeholder="Masukkan Nama" required>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="eks_kategori" class="form-control">
                        <option value="">--Pilih Kategori--</option>
                        <?php foreach ($kategori as $dt) : ?>
                            <option value="<?= $dt ?>"><?= $dt ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Foto Ekskul</label>
                            <input id="foto" type="file" accept="image/*" name="eks_foto" class="form-control" onchange="bacaGambar(event)" required>
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
<?php foreach ($ekskul as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['eks_id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h4 class="modal-title">Edit Ekstra Kulikuler</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('ekskul/editdata/' . $value['eks_id']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Ekstra Kulikuler</label>
                        <input name="eks_nama" class="form-control" placeholder="Masukkan Nama" value="<?= $value['eks_nama'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="eks_kategori" class="form-control">
                            <option value="">--Pilih Kategori--</option>
                            <?php foreach ($kategori as $dt) : ?>
                                <option value="<?= $dt ?>" <?= ($dt == $value['eks_kategori']) ? 'selected' : '' ?>><?= $dt ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Foto</label>
                                <input id="eks_foto" type="file" accept="image/*" name="eks_foto" class="form-control" onchange="editGambar(event,'#gambar_load_edit')" required>
                            </div>
                            <div class="form-group" id="pre">
                                <label>Preview</label><br>
                                <img src="<?= base_url('foto_ekskul/' . $value['eks_foto']) ?>" id="gambar_load_edit" width="200px">
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
<?php foreach ($ekskul as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['eks_id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title">Hapus Ekstra Kulikuler</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda ingin menghapus <b><?= $value['eks_nama'] ?></b>?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Tutup</button>
                    <a href="<?= base_url('ekskul/deleteData/' . $value['eks_id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>
<?= $this->endSection() ?>