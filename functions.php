<?php 
define('LGMAC_VERSION', '1.0.0');

function lgmac_scripts() {
    wp_enqueue_style('lgmac_bootstrap_core', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css', array(), LGMAC_VERSION, 'all');
    wp_enqueue_style('lgmac_custom', get_template_directory_uri() . '/assets/css/styles.css', array('lgmac_bootstrap_core'), LGMAC_VERSION, 'all');
}

add_action( 'wp_enqueue_scripts', 'lgmac_scripts' );