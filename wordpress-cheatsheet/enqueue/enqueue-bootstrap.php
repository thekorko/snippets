<?php
/**
* With this code you can get bootstrap on your theme
* thekorko
* https://quartex.net/en
* We enqueue bootstrap grid styleshet from the /css/ folder
* Then we add our callback function bootstrap_grid to the action hook wp_enqueue_scripts
*
*/

function bootstrap_grid() {
    wp_enqueue_style( 'bootstrap_grid_min',
    get_stylesheet_directory_uri() . '/css/bootstrap-grid.min.css',
    array(),
    '0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'bootstrap_grid');
?>
