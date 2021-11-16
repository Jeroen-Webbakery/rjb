<?php
// Options pages
if (function_exists('acf_add_options_page')) {
// Add parent.

acf_add_options_page(array(
'page_title' => 'Footer',
'menu_title' => 'Footer',
'menu_slug' => 'cta-settings',
'capability' => 'manage_options',
));

}

function my_acf_init() {

    acf_update_setting('google_api_key', 'AIzaSyA2vmgrEH5t14PQY_A2Uwz23ww4ZUjq9iY');
}

add_action('acf/init', 'my_acf_init');

?>