
<?php 

$points = [
    [
        "title"       => "日本初！プロポーカープレイヤーの「実業団」制度",
        "subtitle"    => "～月額1万円から、プロポーカープレイヤーを目指せる夢の環境～",
        'image'       => '/assets/images/about/image-point-001.jpg',
        "description" => '<span> 本クラブ最大の目玉は、日本で初めて設立されるポーカーの実業団チームです。</span> 実力次第で、誰もが「職業：プロポーカープレイヤー」として生活できる道を切り拓けます。',
        "features" => [
            [
                "title" => "収入保障制度",
                "text" => "クラブ内ランキング上位9名（ナイン）には、プロ契約として収入を保障。ポーカーのみで生活ができるように設計しております。"
            ],
            [
                "title" => "世界一へのバックアップ",
                "text" => "日本人初のWSOP（世界ポーカー選手権）制覇を目指し、渡航費や参加費のサポートを提供します。"
            ],
            [
                "title" => "トッププロによる指導",
                "text" => "海外トーナメントでも圧倒的な実績を持つポーカープレイヤーから学べる環境をご用意。世界基準の戦略を直接学べます。"
            ]
        ]
    ],
    [
        "title" => "国内最高峰の拠点「ベルテックス東京」を遊び尽くす",
        "subtitle" => "～渋谷の一等地。寿司、シーシャ、BBQを完備した大人の社交場～",
        'image' => '/assets/images/about/image-point-002.jpg',   
        "description" => '<span>メンバーには、渋谷にある国内最大級のアミューズメントカジノ「ベルテックス東京」での特別な体験を約束します。</span>',
        "features" => [
            [
                "title" => "会員限定特典",
                "text" => "施設利用料の割引や、メンバー限定トーナメントへの招待。"
            ],
            [
                "title" => "複合エンターテインメント",
                "text" => "カジノフロアだけでなく、2階には本格寿司、シーシャ、カラオケを完備。屋上ではBBQも楽しめます。"
            ],
            [
                "title" => "リアルの繋がり",
                "text" => "オンラインだけでは得られない、経営者、著名人、インフルエンサーが集うリアルなコミュニティがここにあります。"
            ]
        ]
    ],
    [
        "title" => "圧倒的な「教育」と「体験」のカリキュラム",
        "subtitle" => "～2030年、大阪IR（統合型リゾート）時代を見据えたキャリア形成～",
        'image' => '/assets/images/about/image-point-003.jpg', 
        "description" => "私たちは、カジノを「ギャンブル」ではなく「教育・職業」として捉えています。未来のIR業界で活躍する人材を育成します。",
        "features" => [
            [
                "title" => "プロフェッショナル育成",
                "text" => "ポーカープレイヤーだけでなく、世界に通じるディーラーやジャンクット業務の視察・研修を実施。"
            ],
            [
                "title" => "海外視察ツアー",
                "text" => "実際のカジノ施設へのツアーや、現地での職業体験プログラムを通じ、本物のカジノ文化を肌で感じられます。"
            ],
            [
                "title" => "独自トーナメントの開催",
                "text" => "国内有数のビッグイベント「PJ」との連携により、メンバー限定のプライズや特別な出場枠を提供します。"
            ]
        ]
    ],
    [
        "title" => "遊びもビジネスも。多才なイベントとネットワーク",
        "subtitle" => "～「世界中が家族」を理念に掲げる、唯一無二のコミュニティ～",
        'image' => '/assets/images/about/image-point-004.jpg', 
        "description" => 'ポーカーの枠を超え、人生を豊かにする多様なコンテンツを用意しています。',
        "features" => [
            [
                "title" => "多彩なイベント",
                "text" => "新年会、スキー・温泉ツアー、ワールドカップ観戦ツアーなど、会員同士の絆を深めるイベントが盛りだくさん。"
            ],
            [
                "title" => "「Queens 9（クイーンズナイン）」の活動",
                "text" => "300名以上の応募から選ばれた6名の公式ユニットがイベントを華やかに彩り、SNSで活動を発信。"
            ],
            [
                "title" => "ビジネスチャンス",
                "text" => "会員数1万人を目指す巨大ネットワークの中で、自身のビジネスを認知・拡散できるチャンスも提供します。"
            ]
        ]
    ]

];
?>
<section class="nmc-section point-section">
    <div class="container">
        <div class="point-section-content text-center">
            <h2 class="ncm-heading-highlight mb-0" data-aos="fade-up" data-aos-easing="ease-in-out"> Point </h2>
            <p class="h2 mb-0" data-aos="fade-up" data-aos-easing="ease-in-out">
                特徴、メリット
            </p>

            <?php if(!empty($points )): ?>
                <div class="point-section__list"> 
                    <?php foreach ($points as $key => $point): ?>
                        <div class="point-item d-flex">
                            <div class="point-item-image d-none d-md-block">
                                <img src="<?php echo get_template_directory_uri(); ?><?php echo $point['image']; ?>" alt="image point <?= $key + 1 ?>">
                            </div>

                            <div class="point-item-content flex-shrink-1" 
                                data-aos="fade-up" data-aos-easing="ease-in-out"
                            >
                                <h3 class="point-item-title mb-0">POINT<?= $key + 1 ?></h3>
                                <h4 class="point-item-subtitle mb-0 h2"><?= $point['title'] ?></h4>
                                <p class="point-item-description mb-0"><?= $point['subtitle'] ?></p>
                                <img class="point-item-image d-md-none" src="<?php echo get_template_directory_uri(); ?><?php echo $point['image']; ?>" alt="image point mobile <?= $key + 1 ?>">
                                <p class="point-item-text mb-0"> <?= $point['description'] ?> </p>

                                <?php if(!empty($point['features'])): ?>
                                    <div class="point-item__features d-flex flex-wrap"> 
                                        <?php foreach ($point['features'] as $feature): ?>
                                            <div class="feature-item w-100">
                                                <div class="feature-item-header d-flex align-items-center"> 
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000" stroke-width="1.5"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.6 2.25C2.85442 2.25 2.25 2.85441 2.25 3.6V20.4C2.25 21.1456 2.85441 21.75 3.6 21.75H20.4C21.1456 21.75 21.75 21.1456 21.75 20.4V3.6C21.75 2.85442 21.1456 2.25 20.4 2.25H3.6ZM17.5303 9.03033C17.8232 8.73744 17.8232 8.26256 17.5303 7.96967C17.2374 7.67678 16.7626 7.67678 16.4697 7.96967L10 14.4393L7.53033 11.9697C7.23744 11.6768 6.76256 11.6768 6.46967 11.9697C6.17678 12.2626 6.17678 12.7374 6.46967 13.0303L9.46967 16.0303C9.76256 16.3232 10.2374 16.3232 10.5303 16.0303L17.5303 9.03033Z" fill="#000000"></path></svg>
                                                    <p class="mb-0"> <?= $feature['title'] ?> </p>
                                                </div>
                                                <p class="feature-item-text mb-0"><?= $feature['text'] ?></p>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif;?>   

            <?php 
                $gallerys = [
                    [
                        'image'   => '/assets/images/about/gallery-001.jpg',
                        'heading' => '新年会福岡'
                    ],
                    [
                        'image'   => '/assets/images/about/gallery-002.jpg',
                        'heading' => '新年会東京'
                    ],
                    [
                        'image'   => '/assets/images/about/gallery-003.jpg',
                        'heading' => '新年会広島'
                    ],
                    [
                        'image'   => '/assets/images/about/gallery-004.jpg',
                        'heading' => '新年会名古屋'
                    ]
                ]
            ?>

            <?php if(!empty($gallerys)): ?>
                <div class="point-section__gallerys"> 
                    <?php foreach ($gallerys as $key => $gallery): ?>
                        <div class="gallery-item" 
                            data-aos="fade-up" data-aos-easing="ease-in-out"    
                            data-aos-delay="<?= $key * 200 ?>"
                        >
                            <img src="<?= get_template_directory_uri(); ?><?= $gallery['image'] ?>" alt="image gallery <?= $key + 1 ?>" />
                            <p class="mb-0"><?= $gallery['heading'] ?></p>
                        </div>
                    <?php endforeach;?>    
                </div>
            <?php endif; ?>    
        </div>
    </div>
</section>