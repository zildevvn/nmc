<?php 
    $faqs = [
        [ 
            'question' => '入会方法を教えてください',
            'answer' => '
                <p>公式LINE内メニューの「会員ログイン」をタップし、新規会員登録にて「メンバー」を選択のうえ、登録を完了してください。</p>
                </br>
                <p>登録後に届く自動返信メールに決済情報が記載されておりますので、内容をご確認のうえお支払いをお願いいたします。</p>
                <p>決済確認後、サポートよりご案内いたします。</p>
            '
        ],
        [ 
            'question' => '会員登録後、すぐに利用できますか？',
            'answer' => '
                <p>はい。決済完了後、すぐにサービスをご利用いただけます。</p>
            '
        ],
        [ 
            'question' => '月額料金はいくらですか？',
            'answer' => '
                <p>月額 11,000円（税込）を頂戴しております。</p>
            '
        ],
        [ 
            'question' => '支払いが失敗した場合はどうすればよいですか？',
            'answer' => '
                <p>決済リンクを直接ブラウザに貼り付けていただき、再度お申し込みをお願いいたします。</p>
                <p>それでも解決しない場合は、サポートまでお問い合わせください。</p>
            '
        ],
        [ 
            'question' => '支払い方法は何がありますか？',
            'answer' => '
                <p>クレジットカード決済、口座引き落としからお選びいただけます。</p>
                <p>※法人名義での決済をご希望の場合は、事前にサポートまでお問い合わせください。</p>
            '
        ],
        [ 
            'question' => 'ポーカー初心者でも参加できますか？',
            'answer' => '
                <p>はい。初心者の方も多く在籍しており、安心してご参加いただけます。</p>
            '
        ],
        [ 
            'question' => '過去のコンテンツは閲覧できますか？',
            'answer' => '
                <p>はい。過去コンテンツのアーカイブもご覧いただけます。</p>
            '
        ],
        [ 
            'question' => '退会方法を教えてください',
            'answer' => '
                <p>退会をご希望の場合は、退会希望日の1ヶ月前までにサポートまでご連絡ください。</p>
                <p>その後、所定の退会手続きをご案内いたします。</p>
                <p>※日割り計算や途中解約による返金は承っておりません。</p>
            '
        ],
        [ 
            'question' => '退会後に再入会はできますか？',
            'answer' => '
                <p>他の会員様への迷惑行為、運営の妨害行為などが確認された場合、運営判断により事前通知なく強制退会とさせていただく場合がございます。</p>
            '
        ],
        [ 
            'question' => 'オフラインイベントはありますか？',
            'answer' => '
                <p>ポーカートーナメントをはじめ、地域別の会員交流イベントなど、オフラインイベントも定期的に開催予定です。</p>
            '
        ],
        [ 
            'question' => '問い合わせはどこからできますか？',
            'answer' => '
                <p>Nine Members Club公式LINEよりお問い合わせください。</p>
            '
        ],
    ];
?>

<section id="nmc-faqs" class="faqs-section">
    <div class="container">
        <div class="faqs-section-content text-center">
            <h2 class="ncm-heading-highlight mb-0" data-aos="fade-up" data-aos-easing="ease-in-out">
                Q&A
            </h2>
            <p class="h2 w-100 mb-0" data-aos="fade-up" data-aos-easing="ease-in-out">
                よくあるご質問
            </p>

            <?php if(!empty($faqs)): ?>
                <div class="faqs-section__list d-flex flex-wrap"> 
                    <?php foreach ($faqs as $key => $faq): ?>
                        <?php $classed = $key === 0 ? 'is-active' : '' ?>
                        <div class="faq-item w-100 <?= $classed ?>"> 
                            <div class="faq-item__question d-flex  justify-content-between"> 
                                <p class="mb-0"><span>Q. </span><?= $faq['question'] ?></p>

                                <div class="faq-item__arrow"> 
                                    <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M6 12H18" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M6 12H12M18 12H12M12 12V6M12 12V18" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </div>
                            </div>

                            <div class="faq-item__answer">
                                <div class="faq-item__answer-wrapper d-flex align-items-start"> 
                                    <p class="mb-0">A.</p>
                                    <div class="content"> 
                                        <?= $faq['answer'] ?>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    <?php endforeach;?>   
                </div>
            <?php endif;?>    
        </div>  
    </div>
</section>