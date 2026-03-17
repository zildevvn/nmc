<?php
/**
 * Template Name: Activity
 */
get_header();
?>
<main id="primary" class="site-main">
    <section class="nmc-section category-section ">
        <div class="container">
            <?php nmc_get_posts_by_post_type('activity', -1, 'Activity', '活動記録', 'その他の活動記録はこちら') ; ?>
        </div>
    </section>
    <?php get_template_part('template-parts/shared/contact-section'); ?>
</main>
<?php get_footer(); ?>