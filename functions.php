<?php

// get stylesheets and scripts

add_action( 'wp_enqueue_scripts', 'ona_wp_enqueue_scripts' );

function ona_wp_enqueue_scripts() {
    wp_enqueue_style( 'ona-wp-style', get_stylesheet_uri() );
    // charge another css file
    // add font awesome icons to the theme (https://fontawesome.com/?utm_source=v4_homepage&utm_medium=display&utm_campaign=fa5_released&utm_content=banner)
    wp_enqueue_style( 'ona-wp-font-awesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );
    wp_enqueue_script( 'ona-wp-script', get_template_directory_uri() . '/js/ona-wp.js');
}