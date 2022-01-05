<?php get_header() ; ?>


    <div id="fullpage">
        <!-- 1 -->
        <div class="section active">
            <div class="uk-container">
                <div uk-grid>
                    <div class="uk-width-1-2@m name_site">
                        <h1 class="name_theme"><?php bloginfo( 'name' ); ?></h1>
                        <p class="all_text"><?php bloginfo( 'description' ); ?></p>
                        <div class="buttons">
                            <?php dynamic_sidebar('1_slide'); ?>
                        </div>
                    </div>
                    <div class="uk-width-1-2@m">
                        <?php the_custom_logo( $blog_id = 0 ); ?>
                    </div>
                </div>
            </div>
            <div class='icon-scroll'></div>
        </div>
        <!--    2    -->
        <div class="section">
            <div class="uk-container">
                <div uk-grid style="text-align: center;">
                    <div class="uk-width-1-1" uk-slider="autoplay:true; autoplay-interval:10000; pause-on-hover:true;">
                        <h2 class="uk-heading-medium all_text"><?php echo get_cat_name(3);?></h2>
                        <div class="uk-position-relative uk-light nav-slider">
                            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous" uk-tooltip="title: Назад; pos: top"></a>
                            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next" uk-tooltip="title: Вперед; pos: top"></a>
                        </div>
                    <ul class="uk-slider-items uk-child-width-1-3@xl uk-child-width-1-3@m uk-child-width-1-2@s uk-grid">
                        <?php global $query_string; // параметры базового запроса
                        query_posts( $query_string .'&cat=3&order=DESC' ); // базовый запрос + свои параметры
                        if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li>
                                <div class="uk-width-1-1@m uk-animation-toggle">
                                    <div class="photo_amtheme2 uk-animation-shake">
                                        <?php if (has_post_thumbnail()) { ?>
                                            <?php the_post_thumbnail('', array ('class' => "slide_2")); ?>
                                        <?php } else { ?>
                                            <img src="/wp-content/themes/landing_amt/assets/img/no_photo.png" class="slide_2" alt="nophoto">
                                        <?php } ?>
                                    </div>
                                    <div class="uk-text-small">
                                        <?php echo the_content(); ?>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                        <?php else: ?>
                            <div class="uk-card uk-card-default uk-card-body no-news">
                                <p>Новостей еще нет</p>
                            </div>
                        <?php endif; ?>
                    </ul>
                    </div>
                </div>
            </div>
            <div class='icon-scroll'></div>
        </div>



        <div class="section">
            <div class="uk-container">
                <div uk-grid>
                    <div class="uk-width-1-1">
                        <h2 class="uk-heading-medium all_text" style="text-align: center;"><?php echo get_cat_name(4);?></h2>
                    </div>

                    <?php global $query_string; // параметры базового запроса
                    query_posts( $query_string .'&cat=4&order=DESC' ); // базовый запрос + свои параметры
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php if (has_post_thumbnail()) { ?>
                                <div class="uk-width-1-6@m flex_center">
                                    <?php the_post_thumbnail('', array ('class' => "image_slide")); ?>
                                </div>
                            <?php } else { ?>
                                <div class="uk-width-1-6@m">
                                    <img src="/wp-content/themes/landing_amt/assets/img/no_photo.png" class="slide_2" alt="nophoto">
                                </div>
                                <?php } ?>
                            <div class="uk-width-5-6@m">
                                <h2 class="all_text color_red" style="text-decoration: underline;"><?php echo the_title(); ?></h2>
                                <div class="uk-text-small" style="text-transform: none;"><?php echo the_content(); ?></div>
                            </div>
                    <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    <?php else: ?>
                        <div class="uk-card uk-card-default uk-card-body no-news">
                            <p>Новостей еще нет</p>
                        </div>
                    <?php endif; ?>




                </div>


            </div>

            <div class='icon-scroll'></div>
        </div>
        <div class="section">4
            <div class='icon-scroll'></div>
        </div>
        <div class="section">5
            <div class='icon-scroll'></div>
        </div>
        <div class="section">6
            <div class='icon-scroll'></div>
        </div>
        <div class="section">7
            <div class='icon-scroll'></div>
        </div>
    </div>

<?php get_footer() ; ?>