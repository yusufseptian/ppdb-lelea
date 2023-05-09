<div class="container position-relative">
    <section class="splide" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">

                <?php foreach ($prestasi as $key => $value) { ?>
                    <div class="splide__slide">
                        <div class="testimonial-item">
                            <img src="<?= base_url('foto_prestasi/' . $value['p_foto']) ?>" class="testimonial-img" alt="">
                            <h2 class="mt-5"><?= $value['p_nama'] ?></h2>
                            <div class="h5 mt-3">
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <?= $value['p_prestasi'] ?> - <?= $value['p_keterangan'] ?> pada tanggal <?= $value['p_tahun'] ?>
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </div>
                            <div class="h6">Tingkat <?= $value['p_tingkat'] ?></div>
                        </div>
                    </div>
                <?php } ?>

            </ul>
        </div>
    </section>

    <div class="swiper-pagination"></div>
</div>