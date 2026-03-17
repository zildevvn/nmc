<section class="nmc-section hero-section">
    <div class="nmc-section-bg hero-section-bg"> 
        <img class="d-none d-md-block" src="<?= get_template_directory_uri(); ?>/assets/images/home/bg-hero.jpg" alt="bg-hero"  />
        <img class="d-md-none" src="<?= get_template_directory_uri(); ?>/assets/images/home/bg-mobile.jpg" alt="bg-hero-mb"  />
    </div>
    
    <div class="container">
        <div class="hero-section-content text-center w-100">
            <div class="hero-section__logo d-flex justify-content-center"> 
                <img src="<?= get_template_directory_uri(); ?>/assets/images/home/logo-hero.png" alt="logo"  />
            </div>

            <h1 class="d-none d-md-block"><span>世界一</span>のポーカープレイヤーをナインから</h1>
            <h1 class="d-md-none"><span>世界一<b>の</b></span>ポーカープレイヤーをナインから</h1>
            
            <?php nmc_get_button('お問い合わせはこちら', ''); ?>
        </div>
    </div>
</section>