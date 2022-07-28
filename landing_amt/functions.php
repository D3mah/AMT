<?php
	add_action('wp_enqueue_scripts', 'style_header'); // Style in Head
	add_action('wp_enqueue_scripts', 'scripts_header'); // Scripts in head
	add_action('wp_footer', 'scripts_footer'); // Script
	add_action('widgets_init', 'support_buttons'); // Support
	add_action('widgets_init', 'sidebars'); // Sidebars
    add_action('after_setup_theme', 'menu'); // Menu


function style_header() {
    wp_enqueue_style ('filesSite', get_template_directory_uri() .'/assets/css/files.css');
	wp_enqueue_style ('getUikit', get_template_directory_uri() .'/assets/css/uikit.min.css');
	wp_enqueue_style ('getUikitRtl', get_template_directory_uri() .'/assets/css/uikit-rtl.min.css');
	wp_enqueue_style ('fullPage', get_template_directory_uri() .'/assets/css/fullpage.min.css');
	wp_enqueue_style ('fontSite', get_template_directory_uri() .'/assets/fonts/fonts.css');
	wp_enqueue_style ('style', get_stylesheet_uri() );
}
function scripts_header() {
	wp_enqueue_script ('jquery3', get_template_directory_uri() .'/assets/js/jquery-3.6.0.min.js');
	wp_enqueue_script( 'fullPage', get_template_directory_uri() . '/assets/js/fullpage.min.js' );
}
function scripts_footer() {
	wp_enqueue_script ('getJs', get_template_directory_uri() .'/assets/js/uikit.min.js');
	wp_enqueue_script ('getIcon', get_template_directory_uri() .'/assets/js/uikit-icons.min.js');
	wp_enqueue_script ('fontAwesome', 'https://kit.fontawesome.com/8cea7a5a56.js');
//	wp_enqueue_script ('clips', get_template_directory_uri() .'/assets/js/clipboard.min.js');
	wp_enqueue_script ('scriptsFooter', get_template_directory_uri() .'/assets/js/script.js');
}
function support_buttons() {
	add_theme_support( 'post-formats', array( 'aside' ) );
	add_post_type_support( 'page', 'post-formats' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'dark-editor-style' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails');
	add_theme_support( 'custom-logo');
}
function sidebars(){
    register_sidebar( array(
        'name'          => 'Первый слайд',
        'id'            => "1_slide",
        'description'   => '1 Слайд',
        'before_widget' => null,
        'after_widget'  => null,
        'before_title'  => null,
        'after_title'   => null
    ));
    register_sidebar( array(
        'name'          => 'Второй слайд [Временно отключен]',
        'id'            => "2_slide",
        'description'   => '2 Слайд [Временно отключен]',
        'before_widget' => null,
        'after_widget'  => null,
        'before_title'  => null,
        'after_title'   => null
    ));
    register_sidebar( array(
        'name'          => 'Третий слайд [Временно отключен]',
        'id'            => "3_slide",
        'description'   => '3 Слайд [Временно отключен]',
        'before_widget' => null,
        'after_widget'  => null,
        'before_title'  => null,
        'after_title'   => null
    ));
    register_sidebar( array(
        'name'          => 'Четвертый слайд [Временно отключен]',
        'id'            => "4_slide",
        'description'   => '4 Слайд [Временно отключен]',
        'before_widget' => null,
        'after_widget'  => null,
        'before_title'  => null,
        'after_title'   => null
    ));
    register_sidebar( array(
        'name'          => 'Пятый слайд [Временно отключен]',
        'id'            => "5_slide",
        'description'   => '5 Слайд [Временно отключен]',
        'before_widget' => null,
        'after_widget'  => null,
        'before_title'  => null,
        'after_title'   => null
    ));
    register_sidebar( array(
        'name'          => 'Шестой слайд',
        'id'            => "6_slide",
        'description'   => '6 Слайд',
        'before_widget' => null,
        'after_widget'  => null,
        'before_title'  => null,
        'after_title'   => null
    ));
    register_sidebar( array(
        'name'          => 'Седьмой слайд',
        'id'            => "7_slide",
        'description'   => '7 Слайд',
        'before_widget' => null,
        'after_widget'  => null,
        'before_title'  => null,
        'after_title'   => null
    ));
}
function menu() {
    register_nav_menu('top','Верхнее горизонтальное меню');
}

?>