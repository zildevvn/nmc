<?php
/**
 * Template Name: About
 */
get_header();
?>

    <main id="primary" class="site-main">
        <?php get_template_part('template-parts/about/hero-section'); ?>
        <?php get_template_part('template-parts/about/about-section'); ?>
        <?php get_template_part('template-parts/about/point-section'); ?>
        <?php get_template_part('template-parts/about/perk-section'); ?>
        <?php get_template_part('template-parts/about/plan-section'); ?>
        <?php get_template_part('template-parts/about/event-section'); ?>
        <?php get_template_part('template-parts/shared/voice-section'); ?>
        <?php get_template_part('template-parts/about/steps-section'); ?>
        <?php get_template_part('template-parts/about/faqs-section'); ?>
        <?php get_template_part('template-parts/shared/partner-section'); ?>
        <?php get_template_part('template-parts/about/perk-grid-section'); ?>
        <?php get_template_part('template-parts/about/company-section'); ?>
        <?php get_template_part('template-parts/shared/contact-section'); ?>
    </main>
<?php get_footer(); ?>