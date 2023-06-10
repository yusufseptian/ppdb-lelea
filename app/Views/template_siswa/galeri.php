<div class="container">

    <div class="section-title">
        <h2>Galeri</h2>
        <p>Adapun fasilitas dan kegiatan di SMP Negeri 2 Lelea dapat dilihat dibawah ini:</p>
    </div>

    <div class="row no-gutters">
        <div class="owl-carousel owl-theme">
            <?php foreach ($galeri as $key => $value) { ?>
                <div class="item">
                    <div class="gallery-item">
                        <a href="<?= base_url('foto_galeri/' . $value['galeri_foto']) ?>" class="galleery-lightbox" data-gallery="gallery-item">
                            <img src="<?= base_url('foto_galeri/' . $value['galeri_foto']) ?>" alt="" class="img-fluid">
                        </a>
                        <h6 class="mt-3 text-center"><?= $value['galeri_nama'] ?></h6>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</div>