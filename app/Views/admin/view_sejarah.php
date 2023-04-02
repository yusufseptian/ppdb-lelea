<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <button class="btn btn-sm btn-primary tambah" data-toggle="modal" data-target="#add">
                Ubah Data
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="d-flex justify-content-between mb-2">
            <div class="row" id="detailFormItems">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Sekolahan</label>
                        <input name="txtNamaBarber" id="txtNamaBarber" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Kepala Sekolah</label>
                        <input id="txtNama" class="form-control" placeholder="Nama Pemilik">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input id="txtTelepon" class="form-control" placeholder="Nomor Telepon">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kontak</label>
                        <input id="txtProvinsi" class="form-control" placeholder="Nama Pemilik">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>NPSB</label>
                        <input id="txtKabupaten" class="form-control" placeholder="Nama Pemilik">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Status</label>
                        <input id="txtKecamatan" class="form-control" placeholder="Nama Pemilik">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Akreditasi</label>
                        <input id="txtLatitude" class="form-control" placeholder="Nama Pemilik">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Visi</label>
                        <textarea class="form-control" name="" id="" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Misi</label>
                        <textarea class="form-control" name="" id="" rows="3"></textarea>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>