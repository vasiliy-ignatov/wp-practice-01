<?php
echo 'Hello';
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