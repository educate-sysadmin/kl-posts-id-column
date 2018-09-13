<?php
/*
Plugin Name: KL Posts IDs Column
Plugin URI: https://github.com/educate-sysadmin/kl-posts-id-column
Description: Wordpress plugin to show post IDs in pages/posts list
Version: 0.1
Author: b.cunningham@ucl.ac.uk
Author URI: https://educate.london
License: GPL2
*/

function kl_columns_id_head($defaults) {
    $defaults['id'] = 'ID';
    return $defaults;
}

function kl_columns_id_content($column_name, $post_id) {
    if ($column_name == 'id') {
        echo $post_id;
    }
}

add_filter('manage_posts_columns', 'kl_columns_id_head');
add_action('manage_posts_custom_column', 'kl_columns_id_content', 10, 2);
add_filter('manage_pages_columns', 'kl_columns_id_head');
add_action('manage_pages_custom_column', 'kl_columns_id_content', 10, 2);
