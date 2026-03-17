<section class="nmc-section voice-section"> 
    <div class="voice-section-header"> 
        <div class="container"> 
            <div class="nmc-section-bg voice-section-header__bg"> 
                <img class="d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg-image-voice.jpg" alt="bg image voice desktop">
                <img class="d-md-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg-voice-mb.jpg" alt="bg image voice desktop">
            </div>
            <div class="voice-section-header-content text-center"> 
                <h2 class="voice-section-header__heading ncm-heading-highlight m-0">Voice</h2>
                <p class="voice-section-header__desc h2 m-0">Nineメンバーの声</p>
            </div>
        </div>
    </div>

    <?php 
        $args = array(
            'post_type'      => 'customer-voice',
            'posts_per_page' => 4,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        );

        $query = new WP_Query($args);
    ?>

     <?php if ($query->have_posts()): ?>
        <div class="voice-section-main"> 
            <div class="nmc-section-bg bg"> 
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg-main-voice.jpg" alt="bg image main vocie">
            </div>

            <div class="container"> 
                <div class="voice-section__list"> 
                    <?php $index = 1; ?>
                    <?php while ($query->have_posts()): $query->the_post(); ?>
                        <div class="item-voice" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="<?php echo $index * 200; ?>">
                            <div class="item-voice__thumbnail"> 
                                <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                            </div>

                            <div class="item-voice-inner"> 
                                <h3 class="item-voice__title mb-0 text-center"><?php the_title(); ?></h3>
                                <div class="item-voice__content"> 
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>