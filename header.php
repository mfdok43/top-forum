<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); echo ' | '; bloginfo('description'); ?></title>
    <meta name="theme-color" content="#c9e0e04d">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php
    wp_head ();
    ?>

</head>
<body>

<header>
    <div class="header-dark">
        <div class="header__menu">
            <div class="menu__icon">
                <img src="assets/img/burger.svg">
                <q class="quote"></q>
                <span></span>
            </div>
            <nav id="menu">
                <?php
                wp_nav_menu( [
                    'menu'            => 'Main',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'after'           => '<span class="sub-menu-button arrow-span">▼</span>',
                    'items_wrap'      => '<ul class="header_nav">%3$s</ul>',
                    'depth'           => 0,
                ] );
                ?>
            </nav>
        </div>


    </div>
    <div class="header-white">
        <div class="header-logo">
            <a href="<?php echo get_home_url()?>">
                <?php the_custom_logo(); ?>
            </a>
        </div>
        <button id="open-modal">Register now</button>
    </div>

    <div id="myModal" class="modal">

        <!-- Модальное содержание -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="form-item"><label for="feedname">Ваше имя</label><input type="text" placeholder="Например Сергей"></div>
            <div class="form-item"><label for="feedmail">Ваш email</label><input type="text" placeholder="asdf@gmail.com"></div>
            <div class="form-item"><label for="feedmail">Номер телефона</label><input type="tel" placeholder="+380731234567"></div>
            <div class="form-item"><label for="feedpass">Введите пароль</label><input type="password"></div>
            <div class="form-item"><label for="feedpass">Повторите пароль</label><input type="password"></div>
            <button >Отправить</button>
        </div>

    </div>

</header>