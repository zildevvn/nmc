<?php 
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo_url       = wp_get_attachment_url($custom_logo_id);
    $cta            = get_field('cta_header', 'option');
?>
<header id="site-header" class="header-main">
    <div class="container"> 
        <div class="header-inner d-flex justify-content-between align-items-center"> 
            <div class="header-logo">
                <a href="<?php echo home_url(); ?>" aria-label="<?php echo get_bloginfo('name'); ?>">
                    <img src="<?php echo $logo_url; ?>" alt="<?php echo get_bloginfo('name'); ?>">
                </a>
            </div>

            <div class="header-right d-none d-lg-flex align-items-center"> 
                <?php  if (has_nav_menu('primary-menu')): ?>
                    <div class="header-menu">
                        <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class' => 'primary-menu')) ?>
                    </div>
                <?php endif; ?>

                <?php if ($cta): ?>
                    <div class="header-cta">
                        <?php nmc_get_button($cta['title'], $cta['url'], $cta['target']); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="header-humberger d-block d-lg-none"> 
                <button class="humberger-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</header>