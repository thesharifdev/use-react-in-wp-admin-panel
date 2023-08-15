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

    $mfile = include(plugin_dir_path(__FILE__) . 'build/index.asset.php');

    wp_enqueue_script('srf-scripts', plugin_dir_url(__FILE__) . 'build/index.js', $mfile['dependencies'], $mfile['version'], true);
    wp_enqueue_style( 'default-style', plugin_dir_url(__FILE__) . 'build/index.css', [], '1.0.0', 'all' ); //default styles.css

    echo '<div class="wrap">';
    echo '<h1>Your Plugin Admin Page</h1>';
    echo '<p>Welcome to your plugin admin page content.</p>';
    echo '<div id="srf-root"></div>';
    echo '</div>';
}


add_action('admin_menu', 'your_plugin_menu');
