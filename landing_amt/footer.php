<script>
    $('#fullpage').fullpage({
        // Навигация
        licenseKey: 'nope',
        menu: '#amtMenu',
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['<?php echo get_cat_name(1); ?>', '<?php echo get_cat_name(3); ?>', '<?php echo get_cat_name(4); ?>', '<?php echo get_cat_name(5); ?>' ,'Рекомендуемые плагины', 'Установка', 'Настройка темы', 'Вопросы'],
        showActiveTooltip: false,
        slidesNavigation: false,
        slidesNavPosition: 'bottom',
        anchors:['Главная', 'Тема', 'Функционал', 'Документы' ,'Плагины', 'Установка', 'Настройка', 'Вопросы'], // Линки для ссылок

        // Дизайн
        sectionsColor: ['#72aef8', '#3581ab', '#4998b8', '#3581ab', '#72aef8', '#3581ab', '#4998b8', '#72aef8' ], // Цвет слайдов
        fixedElements: '#header, .footer',

        // Скроллинг
        autoScrolling:true,
        loopTop: false,
        loopBottom: true,

        //Доступ
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        // Селекторы
        lazyLoading: true


    });
</script>
<?php wp_footer(); ?>
</body>
</html>