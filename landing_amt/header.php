<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body>

<?php
wp_nav_menu( [
    'theme_location'  => 'top',
    'container'       => null,
    'menu_class'      => 'uk-navbar-nav',
    'menu_id'         => 'amtMenu',
    'items_wrap'      => '<ul id="%1$s" class="%2$s"><li><a href="#">%3$s</a></li></ul>',
    'depth'           => 1,
] );
?>
