<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
<div class="row" style="margin-inline: 100px;">
    <div class="col">
        <!-- siswa -->
        <div class="row">
            <?php if (!is_null($dt_siswa['siswa_deleted_at'])) : ?>
                <div class="col-12">
                    <div class="card border-info">
                        <h5 class="card-header bg-danger text-white">Siswa Telah Mengundurkan Diri</h5>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>Diurus oleh:</td>
                                    <td>:</td>
                                    <td>
                                        <?= (is_null($dt_siswa['siswa_deleted_by'])) ? 'Diri sendiri' : $dt_siswa['user_username'] ?>
                                    </td>
                                </tr>
                            </table>
                            <div class="form-group">
                                <label for="txtAlasan">Alasan</label>
                                <textarea id="txtAlasan" class="form-control" rows="3" disabled><?= $dt_siswa['siswa_alasan_pengunduran'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>
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
                <?php if (is_null($dt_siswa['siswa_deleted_at'])) : ?>
                    <div class="card border-info">
                        <h5 class="card-header bg-info text-white">Berkas Calon Peserta Didik</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="form-group mb-3 mx-auto">
                                        <div class="btn" data-toggle="tooltip" data-placement="top" title="Cek File">
                                            <label>Ijazah/Surat Keterangan Lulus/Kartu Ujian</label><br>
                                            <a href="<?= base_url('ijazah_siswa/' . $dt_siswa['berkas_ijazah'])  ?>" target="_blank"><img width="50px" src="<?= base_url('/assets/pdf.png') ?>" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 mx-auto">
                                        <div class="btn" data-toggle="tooltip" data-placement="top" title="Cek File">
                                            <label>Akte Kelahiran/Surat Keterangan Lahir</label><br>
                                            <a href="<?= base_url('akta_siswa/' . $dt_siswa['berkas_akta'])  ?>" target="_blank"><img width="50px" src="<?= base_url('/assets/pdf.png') ?>" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 mx-auto">
                                        <div class="btn" data-toggle="tooltip" data-placement="top" title="Cek File">
                                            <label>Kartu Keluarga (minimal satu tahun)</label><br>
                                            <a href="<?= base_url('kk_siswa/' . $dt_siswa['berkas_kk'])  ?>" target="_blank"><img width="50px" src="<?= base_url('/assets/pdf.png') ?>" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 mx-auto">
                                        <div class="btn" data-toggle="tooltip" data-placement="top" title="Cek File">
                                            <label>KTP Orang Tua</label><br>
                                            <a href="<?= base_url('ktp_ortu_siswa/' . $dt_siswa['berkas_ktp_ortu'])  ?>" target="_blank"><img width="50px" src="<?= base_url('/assets/pdf.png') ?>" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 mx-auto">
                                        <div class="btn" data-toggle="tooltip" data-placement="top" title="Cek File">
                                            <label>Buku Raport(Kelas 4-6)</label><br>
                                            <a href="<?= base_url('rapor_siswa/' . $dt_siswa['berkas_rapor'])  ?>" target="_blank"><img width="50px" src="<?= base_url('/assets/pdf.png') ?>" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 mx-auto">
                                        <div class="btn" data-toggle="tooltip" data-placement="top" title="Cek File">
                                            <label>Surat Tanggung Jawab Mutlak Orang Tua</label><br>
                                            <a href="<?= base_url('surat_mutlak_siswa/' . $dt_siswa['berkas_surat_mutlak'])  ?>" target="_blank"><img width="50px" src="<?= base_url('/assets/pdf.png') ?>" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 mx-auto">
                                        <div class="btn" data-toggle="tooltip" data-placement="top" title="Cek File">
                                            <label>Ijazah MDA/MDTA</label><br>
                                            <a href="<?= base_url('ijazah_mda_siswa/' . $dt_siswa['berkas_ijazah_mda'])  ?>" target="_blank"><img width="50px" src="<?= base_url('/assets/pdf.png') ?>" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
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
<?php if (is_null($dt_siswa['siswa_deleted_at'])) : ?>
    <div class="w-100 text-center p-3">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalPengunduranDiri">Pengunduran Diri</button>
    </div>
    <div class="modal fade" id="modalPengunduranDiri" tabindex="-1" aria-labelledby="modalPengunduranDiriLabel" aria-hidden="true">
        <form action="<?= base_url('siswa/pengundurandiri/' . $dt_siswa['siswa_nisn']) ?>" method="post">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title" id="modalPengunduranDiriLabel">Pengunduran Diri</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" id="closePengunduranDiri" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger mb-3" role="alert">
                            <b><i class="fas fa-exclamation-triangle"></i> Perhatian</b>
                            <div class="ps-2">Jika mengundurkan diri data ini tidak bisa digunakan mendaftar kembali pada tahun ajaran ini.</div>
                        </div>
                        <div>
                            <label for="txtAlasan" class="mb-1 form-label" style="font-weight: normal;">Jika anda yakin, maka masukan alasan pengunduran diri:</label>
                            <textarea name="txtAlasan" id="txtAlasan" class="form-control" rows="3" placeholder="Masukan alasan pengunduran diri" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Lanjutkan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php endif ?>
<?= $this->endSection() ?>