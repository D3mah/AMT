<?php get_header() ; ?>
    <div class="uk-container">
        <div class="important uk-animation" tabindex="0">
            <div class="important-block uk-animation-slide-right"><?php dynamic_sidebar('important'); ?></div>
        </div>
    </div>
    <div uk-grid>
        <div class="uk-width-1-1">
            <div class="uk-section">
                <div class="uk-container uk-animation" tabindex="0">
                    <div uk-slider="autoplay:true; autoplay-interval:12000; pause-on-hover:true;" style="margin-bottom: 15px; margin-block-end: 15px;" class="uk-animation-slide-right">
                        <h3 class="up_title"><?php echo get_cat_name(11) ?></h3>
                        <div class="uk-position-relative uk-light nav-slider">
                            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous" uk-tooltip="title: Назад; pos: top"></a>
                            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next" uk-tooltip="title: Вперед; pos: top"></a>
                        </div>
                        <ul class="uk-slider-items uk-child-width-1-2@xl uk-child-width-1-2@l uk-child-width-1-1@m uk-child-width-1-1@s uk-grid">
                            <?php
                            query_posts('&cat=11&order=DESC');
                            if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>" class="imp_news">
                                        <div class="uk-card uk-card-default uk-card-hover radius">
                                            <div class="uk-card-body">
                                                <h3 class="uk-card-title news_title"><?php the_title(); ?></h3>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                                <?php wp_reset_query(); ?>
                            <?php else : ?>
                                <div class="uk-card uk-card-default uk-card-body no-news">
                                    <p>Новостей еще нет</p>
                                </div>

                            <?php endif; ?>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ; ?>
