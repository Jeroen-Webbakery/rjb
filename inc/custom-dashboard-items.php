<?php
// Custom Widget
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets()
{
global $wp_meta_boxes;
wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
}


function custom_dashboard_help()
{
echo '<p>Welkom kom je ergens niet uit en heb je support nodig?</p> ';
echo '<p>Telefoonummer: <a style="text-decoration:none;font-weight:700; color:#000;" href="tel:085 130 8976">085 130 8976</a></p> ';
echo '<p>Email: <a style="text-decoration:none;font-weight:700; color:#000;" href="mailto:support@webbakery.nl">support@webbakery.nl</a></p> ';
}


?>