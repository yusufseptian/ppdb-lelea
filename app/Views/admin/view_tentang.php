<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>

<div class="col-sm-12 px-2">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <label>Foto Sekolah</label>
                </div>
                <div class="card-body">
                    <img src="<?= base_url('assets/MURID1.jpeg') ?>" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-sm btn-primary tambah" data-toggle="modal" data-target="#add">
                            Ubah Data
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row" id="detailFormItems">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama Sekolahan</label>
                                <input type="text" class="form-control" name="" id="" value="<?= $tentang['profil_nama'] ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>NPSB</label>
                                <input type="text" class="form-control" name="" id="" value="<?= $tentang['profil_npsb'] ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama Kepala Sekolah</label>
                                <input type="text" class="form-control" name="" id="" value="<?= $tentang['profil_kepsek'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="" id="" value="<?= $tentang['profil_email'] ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Kontak</label>
                                <input type="text" class="form-control" name="" id="" value="<?= $tentang['profil_kontak'] ?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control" name="" id="" value="<?= $tentang['profil_status'] ?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Akreditasi</label>
                                <input type="text" class="form-control" name="" id="" value="<?= $tentang['profil_akreditasi'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Visi</label>
                                <textarea class="form-control" name="" id="" rows="5"><?= $tentang['profil_visi'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Misi</label>
                                <textarea class="form-control" name="" id="" rows="5"><?= $tentang['profil_misi'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label>Deksripsi</label>
                                <textarea class="form-control" name="" id="" rows="5"><?= $tentang['profil_deskripsi'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>