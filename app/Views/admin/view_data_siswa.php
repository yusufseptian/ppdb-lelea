<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
<div class="col-sm-12">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <tr>
                        <th>NO</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Sekolah Asal</th>
                        <th>Status</th>
                        <th>AKSI</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($dt_siswa as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['siswa_nisn'] ?></td>
                            <td><?= $value['siswa_nama'] ?></td>
                            <td><?= $value['siswa_sekolah_asal'] ?></td>
                            <td class="text-primary text-center"><?= $value['siswa_status_pendaftaran'] ?></td>

                            <td class="text-center">
                                <button class="btn btn-sm btn-flat btn-info" onclick="window.location.href='<?= base_url('datasiswa/detail/') . $value['siswa_nisn'] ?>'">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-flat btn-success" data-toggle="modal" data-target="#delete<?= $value['siswa_id'] ?>">
                                    <i class="fas fa-check"></i>
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
<?= $this->endSection() ?>