<section class="nmc-section contact-section">
    <div class="nmc-section-bg contact-section-bg"> 
        <img class="d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg-contact-desktop.jpg" alt="bg image contact desktop">
        <img class="d-md-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg-contact-mobile.jpg" alt="bg image contact mb">
    </div>
    <div class="container">
        <div class="contact-section-content text-center">
            <h2 class="contact-section-content__title ncm-heading-highlight mb-0" data-aos="fade-up" data-aos-easing="ease-in-out">CONTACT</h2>
            <p class="contact-section__desc h2 mb-0" data-aos="fade-up" data-aos-easing="ease-in-out">お問い合わせ</p>
            <p class="mb-0" data-aos="fade-up" data-aos-easing="ease-in-out">ご不明な点はお気軽にお問い合わせください</p>

            <div class="contact-section__action d-flex justify-content-center align-items-center flex-wrap" data-aos="fade-up" data-aos-easing="ease-in-out"> 
                <?php nmc_get_button('よくあるご質問', esc_url( home_url( '/about?#nmc-faqs' ) ), '_self', 'is-style-secondary') ?>
                <?php nmc_get_button('お問い合わせはこちら', '/contact', '_self', 'is-style-green') ?>
            </div>
        </div>
    </div>
</section>