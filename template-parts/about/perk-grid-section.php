<?php 
    $perks = [
        [
            'title' => '会員限定動画コンテンツ （ビジネス・カジノ）の視聴',
            'image' => '/assets/images/about/image-perks-001.png',
        ],
        [
            'title' => 'ベルテックス東京の優待利用',
            'image' => '/assets/images/about/image-perks-002.png',
        ],
        [
            'title' => '実業団プロ選抜へのエントリー権',
            'image' => '/assets/images/about/image-perks-003.png',
        ],
        [
            'title' => '各種交流イベント・視察ツアーへの参加権',
            'image' => '/assets/images/about/image-perks-004.png',
        ],
        [
            'title' => 'その他',
            'image' => '/assets/images/about/image-perks-005.png',
        ],
    ]
?>
<section class="perk-grid-section">
    <div class="container text-center">
        <h2 class="ncm-heading-highlight mb-0" data-aos="fade-up" data-aos-easing="ease-in-out">PERK</h2>
        <p class="mb-0 h2" data-aos="fade-up" data-aos-easing="ease-in-out"> 会員特典サービス </p>
        <p class="mb-0 desc" data-aos="fade-up" data-aos-easing="ease-in-out">ポイントサービス付与</p>

        <?php if(!empty($perks)): ?>
            <div class="perks-list d-flex justify-content-center flex-wrap">
                <?php foreach ($perks as $key => $perk): ?>
                    <div class="perk-item" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="<?= $key * 100; ?>">
                        <div class="perk-item__number d-flex justify-content-center align-items-center"> 
                            0<?= $key + 1; ?>
                        </div>    
                        <div class="perk-item__content d-flex flex-wrap "> 
                            <p class="mb-0 w-100"><?= $perk['title']; ?></p>
                            <img src="<?= get_template_directory_uri(); ?><?= $perk['image']; ?>" alt="image perk <?= $key ?>" />
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif;?>    
    </div>
</section>