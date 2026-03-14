<?php
/**
 * Template Name: Activity
 */
get_header();
?>
<main id="primary" class="site-main">
    <section class="nmc-section category-section ">
        <div class="container">
            <?php
                nmc_get_posts_by_category('record', -1, 'Activity');
            ?>
        </div>
    </section>
    <?php get_template_part('template-parts/shared/contact-section'); ?>
</main>
<?php get_footer(); ?>