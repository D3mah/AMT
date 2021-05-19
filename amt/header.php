<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<meta name="sputnik-verification" content="sBbYU3UY2a1qoBmG" />
	<meta name="yandex-verification" content="237a1583a96d373d" />
	<script>
	// Функция обработки lightbox для всех изображений
	(function ($) {
		jQuery(function(){
			$('.wp-block-image img').each(function(i,el){
				$(el).wrap('<div uk-lightbox><a href="' + $(el).attr('src') + '" data-lightbox-type="image" data-caption="<?php echo the_title();  ?>"></a></div>');
			});
		}); 
	})(jQuery);
	</script>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(50259871, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/50259871" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YH3PKTSRKZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YH3PKTSRKZ');
</script>
</head>
<body class="theme">
	<!-- Start full-page -->
	<div class="full-page">
		<!-- Start b-visual -->
		<div class="b-visual">
			<!-- Start uk-container -->
			<div class="uk-container">
				<div uk-navbar>
					<div class="uk-navbar-right">
						<a href="https://приемная.алмт.рф" target="_blank" class="priem-dir"><i class="fas fa-ticket-alt"></i>Приемная директора</a>
						<?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' ); ?>
						<div class="box-switch" uk-tooltip="title: Темная тема; pos: bottom"><div class="switch far fa-moon"></div></div>
					</div>
				</div>
			</div>
			<!-- End uk-container -->
		</div>
		<!-- End b-visual -->
		<!-- Start header -->
		<header>
			<!-- Start uk-container -->
			<div class="uk-container">
				<!-- Start uk-navbar -->
				<div uk-navbar>
					<!-- Start navbar-overlay uk-navbar-left -->
					<div class="nav-overlay uk-navbar-left">
						<!-- Start uk-logo -->
						<div class="uk-logo logo" uk-tooltip="title: <?php bloginfo('name'); ?>; pos: bottom"><?php the_custom_logo( $blog_id = 0 ); ?></div>
						<!-- End uk-logo -->
						<!-- Start namesite -->
						<div class="namesite">
							<p class="description"><?php bloginfo( 'description' ); ?></p>
							<h1 class="name"><?php bloginfo( 'name' ); ?></h1>
						</div>
						<!-- End namesite -->
					</div>
					<!-- End navbar-overlay uk-navbar-left -->
					<!-- Start nav-overlay uk-navbar-right -->
					<div class="nav-overlay uk-navbar-right">
						<div class="uk-navbar-toggle"><a class="icon-header" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#" uk-tooltip="title: Поиск; pos: bottom"></a></div>
					</div>
					<!-- End nav-overlay uk-navbar-right -->
					<!-- Start nav-overlay uk-flex -->
					<div class="nav-overlay uk-navbar-left uk-flex-1" hidden>
						<div class="uk-navbar-item uk-width-expand">
							<div class="uk-search uk-search-navbar uk-width-1-1">
								<?php get_search_form(); ?>
							</div>
						</div>
						<a class="uk-navbar-toggle icon-header" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
					</div>
					<!-- End nav-overlay uk-flex -->
				</div>
				<!-- End uk-navbar -->
			</div>
			<!-- End uk-container -->
		</header>
		<!-- End header -->
		<!-- Start menu -->
		<div class="menu" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
			<!-- Start uk-container -->
			<div class="uk-container">
				<!-- Start uk-navbar -->
				<nav uk-navbar>
					<?php 
						wp_nav_menu( [
							'theme_location'  => 'top',
							'container'       => null,
							'menu_class'      => 'topmenu', 
							'menu_id'         => 'topmenu',
							'items_wrap'      => '<ul id="%1$s" class="%2$s uk-navbar-nav">%3$s</ul>',
							'depth'           => 2,
						] );
					?>
				</nav>
				<!-- End uk-navbar -->
			</div>
			<!-- End uk-container -->
		</div>
		<!-- End menu -->
		<div class="mobile-menu" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
			<div class="sub-mobile">
			<?php the_custom_logo( $blog_id = 0 ); ?>
				<div class="m-menu">Меню</div>
				<a href="#offcanvas-slide" class="uk-button uk-button-default s-menu" uk-toggle>
				<div class="uk-navbar-toggle">
					<div class="wrapper-menu" uk-tooltip="title: Меню; pos: bottom">
						<div class="line-menu half start"></div>
						<div class="line-menu"></div>
						<div class="line-menu half end"></div>
					</div>
				</div>		
			</a>
					<?php 
					wp_nav_menu( [
						'theme_location'  => 'top',
						'container'       => null,
						'menu_class'      => 'top-menu', 
						'menu_id'         => 'top-menu',
						'items_wrap'      => '<div id="offcanvas-slide" uk-offcanvas><div class="uk-offcanvas-bar"><ul id="%1$s" class="%2$s uk-nav uk-nav-default"><li><a href="#">%3$s</a></li></ul></div></div>',
						'depth'           => 1,
					] );
					?>
			</div>
		</div>
