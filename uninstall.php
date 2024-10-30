<?php

if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

delete_option( 'calds_admin_settings_options' );   

$args = array (
    'post_type' => 'callleads',
    'nopaging' => true
);
$query = new WP_Query ($args);
while ($query->have_posts ()) {
    $query->the_post ();
    $id = get_the_ID ();
    wp_delete_post ($id, true);
}
wp_reset_postdata ();