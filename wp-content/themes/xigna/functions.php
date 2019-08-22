<?php
/**
 * Enqueue scripts and styles.
 */
function pruebaxigna_scripts() {
    wp_enqueue_style( 'pruebaxigna-style', get_stylesheet_uri() );

    wp_enqueue_script( 'pruebaxigna-jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.js', array(), '20151215', true );

    wp_enqueue_script( 'pruebaxigna-jquery-knob', get_template_directory_uri() . '/assets/js/jquery-knob.js', array('jquery'), '20151215', true );

    wp_enqueue_script( 'pruebaxigna-button-action', get_template_directory_uri() . '/assets/js/button-action.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'pruebaxigna_scripts' );
?>