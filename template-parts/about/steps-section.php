<?php 
    $steps = [
        [
            'heading' => '公式LINEを追加',
            'desc'    => 'Nine Members Club公式LINEを 友だち追加してください。',
            'image'   => '/assets/images/about/img-step-01.jpg',
        ],
        [
            'heading' => '会員登録',
            'desc'    => '公式LINE内のメニューから、会員ログインを タップし会員登録に必要事項を入力します。',
            'image'   => '/assets/images/about/img-step-02.jpg',
        ],
        [
            'heading' => 'お支払い・登録確認',
            'desc'    => '会員登録後に決済を行っていただき、事務局にて内容を確認します。',
            'image'   => '/assets/images/about/img-step-03.jpg',
        ],
        [
            'heading' => 'サービス利用開始',
            'desc'    => '登録完了後、オンラインサロンおよび各種会員限定サービスをご利用いただけます。',
            'image'   => '/assets/images/about/img-step-04.jpg',
        ]        
    ]
?>
<section class="nmc-section steps-section">
    <div class="container">
        <div class="steps-section-warp text-center">
            <h2 class="ncm-heading-highlight mb-0" data-aos="fade-up" data-aos-easing="ease-in-out">
                Step
            </h2>

            <p class="h2 w-100 mb-0" data-aos="fade-up" data-aos-easing="ease-in-out">
               ご利用の流れ
            </p>

            <?php if(!empty($steps)): ?>
                <div class="steps-section__list d-flex align-items-center flex-wrap" data-aos="fade-up" data-aos-easing="ease-in-out"> 
                     <?php foreach ($steps as $key => $step): ?>
                        <div class="step-item d-flex justify-content-between w-100" data-aos="fade-up" data-aos-easing="ease-in-out">
                            <div class="step-item__left d-flex">
                                <div class="step-item__number text-center d-flex align-items-center flex-wrap align-content-center justify-content-center"> 
                                    <span class="w-100 d-block">Step</span>
                                    0<?= $key + 1; ?>
                                </div>

                                <div class="step-item__content d-flex align-items-center flex-wrap align-content-center"> 
                                    <h3 class="h4 mb-0 w-100"><?= $step['heading']; ?></h3>
                                    <p class="w-100 mb-0"><?= $step['desc']; ?></p>
                                </div>
                            </div>

                            <img src="<?= get_template_directory_uri(); ?><?= $step['image']; ?>" alt="image step <?= $key ?>" />
                        </div>

                        <?php if ($key < count($steps) - 1): ?>
                            <div class="w-100 step-item__arrow d-flex align-items-center align-content-center justify-content-center" data-aos="fade-up" data-aos-easing="ease-in-out">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/about/image-arrow-up.png" alt="arrow step" />
                            </div>
                        <?php endif; ?>
                     <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>