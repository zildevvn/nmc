<?php 
    $logos = [
        'assets/images/home/image-partner-001.png',
        'assets/images/home/image-partner-002.png',
        'assets/images/home/image-partner-003.png',
        'assets/images/home/image-partner-004.png',
        'assets/images/home/image-partner-005.png',
        'assets/images/home/image-partner-006.png',
    ]
?>
<section class="logos-section">
    <div class="logos-section__marquee" data-aos="fade-up" data-aos-easing="ease-in-out">
        <?php foreach ($logos as $partner) : ?>
            <img src="<?php echo get_template_directory_uri() . '/' . $partner; ?>" alt=" <?php echo $partner; ?>">
        <?php endforeach; ?>
    </div>
</section>