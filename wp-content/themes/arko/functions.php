<?php

//Арко Мебель | Интернет магазин мебели

if (!function_exists('arko_mebel_setup')) :
	function arko_mebel_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'menus' );
		add_theme_support( 'custom-header', array(
			'video' => true,
		) );
		add_theme_support( 'custom-background' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		register_nav_menus( [
			'header_menu' => 'header__top-menu',
		] );
	}
endif;
add_action('after_setup_theme', 'arko_mebel_setup');


// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'enqueue_arko_style' );
function enqueue_arko_style() {
	wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css', 'style' );
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/libs/font-awesome.all.css');
	wp_enqueue_style('arko', get_template_directory_uri() . '/assets/css/arko.css');

	wp_enqueue_script( 'yandex-api', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=4555d27e-14f7-41ba-b7c9-74b6492680a6');
	wp_enqueue_script( 'font-awesome', get_template_directory_uri() . '/libs/font-awesome.all.js', '', '', 'true');
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', 'yandex-api', '', 'true');
}


