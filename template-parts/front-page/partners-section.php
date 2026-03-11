<?php 
    $partners = [
        'assets/images/home/image-partner-001.png',
        'assets/images/home/image-partner-002.png',
        'assets/images/home/image-partner-003.png',
        'assets/images/home/image-partner-004.png',
        'assets/images/home/image-partner-005.png',
        'assets/images/home/image-partner-006.png',
    ]
?>
<section class="partners-section">
    <div class="partners-section__marquee">
        <?php foreach ($partners as $partner) : ?>
            <img src="<?php echo get_template_directory_uri() . '/' . $partner; ?>" alt=" <?php echo $partner; ?>">
        <?php endforeach; ?>
    </div>
</section>