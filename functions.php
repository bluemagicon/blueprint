<?php

/*** SCRIPTS & STYLES ***/
function scripts(){

    wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
    wp_enqueue_style('style');
    wp_enqueue_script('jquery');
    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, 'all', true);
    wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts', 'scripts');


/*** REMOVE EMOJI SCRIPTS ***/
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );