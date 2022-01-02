<?php
    add_action('wp_enqueue_scripts', 'style'); // Style
    add_action('wp_enqueue_scripts', 'scripts_header'); // Scripts in head
    add_action('wp_footer', 'scripts_footer'); // Script


    function style() {
        wp_enqueue_style ('getUikit', get_template_directory_uri() .'/assets/css/uikit.min.css');
        wp_enqueue_style ('fontsTheme', get_template_directory_uri() .'/assets/fonts/fonts.css');
        wp_enqueue_style ('style', get_stylesheet_uri() );

    }

    function scripts_header() {
        wp_enqueue_script ('jqueryTop', get_template_directory_uri() .'/assets/js/jquery-3.6.0.min.js');
    }

    function script_footer() {
        wp_enqueue_script ('iconsUikit', get_template_directory_uri() .'/assets/js/uikit-icons.min.js');
    }

?>