
<?php 
    $companys = [
        [
            'title' => '事業者名',
            'value' => 'NINE株式会社',
        ],
        [
            'title' => '所在地',
            'value' => '東京都渋谷区広尾5丁目1番39号',
        ],
        [
            'title' => '電話番号',
            'value' => '03-3498-6899',
        ],
        [
            'title' => 'メールアドレス',
            'value' => 'info@nmc.co.jp',
        ],
        [
            'title' => '事業内容',
            'value' => '
                <span>オンラインサロン運営</span>
                <span>ポーカーおよびカジノディーラーに関する研修・育成事業</span>
                <span>各種イベント・セミナー</span>
                <span>職業能力開発に関する事業</span>
                <span>広告仲介業務</span>'
        ]
    ]
?>
<section class="nmc-section hero-section">
    <div class="container">
        <div class="hero-section-content text-center">
            <h1 class="ncm-heading-highlight mb-0">Company</h1>
            <p class="h2 mb-0">会社概要</p>

            <?php if(!empty($companys)): ?>
                <div class="company-content d-flex flex-wrap" data-aos="fade-up" data-aos-easing="ease-in-out">
                    <?php foreach ($companys as $key => $company): ?>
                        <div class="company-content-item w-100 d-flex align-items-center"> 
                            <div class="company-content-item__left d-flex align-items-center justify-content-center"> 
                                <?= $company['title']; ?>
                            </div>
                            
                            <div class="company-content-item__right d-flex align-items-center flex-wrap">
                                <?= $company['value']; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>    
        </div>
    </div>
</section>