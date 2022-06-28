<?php

add_action( 'wp_enqueue_scripts', 'ona_wp_enqueue_style' );

function ona_wp_enqueue_style() {
    wp_enqueue_style( 'ona-wp-style', get_stylesheet_uri() );
    // charge font awesome entete
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' );
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', array(), false, true );
    wp_enqueue_script( 'script', get_theme_file_uri("a.js"), array(), null, true );
}

