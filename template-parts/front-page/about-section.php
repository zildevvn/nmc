<section class="nmc-section about-section" >
    <div class="nmc-section-bg about-section-bg">
        <img class="d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg-member.jpg" alt="background about section" />
        <img class="d-md-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg_about_mb.jpg" alt="background about section mobile" />
    </div>

    <div class="container">
        <div class="nmc-section-content about-section-content" >
            <h2 class="about-section__title ncm-heading-highlight" data-aos="fade-up" data-aos-easing="ease-in-out">About</h2>
            <p class="about-section__desc h2" data-aos="fade-up" data-aos-easing="ease-in-out">Nine Members Clubについて</p>
            <div class="about-section__media" data-aos="fade-up" data-aos-easing="ease-in-out">
                <div class="about-section__media__image d-flex justify-content-start justify-content-md-end"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/image-about.jpg" alt="image member" />
                </div>
                
                <div class="about-section__media__text">
                    <p>日本初のポーカー実業団を擁する 「ナインメンバーズクラブ」。</p>
                    <p>渋谷の豪華拠点「ベルテックス東京」を舞台に、ナイン専属のプロ契約や 世界大会挑戦をサポートします。</p>
                    <p>2030年大阪IRを見据えた教育、海外視察、多彩なイベントも充実。月額1万円で遊びと夢を両立し、1万人の仲間と人生を極めませんか？</p>
                </div>
            </div>

            <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-easing="ease-in-out">
                <?php $link = esc_url( home_url( '/about/' ) ); ?>
                <?php nmc_get_button('詳細はこちら', $link, '_self', 'is-style-secondary'); ?>
            </div>

            <div class="about-section__image" data-aos="fade-up" data-aos-easing="ease-in-out">
                <figure class="wp-block-video">
                    <?php $about_video = home_url( '/wp-content/uploads/2026/03/about.mp4' ); ?>
                    <video controls preload="metadata" src="<?php echo esc_url( $about_video ); ?>#t=0.5" data-src="<?php echo esc_url( $about_video ); ?>#t=0.5" class="lazyloading">
                        <noscript><video controls preload="metadata" src="<?php echo esc_url( $about_video ); ?>#t=0.5"></noscript>
                    </video>
                </figure>
            </div>
        </div>
    </div>
</section>