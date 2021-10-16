<?php
/**
* Plugin Name: BANSAL
* Plugin URI: https://bansal.io/
* Description: a WordPress plugin to integrate Jiten Bansal's Shorthand CSS framework, pattern.css, and filters.css.
* Version: 1.2
* Author: Jake Price | JP Creative Media
* Author URI: https://jpcreativemedia.ca/
**/

// hooks
add_action( 'wp_enqueue_scripts' , 'bansal_enqueue_scripts' );

// register styles & scripts
function bansal_enqueue_scripts() {

    // shorthand
    wp_register_style('shorthand-css', plugin_dir_url( __FILE__ ) . 'css/shorthand.min.css', 1.0, false);
    wp_enqueue_style('shorthand-css');

        // shorthand - lite
        // wp_register_style('shorthand-lite-css', plugin_dir_url( __FILE__ ) . 'css/lite.shorthand.min.css', 1.0, false);
        // wp_enqueue_style('shorthand-lite-css');

    // pattern.css
    wp_register_style('pattern.css-css', plugin_dir_url( __FILE__ ) . 'css/pattern.min.css', 1.0, false);
    wp_enqueue_style('pattern.css-css');

    // filters.css
    wp_register_style('filters.css-css', plugin_dir_url( __FILE__ ) . 'css/filters.min.css', 1.0, false);
    wp_enqueue_style('filters.css-css');

}
?>