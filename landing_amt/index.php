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
                    <div class="uk-width-1-2@m img_main">
                        <?php the_custom_logo( $blog_id = 0 ); ?>
                    </div>
                </div>
            </div>
            <div class='icon-scroll'></div>
        </div>
        <!--    2    -->
        <div class="section">
            <div class="uk-container">
                <div uk-slider="autoplay:true; autoplay-interval:10000; pause-on-hover:true;" style="margin-block-end: 15px; margin-right: 15px;">
                    <h2 class="uk-heading-medium all_text" style="text-align: center;"><?php echo get_cat_name(3);?></h2>
                    <ul class="uk-slider-items uk-child-width-1-3@xl uk-child-width-1-2@m uk-child-width-1-1@s uk-grid">
                        <?php global $query_string; // параметры базового запроса
                        query_posts( $query_string .'&cat=3&order=DESC' ); // базовый запрос + свои параметры
                        if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li class="uk-text-center">
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
                            <div class="uk-card uk-card-default uk-card-body">
                                <p>Ещё пусто</p>
                            </div>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class='icon-scroll'></div>
        </div>

        <!--    3    -->

        <div class="section">
            <div class="uk-container">
                <div uk-slider="autoplay:false; autoplay-interval:10000; pause-on-hover:true;" style="margin-block-end: 15px; margin-right: 15px;">
                    <h2 class="uk-heading-medium all_text" style="text-align: center;"><?php echo get_cat_name(4);?></h2>
                    <ul class="uk-slider-items uk-child-width-1-3@xl uk-child-width-1-2@m uk-child-width-1-1@s uk-grid">
                        <?php global $query_string; // параметры базового запроса
                        query_posts( $query_string .'&cat=4&order=DESC' ); // базовый запрос + свои параметры
                        if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li class="uk-text-center">
                            <?php if (has_post_thumbnail()) { ?>
                                <div class="uk-width-1-1@m flex_center">
                                    <?php the_post_thumbnail('', array ('class' => "image_slide")); ?>
                                </div>
                            <?php } else { ?>
                                <div class="uk-width-1-1@m">
                                    <img src="/wp-content/themes/landing_amt/assets/img/no_photo.png" class="slide_2" alt="nophoto">
                                </div>
                            <?php } ?>
                            <div class="uk-width-1-1@m">
                                <h2 class="all_text" style="text-decoration: underline;"><?php echo the_title(); ?></h2>
                                <div class="uk-text-small" style="text-transform: none;"><?php echo the_content(); ?></div>
                            </div>
                        </li>
                        <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                        <?php else: ?>
                            <div class="uk-card uk-card-default uk-card-body">
                                <p>Пока пусто</p>
                            </div>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class='icon-scroll'></div>
        </div>


        <!--    4    -->

        <div class="section">
            <div class="uk-container">
                <div class="uk-width-1-1">
                    <?php global $query_string; // параметры базового запроса
                    query_posts( $query_string .'&cat=5&order=DESC' ); // базовый запрос + свои параметры
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                            <h2 class="all_text" style="text-decoration: underline;"><?php echo the_title(); ?></h2>
                            <div class="uk-text-small" style="text-transform: none;"><?php echo the_content(); ?></div>
                        </div>
                    <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    <?php else: ?>
                        <div class="uk-card uk-card-primary uk-card-body">
                            <p>Документов еще нет</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class='icon-scroll'></div>
        </div>

        <!--    5    -->


        <div class="section">
            <div class="uk-container">
                <div uk-slider="autoplay:true; autoplay-interval:2000; pause-on-hover:true;" style="margin-block-end: 15px; margin-right: 15px;">
                    <h2 class="uk-heading-medium all_text" style="text-align: center;"><?php echo get_cat_name(6);?></h2>
                    <ul class="uk-slider-items uk-child-width-1-3@xl uk-child-width-1-2@m uk-child-width-1-1@s uk-grid">
                        <?php query_posts('&cat=6&order=DESC'); // базовый запрос + свои параметры
                        if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li class="uk-text-center">
                                <div class="uk-card uk-card-primary uk-card-hover flex_plug">
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title all_text"><?php the_title(); ?></h3>
                                        <?php echo the_content(); ?>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                        <?php else : ?>
                            <div class="uk-card uk-card-primary uk-card-hover uk-card-body">
                                <p>Плагинов еще нет</p>
                            </div>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class='icon-scroll'></div>
        </div>
        <!--    6    -->
        <div class="section">
            <div class="uk-container">
                <div class="uk-width-1-1">
                    <h2 class="uk-heading-medium all_text" style="text-align: center;">Установка</h2>
                    <div class="uk-card uk-card-primary uk-card-hover">
                        <div class="uk-card-body">
                            <?php dynamic_sidebar('6_slide');  ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class='icon-scroll'></div>
        </div>

        <!--    7    -->
        <div class="section">
            <div class="uk-container">
                <div class="uk-width-1-1">
                    <div uk-slider="autoplay:true; autoplay-interval:5000; pause-on-hover:true;" style="margin-bottom: 15px; margin-block-end: 15px;">
                        <h2 class="uk-heading-medium all_text" style="text-align: center;"><?php echo get_cat_name(1);?></h2>
                        <ul class="uk-slider-items uk-child-width-1-3@xl uk-child-width-1-2@m uk-child-width-1-1@s uk-grid">
                            <?php query_posts('&cat=1&order=DESC'); // базовый запрос + свои параметры
                            if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <li class="">
                                    <div class="uk-card uk-card-primary uk-card-hover">
                                        <div class="uk-card-badge uk-label uk-label-site"><?php echo get_the_date(); ?></div>
                                        <div class="uk-card-body cardtheme">
                                            <h3 class="uk-card-title title-n"><?php the_title(); ?></h3>
                                            <?php echo the_content(); ?>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                                <?php wp_reset_query(); ?>
                            <?php else : ?>
                                <div class="uk-card uk-card-default uk-card-body">
                                    <p class="no-imp-n">Новостей еще нет</p>
                                </div>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='icon-scroll'></div>
        </div>
        <!--    8    -->
        <div class="section">
            <div class="uk-container">
                <div class="uk-width-1-1">
                    <h2 class="uk-heading-medium all_text" style="text-align: center;">Задать вопрос</h2>
                </div>
                <div class="uk-width-1-1">
                    <?php dynamic_sidebar('7_slide'); ?>
                </div>
            </div>
            <div class='icon-scroll'></div>
        </div>
    </div>

<?php get_footer() ; ?>