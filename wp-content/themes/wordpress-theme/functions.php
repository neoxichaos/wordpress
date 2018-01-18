<?php 
define('LGMAC_VERSION', '1.0.0');

function lgmac_scripts() {
    wp_enqueue_style('lgmac_bootstrap_core', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css', array(), LGMAC_VERSION, 'all');
    wp_enqueue_style('lgmac_custom', get_template_directory_uri() . '/style.css', array('lgmac_bootstrap_core'), LGMAC_VERSION, 'all');
}

add_action( 'wp_enqueue_scripts', 'lgmac_scripts' );

/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'menu principal', 'wptuts' ) );
            register_nav_menu( 'secondary', __( 'category', 'wptuts' ) );
        } endif;

    // Register custom navigation walker
    require_once('include/wp_bootstrap_navwalker.php');