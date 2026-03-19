<?php
$pokers = [
    [
        'title' => '長見恭輔',
        'image' => 'assets/images/partners/avatar-001.png',
    ],
    [
        'title' => '長見恭輔',
        'image' => 'assets/images/partners/avatar-001.png',
    ],
    [
        'title' => '長見恭輔',
        'image' => 'assets/images/partners/avatar-001.png',
    ],
    [
        'title' => '長見恭輔',
        'image' => 'assets/images/partners/avatar-001.png',
    ],
    [
        'title' => '長見恭輔',
        'image' => 'assets/images/partners/avatar-001.png',
    ],
    [
        'title' => '長見恭輔',
        'image' => 'assets/images/partners/avatar-001.png',
    ],
    [
        'title' => '長見恭輔',
        'image' => 'assets/images/partners/avatar-001.png',
    ],
    [
        'title' => '長見恭輔',
        'image' => 'assets/images/partners/avatar-001.png',
    ],
    [
        'title' => '長見恭輔',
        'image' => 'assets/images/partners/avatar-001.png',
    ],

]

?>

<section class="nmc-section poker-section">
    <div class="nmc-section-bg poker-section-bg"> 
        <img class="d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/bg-poker.jpg" alt="background video desktop" />
        <img class="d-block d-md-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/bg-poker-mb.jpg" alt="background video mobile" />
    </div>

    <div class="container text-center"> 
        <h2 class="partners-section__title ncm-heading-highlight m-0" data-aos="fade-up" data-aos-easing="ease-in-out">PARTNER</h2>
        <p class="h2 mb-0" data-aos="fade-up" data-aos-easing="ease-in-out"> ポーカープロ</p>

        <?php 
            $args = array(
                'post_type'      => 'poker',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $query = new WP_Query($args);
        ?>

        <?php if ($query->have_posts()): ?>
            <div class="poker-section__list"> 
                <?php $index = 1; ?>
               <?php while ($query->have_posts()): $query->the_post(); ?>
                    <div 
                        class="item-poker" 
                        data-aos="fade-up" 
                        data-aos-easing="ease-in-out" 
                        data-aos-delay="<?php echo $index * 200; ?>"
                    > 
                        <div class="item-poker__bg">
                            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/bg-poker-card.png" alt="background video desktop" />
                        </div>
                        
                        <div class="item-poker__image">
                            <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                        </div>

                        <p class="item-poker__title">
                            <?php the_title(); ?>
                        </p>
                    </div>
                <?php $index++; endwhile; wp_reset_postdata(); ?>
            </div>
        <?php endif;?>    
    </div>
</section>