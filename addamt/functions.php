<?php
    add_action('wp_enqueue_scripts', 'style'); // Style
    add_action('wp_enqueue_scripts', 'script'); // Scripts
    add_action('after_setup_theme', 'menu'); // Menu
    add_action('widgets_init', 'sidebars'); // Sidebars


function style() {
    wp_enqueue_style ('uikit', get_template_directory_uri() .'/assets/css/uikit.min.css');
    wp_enqueue_style ('fonts', get_template_directory_uri() .'/assets/css/fonts.css');
    wp_enqueue_style ('fonts', get_template_directory_uri() .'/assets/css/fonts.css');
    wp_enqueue_style ('style', get_stylesheet_uri() );
}
function script() {
    wp_enqueue_script ('uikit', get_template_directory_uri() .'/assets/js/uikit.min.js');
    wp_enqueue_script ('uikit-icon', get_template_directory_uri() .'/assets/js/uikit-icons.min.js');
    wp_enqueue_script ('fontawesome', 'https://kit.fontawesome.com/8cea7a5a56.js');
    wp_enqueue_script ('script', get_template_directory_uri() .'/assets/js/script.js');
}

function menu() {
    register_nav_menu('top','Верхнее главное меню');
    register_nav_menu('b-slider','Нижнее меню');
}

function sidebars() {
    register_sidebar(array(
        'name' => 'Важная информация',
        'id' => "important",
        'description' => 'Блок важней информации на сайте. Отображается только на главной странице сайта. Если нет, экстренных объявлений, оставить блок пустым. Рекомендуемые виджеты: Текст / html редактор',
        'before_widget' => null,
        'after_widget' => null,
        'before_title' => null,
        'after_title' => null
    ));
}