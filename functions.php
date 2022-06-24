<?php

// get stylesheets and scripts

add_action( 'wp_enqueue_scripts', 'ona_wp_enqueue_scripts' );

function ona_wp_enqueue_scripts() {
    wp_enqueue_style( 'ona-wp-style', get_stylesheet_uri() );
    wp_enqueue_script( 'ona-wp-script', get_template_directory_uri() . '/js/ona-wp.js');
}