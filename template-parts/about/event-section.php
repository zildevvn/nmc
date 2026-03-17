<section class="nmc-section event-section">
    <div class="nmc-section-bg">
        <img class="d-none d-md-block" src="<?= get_template_directory_uri(); ?>/assets/images/about/bg-perk.jpg" alt="image event desktop" />
        <img class="d-block d-md-none" src="<?= get_template_directory_uri(); ?>/assets/images/about/image-ev-mb.jpg" alt="image event mobile" />
    </div>

    <div class="container">
        <div class="event-section-warp text-center">
            <h2 class="ncm-heading-highlight mb-0" data-aos="fade-up" data-aos-easing="ease-in-out">
                Event
            </h2>

            <p class="h2 w-100 mb-0" data-aos="fade-up" data-aos-easing="ease-in-out">
                イベントカレンダー
            </p>

            <?php get_template_part('template-parts/shared/event-list', null, [
                'aos' => 'fade-up',
                'aos_easing' => 'ease-in-out'
            ]); ?>

        </div>
    </div>
</section>