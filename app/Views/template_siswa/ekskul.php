<div class="container">

    <div class="section-title">
        <h2>Ekstrakurikuler</h2>
        <p>SMP Negeri 2 Lelea, memiliki beberapa ekstrakurikuler yang bagus, unggul, dan berkualitas. Dibuktikan dengan diraihnya penghargaan diberbagai bidang kejuaraan, mulai dari tinggat Kecamatan, Kabupaten, Provinsi, dan Nasional.</p>
    </div>

    <div class="row">
        <div class="owl-carousel owl-theme">
            <?php foreach ($ekskul as $key => $value) { ?>
                <div class="member item">
                    <div class="member-img">
                        <img src="<?= base_url('foto_ekskul/' . $value['eks_foto']) ?>" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4><?= $value['eks_nama'] ?></h4>
                        <span><?= $value['eks_kategori'] ?></span>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</div>