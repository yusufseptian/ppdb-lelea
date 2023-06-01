<?= $this->extend('template_siswa/dashboard') ?>
<?= $this->section('content') ?>
<?php
if ($dt_siswa['siswa_status_pendaftaran'] == 'Diterima') {
    if ($dtRanking['ranking'] > $dtTA['ta_kuota']) {
        $class = 'bg-danger';
    } else {
        $class = 'bg-success';
    }
} elseif ($dt_siswa['siswa_status_pendaftaran'] == 'Terdaftar') {
    $class = 'bg-warning';
} else {
    $class = 'bg-danger';
}
?>
<form action="<?= base_url('daftar/update') ?>" method="post" enctype="multipart/form-data">
    <div class="row" style="margin-inline: 100px;">
        <div class="col-12">
            <div class="card border-info <?= $class ?>">
                <div class="card-header text-white">
                    <div class="d-flex justify-content-between">
                        <h5>Pengumuman</h5>
                        <?php if ($dt_siswa['siswa_status_pendaftaran'] == 'Tidak Diterima' && $isOpened) : ?>
                            <div style="width: fit-content;">
                                <button type="button" id="btnEdit" class="btn btn-warning btn-sm my-auto">Edit Data</button>
                                <button type="submit" id="btnSaveEdit" class="btn btn-primary btn-sm my-auto mr-3 d-none">Simpan</button>
                                <button type="button" id="btnBatalEdit" class="btn btn-danger btn-sm my-auto d-none" onclick="window.location.reload()">Batal</button>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="card-body d-flex flex-column text-center p-5">
                    <?php if ($dt_siswa['siswa_status_pendaftaran'] == 'Diterima') : ?>
                        <?php if ($dtRanking['ranking'] > $dtTA['ta_kuota']) : ?>
                            <h1 class="w-100 my-auto"><b>Maaf anda tidak lolos pendaftaran</b></h1>
                            <h6 class="m-0"><i>Hasil ini masih dapat berubah selama rentang waktu pendaftaran. Silahkan pantau perankingan.</i></h6>
                        <?php else : ?>
                            <h1 class="w-100 my-auto"><b>Selamat anda diterima.</b></h1>
                            <h6 class="m-0"><i>Hasil ini masih dapat berubah selama rentang waktu pendaftaran. Silahkan pantau perangkingan.</i></h6>
                        <?php endif ?>
                    <?php elseif ($dt_siswa['siswa_status_pendaftaran'] == 'Tidak Diterima') : ?>
                        <h1 class="w-100 my-auto"><b>Maaf pendaftaran anda ditolak.</b></h1>
                        <h6 class="m-0"><i>Pendaftaran anda ditolak karena <?= $dt_siswa['siswa_alasan_ditolak'] ?></i></h6>
                    <?php else : ?>
                        <h1 class="w-100 my-auto"><b>Pendaftaran anda masih dalam proses pengecekan.</b></h1>
                        <h6 class="m-0"><i>Mohon pantau terus akun anda untuk informasi selanjutnya.</i></h6>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="col">
            <!-- siswa -->
            <div class="row">
                <div class="col-6">
                    <div class="card border-info">
                        <h5 class="card-header bg-info text-white">Data Siswa</h5>
                        <div class="card-body" id="dataSiswaForm">
                            <div class="form-group mb-3">
                                <label>NISN</label>
                                <input type="text" id="txtNISN" class="form-control" name="siswa_nisn" value="<?= $dt_siswa['siswa_nisn'] ?>" required disabled>
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
                                <select class="form-control" name="siswa_jk" required disabled>
                                    <option value="Laki-Laki" <?= ($dt_siswa['siswa_jk'] == 'Laki-Laki') ? 'selected' : '' ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?= ($dt_siswa['siswa_jk'] == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
                                </select>
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
                                <?php if ($dt_siswa['siswa_status_pendaftaran'] == 'Tidak Diterima' && $isOpened) : ?>
                                    <div class="col text-center d-none" id="editBerkasForm">
                                        <div class="alert alert-info text-left" role="alert">
                                            Mohon isi ulang berkas dengan lengkap dan sesuai agar data anda cepat diproses.
                                        </div>
                                        <div class="btn form-group mb-3">
                                            <label>Ijazah/Surat Keterangan Lulus/Kartu Ujian</label><br>
                                            <input type="file" accept="pdf/*" name="berkas_ijazah" class="border border-dark rounded" required>
                                        </div>
                                        <div class="btn form-group mb-3">
                                            <label>Akte Kelahiran/Surat Keterangan Lahir</label><br>
                                            <input type="file" accept="pdf/*" name="berkas_akta" class="border border-dark rounded" required>
                                        </div>
                                        <div class="btn form-group mb-3">
                                            <label>Kartu Keluarga (minimal satu tahun)</label><br>
                                            <input type="file" accept="pdf/*" name="berkas_kk" class="border border-dark rounded" required>
                                        </div>
                                        <div class="btn form-group mb-3">
                                            <label>KTP Orang Tua</label><br>
                                            <input type="file" accept="pdf/*" name="berkas_ktp_ortu" class="border border-dark rounded" required>
                                        </div>
                                        <div class="btn form-group mb-3">
                                            <label>Buku Raport(Kelas 4-6)</label><br>
                                            <input type="file" accept="pdf/*" name="berkas_rapor" class="border border-dark rounded" required>
                                        </div>
                                        <div class="btn form-group mb-3">
                                            <label>Surat Tanggung Jawab Mutlak Orang Tua</label><br>
                                            <input type="file" accept="pdf/*" name="berkas_surat_mutlak" class="border border-dark rounded" required>
                                        </div>
                                        <div class="btn form-group mb-3">
                                            <label>Ijazah MDA/MDTA</label><br>
                                            <input type="file" accept="pdf/*" name="berkas_ijazah_mda" class="border border-dark rounded" required>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <div class="col text-center" id="previewBerkasForm">
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
</form>
<?= $this->endSection() ?>
<?= $this->section('bottomScript'); ?>
<script>
    <?php if ($dt_siswa['siswa_status_pendaftaran'] == 'Tidak Diterima' && $isOpened) : ?>
        $("#btnEdit").click(function() {
            $("input").removeAttr('disabled');
            $("textarea").removeAttr('disabled');
            $("select").removeAttr('disabled');
            $("#editBerkasForm").removeClass('d-none');
            $("#btnSaveEdit").removeClass('d-none');
            $("#btnBatalEdit").removeClass('d-none');
            $("#previewBerkasForm").addClass('d-none');
            $("#btnEdit").addClass('d-none');
            $("#txtNISN").attr('disabled', '');
        });
    <?php endif ?>
</script>
<?= $this->endSection() ?>