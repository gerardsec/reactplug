<?php
/**
 * Plugin.
 *
 * @package reactplug
 * @wordpress-plugin
 *
 * Plugin Name:     React in WP
 * Description:     Add React app via shortcode
 * Author:          popeating
 * Author URL:      https://popland.it
 * Version:         1.0
 **/


function reactshort() {
return '<div id="my-react-app"></div>';
}
// register shortcode
add_shortcode('react-app', 'reactshort');

add_action('wp_enqueue_scripts', 'enq_react');
function enq_react()
{
wp_enqueue_script(
'plugin-react',
plugin_dir_url( __FILE__ ) . '/build/index.js',
['wp-element'],
rand(), // Change this to null for production
true
);
}
