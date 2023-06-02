<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>

<div class="col-sm-12 px-2">
    <?= form_open_multipart('tentang/editdata/' . $tentang['profil_id']) ?>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <label>Foto Sekolah</label>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Foto</label>
                        <input id="profil_foto" type="file" accept="image/*" name="profil_foto" class="form-control" onchange="editGambar(event,'#gambar_load_edit')">
                    </div>
                    <div class="form-group" id="pre">
                        <label>Preview</label><br>
                        <img src="<?= base_url('foto_sekolah/' . $tentang['profil_foto']) ?>" id="gambar_load_edit" width="300px">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-warning btn-sm">Ubah</button>

                    </div>
                </div>
                <div class="card-body">
                    <div class="row" id="detailFormItems">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama Sekolahan</label>
                                <input type="text" class="form-control" name="profil_nama" id="" value="<?= $tentang['profil_nama'] ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>NPSB</label>
                                <input type="text" class="form-control" name="profil_npsb" id="" value="<?= $tentang['profil_npsb'] ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Alamat Sekolah</label>
                                <input type="text" class="form-control" name="profil_alamat" id="" value="<?= $tentang['profil_alamat'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama Kepala Sekolah</label>
                                <input type="text" class="form-control" name="profil_kepsek" id="" value="<?= $tentang['profil_kepsek'] ?>">
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>NIP Kepala Sekolah</label>
                                <input type="text" class="form-control" name="profil_nip_kepsek" id="" value="<?= $tentang['profil_nip_kepsek'] ?>">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="profil_email" id="" value="<?= $tentang['profil_email'] ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Kontak</label>
                                <input type="text" class="form-control" name="profil_kontak" id="" value="<?= $tentang['profil_kontak'] ?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control" name="profil_status" id="" value="<?= $tentang['profil_status'] ?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Akreditasi</label>
                                <input type="text" class="form-control" name="profil_akreditasi" id="" value="<?= $tentang['profil_akreditasi'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Visi</label>
                                <textarea class="form-control" name="profil_visi" id="" rows="5"><?= $tentang['profil_visi'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Misi</label>
                                <textarea class="form-control" name="profil_misi" id="" rows="5"><?= $tentang['profil_misi'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label>Deksripsi</label>
                                <textarea class="form-control" name="profil_deskripsi" id="" rows="5"><?= $tentang['profil_deskripsi'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= form_close() ?>
</div>

<?= $this->endSection() ?>