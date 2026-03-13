
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
    ]
?>
<section class="company-section">
    <div class="container text-center">
        <h2 class="ncm-heading-highlight mb-0" data-aos="fade-up" data-aos-easing="ease-in-out">COMPANY</h2>
        <p class="h2 w-100 mb-0" data-aos="fade-up" data-aos-easing="ease-in-out">会社案内</p>

        <?php if(!empty($companys)): ?>
            <div class="company-content d-flex flex-wrap" data-aos="fade-up" data-aos-easing="ease-in-out">
                <?php foreach ($companys as $key => $company): ?>
                    <div class="company-content-item w-100 d-flex align-items-center"> 
                        <div class="company-content-item__left d-flex align-items-center justify-content-center"> 
                            <?= $company['title']; ?>
                        </div>
                        <div class="company-content-item__right d-flex align-items-center">
                            <?= $company['value']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>