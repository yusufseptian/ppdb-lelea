<div class="container">

    <div class="section-title">
        <h2>Galeri</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row no-gutters">
        <div class="owl-carousel owl-them">
            <?php foreach ($galeri as $key => $value) { ?>
                <div class="gallery-item item">
                    <a href="<?= base_url('foto_galeri/' . $value['galeri_foto']) ?>" class="galleery-lightbox" data-gallery="gallery-item">
                        <img src="<?= base_url('foto_galeri/' . $value['galeri_foto']) ?>" alt="" class="img-fluid">
                    </a>
                    <h6 class="mt-3"><?= $value['galeri_nama'] ?></h6>
                </div>
            <?php } ?>
        </div>
    </div>

</div>