<?php
    add_action('wp_enqueue_scripts', 'style'); // Style
    add_action('wp_enqueue_scripts', 'script'); // Scripts


function style() {
// 	wp_enqueue_style ('normalize', get_template_directory_uri() .'/assets/css/normalize.css');
    wp_enqueue_style ('icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
    wp_enqueue_style ('material', 'https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css');
    wp_enqueue_style ('fonts', get_template_directory_uri() .'/assets/css/fonts.css');
    wp_enqueue_style ('style', get_stylesheet_uri() );
}
function script() {
    wp_enqueue_script ('materialjs', 'https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js');
    wp_enqueue_script ('fontawesome', 'https://kit.fontawesome.com/8cea7a5a56.js');
    wp_enqueue_script ('jqery', get_template_directory_uri() .'/assets/js/jquery-3.5.1.min.js');
    wp_enqueue_script ('script', get_template_directory_uri() .'/assets/js/script.js');
}
