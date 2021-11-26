<?php

function child_enqueue_styles() {
    wp_enqueue_style('astra-child-theme-css', get_stylesheet_directory_uri() . "/dist/app.css", array('astra-theme-css'), null, 'all');

    wp_enqueue_script( "some-unique-handler", get_stylesheet_directory_uri() . "./dist/app.js", ["jquery"], true);

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15)

?>