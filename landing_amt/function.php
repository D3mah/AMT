<?php
    add_action('wp_enqueue_scripts', 'style'); // Style
    add_action('wp_enqueue_scripts', 'scripts_head'); // Scripts in head
    add_action('wp_footer', 'script_footer'); // Script


    function style() {
        wp_enqueue_style ('getUikit', get_template_directory_uri() .'/assets/css/uikit.min.css');

    }

    function scripts_head() {
        wp_enqueue_script ('jqueryTop', get_template_directory_uri() .'/assets/js/jquery-3.6.0.min.js');
    }

    function scripts_footer() {
        wp_enqueue_script ('iconsUikit', get_template_directory_uri() .'/assets/js/uikit-icons.min.js');
    }

?>