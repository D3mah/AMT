<?php get_header() ; ?>
<style>
	.c-icon .current_page_item {
		background-color: transparent!important;
	}
	.c-icon .current_page_item a {
		background-color: var(--bg-canvas);
	}
</style>
<div class="breadcrumbs">
	<div class="uk-container" style="display: flex; align-items: center;"><?php the_breadcrumb(); ?></div>
</div>
	<!-- Start c-icon uk-section -->
	<div class="c-icon uk-section">
		<!-- Start uk-container -->
		<div class="uk-container">
			<!-- Start uk-grid -->
			<?php 
				wp_nav_menu( array (
					'theme_location'  => 'b-slider',
					'container'       => 'div',
					'container_id' => null,
					'container_class' => 'uk-child-width-1-3@l uk-child-width-1-3@m bottom-icon uk-text-center uk-grid',
					'items_wrap'      => '%3$s',
					'depth'           => 1,
					'walker'        	=> new Amt_Walker
					)
				);
					?>
			<!-- End uk-grid -->
		</div>
		<!-- End uk-container -->
	</div>
	<!-- End c-icon uk-section -->
	<!-- Start page -->
	<div class="page">
		<!-- Start uk-container -->
		<div class="uk-container">
			<!-- Start uk-grid -->
			<div uk-grid>
				<!-- Start uk-wdth-2-3@m -->
				<div class="uk-width-2-3@m">	
					<!-- Start uk-section -->
					<div class="uk-section">
						<!-- Start uk-container -->
						<div class="uk-container p-bottom">
							<!-- Start help-button -->
							<div class="help-button">
								<div class="uk-grid-collapse uk-child-width-expand@m uk-text-center" uk-grid>
									<div>
										<div class="backsite" uk-tooltip="Вернуться на предыдущую страницу">
											<?php if( $return_url = wp_get_referer() ){ ?>
												<a href="<?php echo esc_url( $return_url ); ?>" class="link-backsite"><div><span class="uk-margin-small-right" uk-icon="arrow-left"></span>Назад</div></a>
											<?php } ?>
										</div>
									</div>
									<div>
										<div class="site-print print">
											<div><span href="#" class="uk-margin-small-right" uk-icon="print"></span>Печать</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End help-button -->
							<!-- Start Test -->
							<div class="uk-height-small uk-panel uk-flex" uk-parallax="bgx: -300" style="background-image: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url('/wp-content/themes/amt/assets/img/page_image.png'); background-repeat: repeat;">
								<h2 class="post-title"><?php the_title(); ?></h2>
							</div>
							<!-- End Test -->
							<!-- Start page_content -->
							<div class="page_content">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="c-page">
									<?php the_content(); ?>
								</div>
							<?php endwhile; ?>
							<?php else: ?>
							<?php endif; ?>
							</div>
							<!-- End page_content -->
						</div>
						<!-- End uk-container -->
					</div>
					<!-- End uk-section -->
				</div>
				<!-- End uk-width-2-3@m -->
				<!-- Start uk-width-expand@m -->
				<div class="uk-width-expand@m">
					<!-- Start uk-section -->
					<div class="uk-section">
						<!-- Start uk-container -->
						<div class="uk-container">
							<!-- Start r-column -->
							<div class="r-column">
								<?php dynamic_sidebar('r-column-top'); ?>
								<?php dynamic_sidebar('r-column-bottom'); ?>
							</div>
							<!-- End r-column -->
						</div>
						<!-- End uk-container -->
					</div>
					<!-- End uk-section -->
				</div>
				<!-- End uk-width-expand@m -->
			</div>
			<!-- End uk-grid -->
		</div>
		<!-- End uk-container -->
	</div>
	<!-- End page -->
<?php get_footer() ; ?>