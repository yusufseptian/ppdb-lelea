<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<div class="col">
    <div class="row m-3">
        <div class="col-3">
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3>56</h3>
                    <p>Jumlah Siswa Terdaftar</p>
                </div>
                <div class="icon">
                    <i class="fa fa-address-book"></i>
                </div>
                <a href="<?= base_url('') ?>" class="small-box-footer">Selengkapnya<i class="fas fa-arrow-circle-right pl-2"></i></a>
            </div>
        </div>
        <div class="col-3">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>56</h3>
                    <p>Jumlah Siswa Diterima</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user-check"></i>
                </div>
                <a href="<?= base_url('') ?>" class="small-box-footer">Selengkapnya<i class="fas fa-arrow-circle-right pl-2"></i></a>
            </div>
        </div>
        <div class="col-3">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>56</h3>
                    <p>Jumlah Siswa Ditolak</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user-times"></i>
                </div>
                <a href="<?= base_url('') ?>" class="small-box-footer">Selengkapnya<i class="fas fa-arrow-circle-right pl-2"></i></a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>