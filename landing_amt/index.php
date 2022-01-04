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
                    <div class="uk-width-1-1">
                        <h2 class="uk-heading-medium all_text">Тема Wordpress - AMTHEME 2</h2>
                    </div>
                    <div class="uk-width-1-3@m uk-animation-toggle">
                        <div class="photo_amtheme2 uk-animation-shake">
                            <img class="slide_2" data-src="assets/img/photo_2-1.png">
                            <div class="uk-text-small">Подойдет для администраторов образовательных сайтов и начинающим веб-разработчикам</div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m uk-animation-toggle">
                        <div class="photo_amtheme2 uk-animation-shake">
                            <img class="slide_2" data-src="assets/img/photo_2-2.png">
                            <div class="uk-text-small">Позволяет создать сайт соответствующий требованиям действующего законодательства</div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m uk-animation-toggle">
                        <div class="photo_amtheme2 uk-animation-shake">
                            <img class="slide_2" data-src="assets/img/photo_2-4.png">
                            <div class="uk-text-small">Поддерживает все современные браузеры</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='icon-scroll'></div>
        </div>
        <div class="section">3
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