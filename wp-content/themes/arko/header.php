<?php

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Арко Мебель | Интернет магазин мебели</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>

    <nav class="header__top">
        <div class="header__container">
            <ul class="header__top-left">
                <li class="header__top-item geo-item">
                    <i class="fa-solid fa-location-dot"></i>
                    Ростов
                    <i class="fa-solid fa-angle-down"></i>
                </li>
                <?php
                wp_nav_menu( [
	                'theme_location'  => 'header__top-left_menu',
	                'menu'            => '',
	                'container'       => false,
	                'fallback_cb'     => 'wp_page_menu',
	                'items_wrap'      => '%3$s',
                ] );
                ?>
            </ul>
            <ul class="header__top-right">
	            <?php
	            wp_nav_menu( [
		            'theme_location'  => 'header__top-right_menu',
		            'menu'            => '',
		            'container'       => false,
		            'fallback_cb'     => 'wp_page_menu',
		            'items_wrap'      => '%3$s',
	            ] );
	            ?>
            </ul>
        </div>
    </nav>

    <div class="header__center">
        <div class="header__container">
            <div class="header__logo">
                <?php
                if( has_custom_logo() ){
                    // логотип есть выводим его
                    echo get_custom_logo();
                }
                ?>
            </div>
            <div class="header__address">
                <div class="header__address-text">ул. Московская, 144 корп. - 1</div>
                <a href="#" class="header__address-scheme">Схема проезда</a>
            </div>
            <form class="header__search">
                <input class="header__search-input" placeholder="Поиск" type="text">
                <a href="#" class="header__search-button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></a>
            </form>
            <div class="header__phone">
                <a href="tel:89615259191" class="header__phone-number">
                    <i class="fa-solid fa-phone"></i>
                    8 (961) 525 91 91
                </a>
                <a href="#" class="header__phone-button">Заказать звонок</a>
            </div>
            <ul class="header__buttons">
                <li class="header__button">
                    <i class="fa-solid fa-user"></i>
                    <span class="header__button-text">Войти</span>
                </li>
                <li class="header__button">
                    <div class="header__button-count">
                        <i class="fa-regular fa-heart"></i>
                        <span class="header__button-counter">2</span>
                    </div>
                    <span class="header__button-text">Избранное</span>
                </li>
                <li class="header__button">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="header__button-text">Корзина</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="header__bottom">
        <div class="header__container">
            <ul class="header__bottom-menu">
                <li class="header__bottom-item"><a href="#" class="header__bottom-link">Кухни</a></li>
                <li class="header__bottom-item"><a href="#" class="header__bottom-link">Гостинные</a></li>
                <li class="header__bottom-item"><a href="#" class="header__bottom-link">Спальни</a></li>
                <li class="header__bottom-item"><a href="#" class="header__bottom-link">Прихожие</a></li>
                <li class="header__bottom-item"><a href="#" class="header__bottom-link">Шкафы-купе</a></li>
                <li class="header__bottom-item"><a href="#" class="header__bottom-link">Детские</a></li>
                <li class="header__bottom-item"><a href="#" class="header__bottom-link">Диваны</a></li>
            </ul>
            <ul class="header__bottom-static">
                <li class="header__bottom-static_item"><a href="#" class="header__bottom-static_link">Где посмотреть</a></li>
            </ul>
        </div>
    </div>







</header>