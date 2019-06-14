functions.php

<?php



/* Activation du thème enfant et liaison avec les fichiers de son parent */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

