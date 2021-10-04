<?php
 /*
 Template Name: Без колонок (Заметка)
 Template Post Type: post
 */
?>
<?php get_header() ; ?>
	<div class="breadcrumbs">
		<div class="uk-container" style="display: flex; align-items: center;"><?php the_breadcrumb(); ?></div>
	</div>
	<!-- Start post -->
	<div class="post">
		<!-- Start uk-container -->
		<div class="uk-container">
			<!-- Start uk-grid -->
			<div uk-grid>
				<!-- Start uk-width-1-1 -->
				<div class="uk-width-1-1">
					<!-- Start uk-section -->
					<div class="uk-section post-top">
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
						<!-- Start post-l -->
						<div class="post-l">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="uk-card uk-card-default uk-card-body p-block">
									<div class="uk-card-badge-post-date uk-label" uk-tooltip="title: Дата поста; pos: top" title="" aria-expanded="false"><?php echo get_the_date(); ?></div>
									<div class="uk-card-badge-post-views uk-label" uk-tooltip="title: Просмотров; pos: top"><i class="fas fa-eye"> </i><?php the_views(); ?></div>
									<h2 class="post-title-aside"><?php the_title(); ?></h2>
									<p><?php the_content(); ?></p>
								</div>
							<?php endwhile; ?>
							<?php else: ?>
							<?php endif; ?>
						</div>
						<!-- End post-l -->
					</div>
					<!-- End uk-section -->
				</div>
				<!-- End uk-width-1-1 -->
			</div>
			<!-- End uk-grid -->
		</div>
		<!-- End uk-container -->
	</div>
	<!-- End post -->

<?php get_footer() ; ?>