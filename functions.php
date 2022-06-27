<?php

add_action( 'wp_enqueue_scripts', 'ona_wp_enqueue_style' );

function ona_wp_enqueue_style() {
    wp_enqueue_style( 'ona-wp-style', get_stylesheet_uri() );
    wp_enqueue_style( 'ona-wp-font-awesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );
}

