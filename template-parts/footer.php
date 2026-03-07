<?php 
    $copyright       = get_field('copyright', 'option');
    $rights_reserved = get_field('rights_reserved', 'option');
    $custom_logo_id  = get_theme_mod('custom_logo');
    $logo_url        = wp_get_attachment_url($custom_logo_id);
    $socials         = get_field('socials', 'option');
    $company_name    = get_field('company_name', 'option');
    $main_office     = get_field('main_office', 'option');
    $branch_office   = get_field('branch_office', 'option');
    $email           = get_field('email', 'option');
?>

<footer class="main-footer">
    <div class="container"> 
        <div class="main-footer-inner d-flex justify-content-between "> 
            <div class="main-footer-left"> 
                <div class="main-footer-logo"> 
                    <a href="<?php echo home_url(); ?>" aria-label="<?php echo get_bloginfo('name'); ?>">
                        <img src="<?php echo $logo_url; ?>" alt="<?php echo get_bloginfo('name'); ?>">
                    </a>
                </div>

                <?php if($company_name): ?>
                    <h2 class="main-footer-company"> 
                        <?php echo $company_name; ?> 
                    </h2>
                <?php endif; ?>

                <?php if($main_office): ?>
                    <div class="main-footer-office main">
                        <p>本社</p> 
                        <p><?php echo $main_office['address']; ?> </p>
                        <a href="tel:<?= $main_office['phone'] ?>"><?= $main_office['phone'] ?></a>
                    </div>
                <?php endif; ?>

                <?php if($branch_office): ?>
                    <div class="main-footer-office branch">
                        <p>本社</p> 
                        <p><?php echo $branch_office['address']; ?> </p>
                        <p>電話番号: <a href="tel:<?= $branch_office['phone'] ?>"><?= $branch_office['phone'] ?></a></p>
                    </div>
                <?php endif; ?>

                <?php if($email): ?>
                    <a href="mailto:<?= $email ?>" class="main-footer-email"><?= $email ?> </a>
                <?php endif; ?>

                <?php if($socials): ?>
                    <ul class="main-footer-socials d-flex align-items-center">
                        <?php foreach($socials as $social): ?>
                            <li>
                                <a href="<?= $social['link'] ?>" target="_blank"> 
                                    <img src="<?= $social['icon'] ?>" alt="<?= $social['title'] ?>">
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <?php if($copyright || $rights_reserved): ?>
                    <p class="main-footer-copyright"> 
                       <span> <?php echo $copyright; ?> </span>
                       <span> <?php echo $rights_reserved; ?> </span>
                    </p>
                <?php endif; ?>
            </div>

            <?php if (has_nav_menu('footer-menu')): ?>
                <div class="main-footer-right"> 
                    <div class="main-footer-menu">
                        <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_class' => 'footer-menu')) ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer>