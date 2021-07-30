<?php
/*
* With this code you can register multiple stylesheets into your wordpress theme
* thekorko
* https://quartex.net/en
* A good way to register multiple stylesheets
* You can use get_stylesheet_directory_uri() to obtain the child theme, instead of get_template_directory_uri() which gets the * original theme working directory
* https://developer.wordpress.org/reference/functions/get_stylesheet_directory_uri/
* https://developer.wordpress.org/reference/functions/wp_enqueue_style/
*/

function quartex_theme_stylesheets() {
wp_enqueue_style( 'styles_custom',
    get_template_directory_uri() . '/css/styles_custom.css',
    array(),
    '0.0'
);
//
wp_enqueue_style( 'another_stylesheet',
    get_template_directory_uri() . '/css/another_stylesheet.css',
    array(),
    '0.0'
);
wp_enqueue_style( 'carousel_styles',
    get_stylesheet_directory_uri() . '/css/carousel.css',
    array(),
    '0.0'
);
}
add_action( 'wp_enqueue_scripts', 'quartex_theme_stylesheets' );
?>
