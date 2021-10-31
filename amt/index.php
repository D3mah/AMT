<?php get_header() ; ?>

		<!-- Start slider -->

		<div class="slider">

			<?php dynamic_sidebar('slider'); ?>

		</div>

		<!-- End slider -->

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

						'container_class' => 'uk-child-width-1-3@m bottom-icon uk-text-center uk-grid',

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

		<!-- Start content uk-container -->

		<div class="uk-container">

			<?php dynamic_sidebar('imp'); ?>
			<?php dynamic_sidebar('short_imp'); ?>

			<!-- Start uk-grid -->

			<div uk-grid>

                <!-- Start uk-width-1-3@m -->
                <div class="uk-width-1-3@m">
                    <!-- Start uk-section -->
                    <div class="uk-section">
                        <!-- Start uk-container -->
                        <div class="uk-container">
                            <!-- Start uk-slider -->
                            <div uk-slider="autoplay:true; autoplay-interval:7000; pause-on-hover:true;" style="margin-bottom: 15px; margin-block-end: 15px;">
                                <h3 class="important"><?php echo get_cat_name(4) ?></h3>
                                <div class="uk-position-relative uk-light nav-slider">
                                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous" uk-tooltip="title: Назад; pos: top"></a>
                                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next" uk-tooltip="title: Вперед; pos: top"></a>
                                </div>
                                <ul class="uk-slider-items uk-child-width-1-1@m uk-grid">
                                    <?php
                                    query_posts('&cat=4&order=DESC'); // базовый запрос + свои параметры
                                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                                        <li>
                                            <a href="<?php the_permalink(); ?>" class="a-imp-news">
                                                <div class="uk-card uk-card-default uk-card-hover">
                                                    <div class="uk-card-badge uk-label uk-label-site"><?php echo get_the_date(); ?></div>
                                                    <div class="uk-card-body cardtheme">
                                                        <h3 class="uk-card-title title-n"><?php the_title(); ?></h3>
                                                        <!-- <?php echo kama_excerpt( array('maxchar'=>80) ); ?> -->
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                        <?php wp_reset_query(); ?>
                                    <?php else : ?>
                                        <div class="uk-card uk-card-default uk-card-body no-news">
                                            <p class="no-imp-n">Объявлений еще нет</p>
                                        </div>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <!-- End uk-slider -->
                            <a href="<?php echo get_category_link( 4 ) ?>" class="no_dec"><div class="all_info">Все Объявления</div></a>
                        </div>
                        <!-- End uk-container -->
                    </div>
                    <!-- End uk-section -->
                </div>

                <!-- End uk-width-1-3@m -->

                <!-- Start uk-width-1-3@m -->
                <div class="uk-width-1-3@m">
                    <!-- Start uk-section -->
                    <div class="uk-section">
                        <div uk-slider="autoplay:true; autoplay-interval:10000; pause-on-hover:true;" style="margin-bottom: 15px; margin-block-end: 15px;">
                            <h3 class="important"><?php echo get_cat_name(11) ?></h3>
                            <div class="uk-position-relative uk-light nav-slider">
                                <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous" uk-tooltip="title: Назад; pos: top"></a>
                                <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next" uk-tooltip="title: Вперед; pos: top"></a>
                            </div>
                            <ul class="uk-slider-items uk-child-width-1-1@xl uk-child-width-1-1@m uk-child-width-1-1@s uk-grid">
                                <?php
                                query_posts('&cat=11&order=DESC'); // базовый запрос + свои параметры
                                if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>" class="a-imp-news">
                                            <div class="uk-card uk-card-default uk-card-hover">
                                                <div class="uk-card-badge uk-label uk-label-site"><?php echo get_the_date(); ?></div>
                                                <div class="uk-card-body cardtheme">
                                                    <h3 class="uk-card-title title-n"><?php the_title(); ?></h3>
                                                    <!-- <?php echo kama_excerpt( array('maxchar'=>80) ); ?> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                                    <?php wp_reset_query(); ?>
                                <?php else : ?>
                                    <div class="uk-card uk-card-default uk-card-body no-news">
                                        <p class="no-imp-n">Объявлений еще нет</p>
                                    </div>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <a href="<?php echo get_category_link(11) ?>" class="no_dec"><div class="all_info" style="margin-bottom: 70px; margin-block-end: 70px;">Все номера газет</div></a>
                    </div>
                    <!-- End uk-section -->
                </div>
                <!-- End uk-width-1-3@m -->
                <div class="uk-width-1-3@m">
                    <!-- Start uk-section -->
                    <div class="uk-section">
                        <div uk-slider="autoplay:true; autoplay-interval:5000; pause-on-hover:true;" style="margin-bottom: 15px; margin-block-end: 15px;">
                            <h3 class="important"><?php echo get_cat_name(12) ?></h3>
                            <div class="uk-position-relative uk-light nav-slider">
                                <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous" uk-tooltip="title: Назад; pos: top"></a>
                                <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next" uk-tooltip="title: Вперед; pos: top"></a>
                            </div>
                            <ul class="uk-slider-items uk-child-width-1-1@xl uk-child-width-1-1@m uk-child-width-1-1@s uk-grid">
                                <?php
                                query_posts('&cat=12&order=DESC'); // базовый запрос + свои параметры
                                if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>" class="a-imp-news">
                                            <div class="uk-card uk-card-default uk-card-hover">
                                                <div class="uk-card-badge uk-label uk-label-site"><?php echo get_the_date(); ?></div>
                                                <div class="uk-card-body cardtheme">
                                                    <h3 class="uk-card-title title-n"><?php the_title(); ?></h3>
                                                    <!-- <?php echo kama_excerpt( array('maxchar'=>80) ); ?> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                                    <?php wp_reset_query(); ?>
                                <?php else : ?>
                                    <div class="uk-card uk-card-default uk-card-body no-news">
                                        <p class="no-imp-n">Объявлений еще нет</p>
                                    </div>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <a href="<?php echo get_category_link(12) ?>" class="no_dec"><div class="all_info" style="margin-bottom: 20px; margin-block-end: 20px;">Все приказы</div></a>
                    </div>
                    <!-- End uk-section -->
                </div>

				<!-- Start uk-width-2-3@m -->

				<div class="uk-width-2-3@m">

                    <!-- Start uk-container -->

                    <div class="uk-container">

							<h3 class="l-news">Все новости</h3>

							<?php

							global $query_string; // параметры базового запроса

							query_posts( $query_string .'&cat=1&order=DESC' ); // базовый запрос + свои параметры

							if (have_posts()) : while (have_posts()) : the_post(); ?>

							<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin themeblock uk-card-hover b-news" uk-grid>

									<div class="uk-card-media-left uk-cover-container">

										<?php if (has_post_thumbnail()) { ?>

											<?php the_post_thumbnail('', array ('class' => "uk-cover")); ?>

											<div class="uk-card-badge-index uk-card-badge uk-label date__posts" uk-tooltip="title: Дата поста; pos: top"><?php echo get_the_date(); ?></div>

											<div class="uk-card-badge uk-label viewers__posts" uk-tooltip="title: Просмотров; pos: top"><i class="fas fa-eye"> </i><?php the_views(); ?></div>

											<canvas width="600" height="400"></canvas>

										<?php } else { ?>

												<img src="/wp-content/themes/amt/assets/img/no_photo.png" class="uk-cover" alt="nophoto">

												<div class="uk-card-badge-index uk-card-badge uk-label date__posts" uk-tooltip="title: Дата поста; pos: top"><?php echo get_the_date(); ?></div>

												<div class="uk-card-badge uk-label viewers__posts" uk-tooltip="title: Просмотров; pos: top"><i class="fas fa-eye"> </i><?php the_views(); ?></div>

												<canvas width="600" height="400"></canvas>

										<?php } ?>

									</div>

									<div>

											<div class="uk-card-body">

													<h3 class="uk-card-title posts-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

														<?php echo kama_excerpt( array('maxchar'=>120) ); ?>

													<a href="<?php the_permalink(); ?>" class="uk-button uk-button-primary uk-text-right s-link link-m">Подробнее</a>

											</div>

									</div>

							</div>

							<?php endwhile; ?>

							<?php echo the_posts_pagination(array(

									'show_all'     => false,

									'end_size'     => 2,

									'mid_size'     => 2,

									'prev_next'    => true,

									'prev_text'    => __('<i class="fas fa-arrow-left" uk-tooltip="title: Назад; pos: top"></i>'),

									'next_text'    => __('<i class="fas fa-arrow-right" uk-tooltip="title: Далее; pos: top"></i>'),

								)); ?>

								<?php wp_reset_query(); ?>

							<?php else: ?>

								<div class="uk-card uk-card-default uk-card-body no-news">

									<p>Новостей еще нет</p>

								</div>

							<?php endif; ?>

						</div>

                    <!-- End uk-container -->


					<!-- Start uk-section -->

					<div class="uk-section">

						<!-- Start uk-container -->

						<div class="uk-container">

							<div uk-slider="autoplay:true; autoplay-interval:10000; pause-on-hover:true;" style="margin-bottom: 15px; margin-block-end: 15px;">

								<h3 class="l-news">Фотогалерея</h3>

								<div class="uk-position-relative uk-light nav-slider">

									<a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous" uk-tooltip="title: Назад; pos: top"></a>

									<a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next" uk-tooltip="title: Вперед; pos: top"></a>

								</div>

								<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

										<ul class="uk-slider-items uk-child-width-1-2@xl uk-child-width-1-2@l uk-child-width-1-1@m uk-child-width-1-2@s uk-grid">

											<?php $query = new WP_Query( array ('post_type' => 'photo', 'posts_per_page' => 6) ); ?>

											<?php if ( $query->have_posts() ) : ?>

											<?php while ( $query->have_posts() ) : $query->the_post(); ?>

											<li>

												<div class="uk-card-badge uk-label uk-label-site" uk-tooltip="title: Дата поста; pos: top" title="" aria-expanded="false"><?php echo get_the_date(); ?></div>

												<div class="uk-card uk-card-default uk-card-hover b-news">

													<?php if (has_post_thumbnail()) { ?>

															<div class="uk-card-media-top uk-inline-clip uk-transition-toggle" tabindex="0">

																<a href="<?php the_permalink(); ?>">

																	<img class="uk-transition-scale-up uk-transition-opaque" src="<?php echo get_the_post_thumbnail_url( '' , array(200, 300)); ?>" alt="">

																	<div class="uk-position-center">

																		<span class="uk-transition-fade" uk-icon="icon: plus; ratio: 2"></span>

																	</div>

																</a>

															</div>

															<div class="uk-card-body p-album">

																	<h4 class="uk-card-title photoalbum-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

															</div>

													<?php } else { ?>

															<div class="uk-card-media-top uk-inline-clip uk-transition-toggle" tabindex="0">

																<a href="<?php the_permalink(); ?>">

																<img class="uk-transition-scale-up uk-transition-opaque" src="/wp-content/themes/amt/assets/img/no_photo.png" alt="">

																	<div class="uk-position-center">

																		<span class="uk-transition-fade" uk-icon="icon: plus; ratio: 2"></span>

																	</div>

																</a>

															</div>

															<div class="uk-card-body body-text p-album">

																<h4 class="uk-card-title photoalbum-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

															</div>

														</a>

													<?php } ?>

												</div>

											</li>

											<?php endwhile; ?>

											<?php wp_reset_postdata(); ?>

											<?php else : ?>

												<p>Фотоальбомов еще нет</p>

											<?php endif; ?>

										</ul>

								</div>

							</div>

							<a href="/photo" class="no_dec"><div class="all_info">Все Фотоальбомы</div></a>

						</div>

						<!-- End uk-container -->

					</div>

					<!-- End uk-section -->
										

					<!-- End uk-section -->

				</div>

				<!-- End uk-width-2-3@m -->

				<!-- Start uk-width-expand@m -->

				<div class="uk-width-expand@m">
                    <!-- Start r-column -->
                    <div class="r-column">
							<?php dynamic_sidebar('r-column-top'); ?>
							<?php dynamic_sidebar('r-column-bottom'); ?>
						</div>
                    <!-- End r-column -->
				</div>

				<!-- End uk-width-expand@m -->

			</div>

			<!-- End uk-grid -->

		</div>

		<!-- End content uk-container -->

<?php get_footer() ; ?>