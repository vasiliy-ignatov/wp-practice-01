<?php

require_once __DIR__ . '/Test_menu.php';

/*
* Подключение скриптов и стилей
*/
function test_scripts() {
    wp_enqueue_style('test-bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
    wp_enqueue_style('test-style', get_stylesheet_uri());

    wp_deregister_script('jquery');
    wp_register_script('jquery', '//code.jquery.com/jquery-3.5.1.slim.min.js', array(), false, true);

    wp_enqueue_script('test-popper', '//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array
    ('jquery'), false, true);
    wp_enqueue_script('test-bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array
    ('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'test_scripts');

// виджеты
function test_widgets_init() {
	register_sidebar( array(
		'name' => 'Сайдбар слева',
		'id' => 'left-sidebar',
		'description' => 'Область для виджетов в сайдбаре справа',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>'
	) );
};

add_action('widgets_init', 'test_widgets_init');


function test_setup() {
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');

	add_image_size('my-thumb', 100, 100);
	register_nav_menus(array(
		'header_menu' => 'Меню в шапке',
		'footer_menu' => 'Меню в футере'
	));

	add_theme_support('custom-logo', array(
		'width' => '400',
		'height' => '40',
	));
};

add_action( 'after_setup_theme', 'test_setup' );


// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/
	
	return '
		<nav class="navigation %1$s" role="navigation">
			<div class="nav-links">%3$s</div>
		</nav>
	';
}

// выводим пагинацию
the_posts_pagination( array(
	'end_size' => 2,
) ); 
