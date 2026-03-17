<?php
/**
 * Shared Template Part: Event List
 *
 * @param array $args {
 *     @type string $aos The AOS animation type (default: 'fade-up').
 *     @type string $aos_easing The AOS easing type (optional).
 * }
 */

$aos = $args['aos'] ?? 'fade-up';
$aos_easing = $args['aos_easing'] ?? '';
?>

<div class="event-list" data-aos="<?= esc_attr($aos); ?>" <?= $aos_easing ? 'data-aos-easing="' . esc_attr($aos_easing) . '"' : ''; ?>>
    <iframe loading="lazy" allowfullscreen  width="100%" src="https://app.9mbc.co.jp/embed/events/calendar"></iframe>
</div>
