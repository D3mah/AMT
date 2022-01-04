<script>
    $('#fullpage').fullpage({
        // Навигация
        licenseKey: 'nope',
        menu: '#amtMenu',
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['Главная', 'Тема Wordpress - AMT', 'Функционал', 'Рекомендуемые плагины', 'Установка', 'Настройка темы', 'Вопросы'],
        showActiveTooltip: false,
        slidesNavigation: false,
        slidesNavPosition: 'bottom',
        anchors:['Главная', 'Тема', 'Функционал', 'Плагины', 'Установка', 'Настройка', 'Вопросы'], // Линки для ссылок

        // Дизайн
        sectionsColor: ['#72aef8', '#3581ab', '#4998b8', '#3581ab', '#72aef8', '#3581ab', '#4998b8' ], // Цвет слайдов
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