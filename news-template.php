<?php
/**
 * Template Name: News
 */
get_header();
?>
<main id="primary" class="site-main">
    <section class="nmc-section category-section ">
        <div class="container">
            <?php nmc_get_posts_by_post_type('post', -1, 'News', 'ニュース', 'ニュース一覧') ?>
        </div>
    </section>
    <?php get_template_part('template-parts/shared/contact-section'); ?>
</main>
<?php get_footer(); ?>