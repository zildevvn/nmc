<?php 

function remove_editor_from_post_and_page() {
    remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor_from_post_and_page');

// Drag-drop ordering for poker post type
add_action('admin_footer-edit.php', function () {
    $screen = get_current_screen();
    if (!$screen || $screen->post_type !== 'poker') return;
    ?>
    <script>
    jQuery(function ($) {
        var $tbody = $('#the-list');
        $tbody.sortable({
            items: 'tr',
            axis: 'y',
            handle: 'td.title',
            cursor: 'grab',
            opacity: 0.7,
            update: function () {
                var order = [];
                $tbody.find('tr').each(function (i) {
                    var id = $(this).attr('id').replace('post-', '');
                    order.push({ id: id, order: i });
                });
                $.post(ajaxurl, {
                    action: 'nmc_save_poker_order',
                    order: order,
                    nonce: '<?php echo wp_create_nonce('nmc_poker_order'); ?>'
                });
            }
        });
        $tbody.find('td.title').css('cursor', 'grab');
    });
    </script>
    <?php
});

add_action('wp_ajax_nmc_save_poker_order', function () {
    check_ajax_referer('nmc_poker_order', 'nonce');
    if (!current_user_can('edit_posts')) wp_die(-1);

    foreach ($_POST['order'] as $item) {
        wp_update_post([
            'ID'         => intval($item['id']),
            'menu_order' => intval($item['order']),
        ]);
    }
    wp_die(1);
});