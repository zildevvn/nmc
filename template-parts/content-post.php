<?php

/**
 * Template part for displaying posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package nmc
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="container"> 
        <?php
            $categories = get_the_category();
            $category = !empty($categories) ? $categories[0] : null;
            $category_slug = $category ? $category->slug : '';
            $sub_title = '';

            if ($category) {
                switch ($category_slug) {
                    case 'record':
                        $cate_name_jp = '活動記録';
                        break;
                    case 'news':
                        $cate_name_jp = 'ニュース';
                        break;
                    default:
                        $cate_name_jp = '';
                }
                $sub_title = $cate_name_jp ? : $category->name;
            }
        ?>
        <p class="post__date d-flex align-items-center m-0">
            <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M12 6L12 12L18 12" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <?php echo get_the_date('n月j日Y'); ?>
        </p>

        <h1 class="post__title h2"> <?php the_title() ?> </h1>

        <?php if ($sub_title) : ?>
            <div class="post__category d-flex align-items-center">
                <div class="icon"> 
                    <?php if($category_slug == 'news'):?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-pen.png" alt="">
                    <?php else: ?>	
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-doc.png" alt="">
                    <?php endif; ?>
                </div>
                <?php echo esc_html($sub_title); ?>
            </div>
        <?php endif; ?>

        <div class="post__thumbnail">
			<?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
		</div>

        <div class="post__content">
            <?php the_content() ?>
        </div>
   </div>
</div>


  <?php
    $related_args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'category_name'  => $category_slug,
        'post__not_in'   => array(get_the_ID()),
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $related_query = new WP_Query($related_args);

    if ($related_query->have_posts()): ?>
        <div class="nmc-related-posts nmc-category-posts">
            <div class="container">
                <h2 class="category-title ncm-heading-highlight m-0" data-aos="fade-up" data-aos-easing="ease-in-out">
                    Related Posts
                </h2>

                <div class="category-sub-title d-flex align-items-center" data-aos="fade-up" data-aos-easing="ease-in-out">
                    <div class="icon"> 
                        <?php if($category_slug == 'news'):?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-pen.png" alt="">
                        <?php else: ?>	
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-doc.png" alt="">
                        <?php endif; ?>
                    </div>
                    <?php echo esc_html($sub_title); ?>
                </div>

                <div class="category-posts-list">
                    <?php $index = 0; ?>
                    <?php while ($related_query->have_posts()): $related_query->the_post(); ?>
                        <div class="item-post" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="<?php echo $index * 200; ?>">
                            <div class="item-post__thumbnail">
                                <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                            </div>

                            <div class="item-post__content"> 
                                <p class="item-post__date d-flex align-items-center m-0">
                                    <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M12 6L12 12L18 12" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    <?php echo get_the_date('n月j日Y'); ?>
                                </p>

                                <h3 class="item-post__title mb-0"><?php the_title(); ?></h3>

                                <div class="item-post__cate d-flex align-items-center justify-content-center">
                                    <?php if($category_slug == 'news'):?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-pen.png" alt="">
                                    <?php else: ?>	
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-doc.png" alt="">
                                    <?php endif; ?>
                                    
                                    <?php echo esc_html($sub_title); ?>
                                </div>
                            </div>

                            <a href="<?php the_permalink(); ?>"> Read More </a>
                        </div>
                    <?php $index++; endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>