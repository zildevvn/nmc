<section class="nmc-section partners-section">
    <div class="nmc-section-bg">
        <img class="d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg_partner.jpg" alt="bg image partners desktop">
        <img class="d-md-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg_partner-mb.jpg" alt="bg image partners mobile">
    </div>

    <div class="container text-center">
        <h2 class="partners-section__title ncm-heading-highlight m-0" data-aos="fade-up" data-aos-easing="ease-in-out">PARTNER</h2>
        <p class="partners-section__desc h2 m-0" data-aos="fade-up" data-aos-easing="ease-in-out"> 所属プロ&提携先 </p>
        <?php 
            $args = array(
                'post_type'      => 'partners',
                'posts_per_page' => 4,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $query = new WP_Query($args);
        ?>

            <?php if ($query->have_posts()): ?>
                <div class="partners-section__list"> 
                    <?php $index = 1 ?>
                    <?php while ($query->have_posts()): $query->the_post(); ?>
                        <div class="item-partner" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="<?php echo $index * 200; ?>"> 
                            <div class="item-partner__thumbnail"> 
                                <div class="bg"> 
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/image-graphic-partners.png" alt="image graphic partner">
                                </div>
                                <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                            </div>

                            <h3 class="item-partner__title mb-0 text-center"><?php the_title(); ?></h3>
                        </div>
                    <?php $index++; endwhile; wp_reset_postdata(); ?>
                </div>

                <div class="partners-section__action">
                    <?php nmc_get_button('所属プロ & 提携先一覧', '/partners', '_self', 'is-style-secondary') ?>
                </div> 
            <?php endif; ?>
        </div>
    </div>
</section>