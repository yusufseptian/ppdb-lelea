<div class="container position-relative">

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
            <?php foreach ($prestasi as $key => $value) { ?>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="<?= base_url('foto_prestasi/' . $value['p_foto']) ?>" class="testimonial-img" alt="">
                        <h2 class="mt-5"><?= $value['p_judul'] ?></h2>
                        <p class="h5 mt-3">
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            <?= $value['p_keterangan'] ?>
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>

</div>