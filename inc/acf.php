<?php
// Options pages
if (function_exists('acf_add_options_page')) {
// Add parent.

    acf_add_options_page(array(
        'page_title' => 'Thema opties',
        'menu_title' => 'Thema opties',
        'menu_slug' => 'thema-settings',
        'capability' => 'manage_options',
        'redirect' => false

    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Fullscreen menu',
        'menu_title'	=> 'Fullscreen menu',
        'parent_slug'	=> 'thema-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Privacy & Disclaimer',
        'menu_title'	=> 'Privacy & disclaimer',
        'parent_slug'	=> 'thema-settings',
    ));


}
