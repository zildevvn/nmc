<section class="nmc-section vertex-section">
    <div class="nmc-section-bg vertex-section-bg"> 
        <img class="d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/bg-sec.png" alt="background video desktop" />
        <img class="d-block d-md-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/bg-sec-mb.png" alt="background video mobile" />
    </div>

    <div class="container"> 
        <div class="vertex-section-content text-center"> 
            <img data-aos="fade-up" data-aos-easing="ease-in-out" src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/logo-ver.png" alt="image section" />
            <div class="vertex-section__video" data-aos="fade-up" data-aos-easing="ease-in-out"> 
                <figure class="wp-block-video">
                    <?php $vertex_video = home_url( '/wp-content/uploads/2026/03/vertex.mp4' ); ?>
                    <video controls playsinline autoplay muted loop preload="metadata">
                        <source src="<?php echo esc_url( $vertex_video ); ?>" type="video/mp4">
                    </video>
                </figure>
            </div>
        </div>
    </div>
</section>