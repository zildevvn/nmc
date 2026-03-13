<?php 
    $rinens = [
        [
            'title'     => '髙橋泰正',
            'sub_title' => 'NINE株式会社 代表取締役',
            'content'   => '
                <p>夢を叶えるため、私はまだ未熟ながらも第一歩を踏み出しました。Nine Members Clubを通じて仲間と出会い、楽しみながら成長したいと思っています。</p>
                <p>迷いながらも前に進むその過程を、大切にしたいです。若さを力に変えて、挑戦を続けていきます。</p>
            ',
            'image' => 'assets/images/access/img-rinen-001.png'
        ],
        [
            'title'     => '田井中 知也',
            'sub_title' => 'NINE株式会社 取締役',
            'content'   => '
                <p>２０３０年にＩＲが現実のものとなり、今までにない新しいことが生まれ、常識が変わるタイミングに、私たちの目的は、正しい知識の教育を行い、ともに楽しみを分かち合う仲間達が、弊社の提供する唯一無二のコミュニティーの場で出会い、人生を豊かにすることにあります。 弊社の理念である『八紘一宇』のもと、より一層の成長、発展できる企業であり続けます。感謝を忘れず、皆様との出会いを楽しみにしております。</p>
            ',
            'image' => 'assets/images/access/img-rinen-002.png'
        ],
    ]
?>

<section class="nmc-section rinen-section">
    <div class="nmc-section-bg">
        <img class="d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/access/bg-rinen.png" alt="image access desktop">
        <img class="d-block d-md-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/access/bg-rinen-mb.png" alt="image access mobile">
    </div>

    <div class="container text-center">
        <h2 class="ncm-heading-highlight" data-aos="fade-up" data-aos-easing="ease-in-out">
            MESSAGE
        </h2>
        <p class="mb-0 h2" data-aos="fade-up" data-aos-easing="ease-in-out">
           代表挨拶
        </p>

        <?php if(!empty($rinens)) : ?>
            <div class="rinen-section__list"> 
                <?php foreach($rinens as $index => $rinen) : ?>
                    <div class="rinen-item d-flex align-items-center" 
                        data-aos="fade-up" data-aos-easing="ease-in-out"
                    >
                        <div class="rinen-item__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/<?php echo $rinen['image']; ?>" alt="image rinen">
                        </div>

                        <div class="rinen-item__content">
                            <h3 class="rinen-item__title h2 mb-0"><?php echo $rinen['title']; ?></h3>
                            <p class="rinen-item__sub-title mb-0"><?php echo $rinen['sub_title']; ?></p>
                            <div class="rinen-item__text mb-0"><?php echo $rinen['content']; ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>