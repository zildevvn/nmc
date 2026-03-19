<section class="nmc-section vertex-section">
    <div class="nmc-section-bg vertex-section-bg"> 
        <img class="d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg-vertex-new.jpg" alt="background video desktop" />
        <img class="d-block d-md-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg-vertex-mb-new.jpg" alt="background video mobile" />
    </div>

    <div class="vertex-section__sub-text" data-aos="fade-up" data-aos-easing="ease-in-out">
        <div class="text-marquee">
            <span>SHIBUYA’S NEW PLAYGROUND SHIBUYA’S NEW PLAYGROUND SHIBUYA’S NEW PLAYGROUND SHIBUYA’S NEW PLAYGROUND</span>
        </div>
    </div>

    <div class="container"> 
        <div class="vertex-section-content"> 
            <h2 class="w-100" data-aos="fade-up" data-aos-easing="ease-in-out">
                渋谷日本最大級ポ<span>ーカースタジアム</span>
                <span> VERTEX TOKYO 運営</span>
            </h2>
            <div class="vertex-section__video" data-aos="fade-up" data-aos-easing="ease-in-out"> 
                <figure class="wp-block-video">
                    <?php $vertex_video = home_url( '/wp-content/uploads/2026/03/vertex.mp4' ); ?>
                    <video controls playsinline preload="metadata" src="<?php echo esc_url( $vertex_video ); ?>">
                    </video>
                </figure>
            </div>
        </div>
    </div>
</section>