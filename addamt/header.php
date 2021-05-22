<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>

</head>
<body class="addtheme">
 <!-- Start header -->
 <header>
    <div class="uk-container">
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
            <nav class="uk-navbar-container" uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-logo logo" uk-tooltip="title: <?php bloginfo('name'); ?>; pos: bottom"><?php the_custom_logo( $blog_id = 0 ); ?></div>
                </div>
                <div class="uk-navbar-right">
                    <a href="#" target="_blank" class="r-info">Корпус</a>
                    <a href="#" target="_blank" class="r-info">Главный корпус</a>
                </div>
            </nav>
        </div>
    </div>
 </header>
 <!-- End header -->

