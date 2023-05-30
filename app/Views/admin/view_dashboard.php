<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<div class="col">
    <div class="row mx-3">
        Tahun Ajaran : <?= $dtTA['ta_tahun_ajaran'] ?>
    </div>
    <div class="row m-3">
        <div class="col-lg-3 col-md-2">
            <form action="<?= base_url('datasiswa/filter') ?>" method="post">
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3><?= count($dtSiswaTerdaftar) ?></h3>
                        <p>Jumlah Siswa Terdaftar</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-address-book"></i>
                    </div>
                    <input type="hidden" name="rdTA" value="<?= $dtTA['ta_id'] ?>">
                    <input type="hidden" name="cmbStatusPendaftaran" value="Terdaftar">
                    <button type="submit" class="small-box-footer btn btn-link w-100">Selengkapnya<i class="fas fa-arrow-circle-right pl-2"></i></button>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-md-2">
            <form action="<?= base_url('datasiswa/filter') ?>" method="post">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= count($dtSiswaDiterima) ?></h3>
                        <p>Jumlah Siswa Diterima</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-check"></i>
                    </div>
                    <input type="hidden" name="rdTA" value="<?= $dtTA['ta_id'] ?>">
                    <input type="hidden" name="cmbStatusPendaftaran" value="Diterima">
                    <button type="submit" class="small-box-footer btn btn-link w-100">Selengkapnya<i class="fas fa-arrow-circle-right pl-2"></i></button>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-md-2">
            <form action="<?= base_url('datasiswa/filter') ?>" method="post">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?= count($dtSiswaTidakDiterima) ?></h3>
                        <p>Jumlah Siswa Ditolak</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-times"></i>
                    </div>
                    <input type="hidden" name="rdTA" value="<?= $dtTA['ta_id'] ?>">
                    <input type="hidden" name="cmbStatusPendaftaran" value="Tidak Diterima">
                    <button type="submit" class="small-box-footer btn btn-link w-100">Selengkapnya<i class="fas fa-arrow-circle-right pl-2"></i></button>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-md-2">
            <form action="<?= base_url('datasiswa/filter') ?>" method="post">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?= count($dtSiswaMengundurkanDiri) ?></h3>
                        <p>Siswa Mengundurkan Diri</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-times"></i>
                    </div>
                    <input type="hidden" name="rdTA" value="<?= $dtTA['ta_id'] ?>">
                    <input type="hidden" name="cmbStatusPendaftaran" value="Mengundurkan Diri">
                    <button type="submit" class="small-box-footer btn btn-link w-100">Selengkapnya<i class="fas fa-arrow-circle-right pl-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modalTAFilter">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Filter Data Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('datasiswa/filtertahun') ?>" method="post">
                <div class="modal-body">
                    <label>Pilih Tahun Ajaran</label>
                    <table class="table table-bordered table-striped" id="tbTAFilter">
                        <thead>
                            <tr>
                                <th class="cellFit">#</th>
                                <th>Tahun Ajaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (session('filterDataSiswa')) : ?>
                                <?php foreach ($listTA as $ta) : ?>
                                    <tr>
                                        <td>
                                            <input type="radio" name="rdTA" id="rdTA<?= $ta['ta_id'] ?>" value="<?= $ta['ta_id'] ?>" <?= (session('filterDataSiswa')['ta'] == $ta['ta_id']) ? 'checked' : '' ?> required>
                                        </td>
                                        <td>
                                            <label for="rdTA<?= $ta['ta_id'] ?>"><?= $ta['ta_tahun_ajaran'] ?></label>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            <?php else : ?>
                                <?php foreach ($listTA as $ta) : ?>
                                    <tr>
                                        <td>
                                            <input type="radio" name="rdTA" id="rdTA<?= $ta['ta_id'] ?>" value="<?= $ta['ta_id'] ?>" required>
                                        </td>
                                        <td>
                                            <label for="rdTA<?= $ta['ta_id'] ?>"><?= $ta['ta_tahun_ajaran'] ?></label>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" onclick="window.location.href='<?= base_url('datasiswa/resetfilter') ?>'">Reset Filter</button>
                    <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?= $this->endSection(); ?>
<?= $this->section('bottomScript'); ?>
<script>
    const btn = $('<button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#modalTAFilter"></button>').html('Filter Tahun Ajaran');
    $("#addInfo").append(btn);
    $("#tbTAFilter").DataTable();
</script>
<?= $this->endSection(); ?>