<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
<div class="row" style="margin-inline: 100px;">
    <div class="col">
        <!-- siswa -->
        <div class="row">
            <div class="col-6">
                <div class="card border-info">
                    <h5 class="card-header bg-info text-white">Data Siswa</h5>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>NISN</label>
                            <input type="text" class="form-control" name="siswa_nisn" value="<?= $dt_siswa['siswa_nisn'] ?>" required disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="bold">Nama Lengkap</label>
                            <input type="text" class="form-control" name="siswa_nama" value="<?= $dt_siswa['siswa_nama'] ?>" required disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="bold">Asal Sekolah</label>
                            <input type="text" class="form-control" name="siswa_sekolah_asal" value="<?= $dt_siswa['siswa_sekolah_asal'] ?>" required disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="bold">Agama</label>
                            <input type="text" class="form-control" name="siswa_agama" value="<?= $dt_siswa['siswa_agama'] ?>" required disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="bold">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="siswa_jk" value="<?= $dt_siswa['siswa_jk'] ?>" required disabled>
                        </div>
                        <div class="form-group mb-3" id="pre">
                            <label>Preview</label><br>
                            <img src="<?= base_url('foto_siswa/' . $dt_siswa['siswa_foto']) ?>" id="gambar_load_edit" width="200px">
                        </div>
                        <div class="form-group mb-3">
                            <label>Tempat & Tanggal Lahir</label>
                            <input type="text" class="form-control" name="siswa_tempat_lahir" value="<?= $dt_siswa['siswa_tempat_lahir'] ?>, <?= $dt_siswa['siswa_tgl_lahir'] ?>" required disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="bold">Status Anak</label>
                            <input type="text" class="form-control" name="siswa_status" value="<?= $dt_siswa['siswa_status'] ?>" required disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label>Alamat</label>
                            <textarea name="siswa_alamat" id="" cols="30" rows="3" class="form-control" disabled><?= $dt_siswa['siswa_alamat'] ?></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="siswa_telepon" value="<?= $dt_siswa['siswa_telepon'] ?>" required disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="siswa_email" value="<?= $dt_siswa['siswa_email'] ?>" required disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card border-info">
                    <h5 class="card-header bg-info text-white">Data Nilai Siswa</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 form-group mb-3">
                                <label>Bahasa Indonesia</label>
                                <input type="number" class="form-control" name="nilai_indo" value="<?= $dt_siswa['nilai_indo'] ?>" required disabled>
                            </div>
                            <div class="col-4 form-group mb-3">
                                <label class="bold">Matematika</label>
                                <input type="number" class="form-control" name="nilai_mtk" value="<?= $dt_siswa['nilai_mtk'] ?>" required disabled>
                            </div>
                            <div class="col-4 form-group mb-3">
                                <label class="bold">IPA</label>
                                <input type="number" class="form-control" name="nilai_ipa" value="<?= $dt_siswa['nilai_ipa'] ?>" required disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-info">
                    <h5 class="card-header bg-info text-white">Berkas Calon Peserta Didik</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group mb-3 mx-auto">
                                <div class="btn">
                                    <label>Ijazah/Surat Keterangan Lulus/Kartu Ujian</label><br>
                                    <input type="file" accept="pdf/*" name="berkas_ijazah" class="border border-dark rounded" required>
                                </div>
                            </div>
                            <div class="form-group mb-3 mx-auto">
                                <div class="btn">
                                    <label>Akte Kelahiran/Surat Keterangan Lahir</label><br>
                                    <input type="file" accept="pdf/*" name="berkas_akta" class="border border-dark rounded" required>
                                </div>
                            </div>
                            <div class="form-group mb-3 mx-auto">
                                <div class="btn">
                                    <label>Kartu Keluarga (minimal satu tahun)</label><br>
                                    <input type="file" accept="pdf/*" name="berkas_kk" class="border border-dark rounded" required>
                                </div>
                            </div>
                            <div class="form-group mb-3 mx-auto">
                                <div class="btn">
                                    <label>KTP Orang Tua</label><br>
                                    <input type="file" accept="pdf/*" name="berkas_ktp_ortu" class="border border-dark rounded" required>
                                </div>
                            </div>
                            <div class="form-group mb-3 mx-auto">
                                <div class="btn">
                                    <label>Buku Raport(Kelas 4-6)</label><br>
                                    <input type="file" accept="pdf/*" name="berkas_rapor" class="border border-dark rounded" required>
                                </div>
                            </div>
                            <div class="form-group mb-3 mx-auto">
                                <div class="btn">
                                    <label>Surat Tanggung Jawab Mutlak Orang Tua</label><br>
                                    <input type="file" accept="pdf/*" name="berkas_surat_mutlak" class="border border-dark rounded" required>
                                </div>
                            </div>
                            <div class="form-group mb-3 mx-auto">
                                <div class="btn">
                                    <label>Ijazah MDA/MDTA</label><br>
                                    <input type="file" accept="pdf/*" name="berkas_ijazah_mda" class="border border-dark rounded" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- orang tua -->
        <div class="row">
            <div class="col">
                <div class="card border-danger">
                    <h5 class="card-header bg-danger text-white">Data Orang Tua</h5>
                    <div class="row">
                        <div class="col-6">
                            <div class="rounded shadow">
                                <h4 class="font-weight-bold text-center bg-gray-light p-2">Data Ayah</h4>
                                <div class="card-body pt-0">
                                    <div class="form-group mb-3">
                                        <label>Nama Ayah</label>
                                        <input type="text" class="form-control" name="ortu_nama_ayah" value="<?= $dt_siswa['ortu_nama_ayah'] ?>" required disabled>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="bold">Pendidikan Ayah</label>
                                        <input type="text" class="form-control" name="ortu_pendidikan_ayah" value="<?= $dt_siswa['ortu_pendidikan_ayah'] ?>" required disabled>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="bold">Telepon Ayah</label>
                                        <input type="text" class="form-control" name="ortu_telepon_ayah" value="<?= $dt_siswa['ortu_telepon_ayah'] ?>" required disabled>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="bold">Pekerjaan Ayah</label>
                                        <input type="text" class="form-control" name="ortu_pekerjaan_ayah" value="<?= $dt_siswa['ortu_pekerjaan_ayah'] ?>" required disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded shadow mt-3">
                                <h4 class="font-weight-bold text-center bg-gray-light p-2">Data Wali</h4>
                                <div class="card-body pt-0">
                                    <div class="form-group mb-3">
                                        <label>Nama Wali</label>
                                        <input type="text" class="form-control" name="ortu_nama_wali" value="<?= $dt_siswa['ortu_nama_wali'] ?>" disabled>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="bold">Pendidikan Wali</label>
                                        <input type="text" class="form-control" name="ortu_pendidikan_wali" value="<?= $dt_siswa['ortu_pendidikan_wali'] ?>" disabled>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="bold">Telepon Wali</label>
                                        <input type="text" class="form-control" name="ortu_telepon_wali" value="<?= $dt_siswa['ortu_telepon_wali'] ?>" disabled>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="bold">Pekerjaan Wali</label>
                                        <input type="text" class="form-control" name="ortu_pekerjaan_wali" value="<?= $dt_siswa['ortu_pekerjaan_wali'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="rounded shadow">
                                <h4 class="font-weight-bold text-center bg-gray-light p-2">Data Ibu</h4>
                                <div class="card-body pt-0">
                                    <div class="form-group mb-3">
                                        <label>Nama Ibu</label>
                                        <input type="text" class="form-control" name="ortu_nama_ibu" value="<?= $dt_siswa['ortu_nama_ibu'] ?>" required disabled>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="bold">Pendidikan Ibu</label>
                                        <input type="text" class="form-control" name="ortu_pendidikan_ibu" value="<?= $dt_siswa['ortu_pendidikan_ibu'] ?>" required disabled>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="bold">Telepon Ibu</label>
                                        <input type="text" class="form-control" name="ortu_telepon_ibu" value="<?= $dt_siswa['ortu_telepon_ibu'] ?>" required disabled>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="bold">Pekerjaan Ibu</label>
                                        <input type="text" class="form-control" name="ortu_pekerjaan_ibu" value="<?= $dt_siswa['ortu_pekerjaan_ibu'] ?>" required disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>