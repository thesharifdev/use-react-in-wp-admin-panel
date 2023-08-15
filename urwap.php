<?php
/**
 * Plugin Name: Hello World
 * Plugin URI: https://example.com/hello-world-plugin/
 * Description: This plugin adds a "Hello World" button to the admin dashboard.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://example.com/
 * License: GPLv2 or later
 */


// Exit if accessed directly.
if (!defined('ABSPATH')) {
  exit;
}


function my_enqueue_admin_script() {
    wp_enqueue_script( 'srf-js', plugin_dir_url( __FILE__ ) . 'build/index.js', array(), '1.0' );
}
  
add_action('admin_enqueue_scripts', 'my_enqueue_admin_script');

function your_plugin_menu() {
    add_menu_page(
        'Your Plugin Settings',    // Page title
        'Your Plugin',             // Menu title
        'manage_options',          // Capability required
        'your-plugin-settings',    // Menu slug
        'your_plugin_page'         // Callback function
    );
}

function your_plugin_page() {
    ?>
    <div id="srf-root"></div>
    <?php
}

add_action('admin_menu', 'your_plugin_menu');
