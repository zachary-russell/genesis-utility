<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

define( 'CHILD_THEME_NAME', 'WP Temple Sandbox Theme' );
define( 'CHILD_THEME_URL', 'https://www.wptemple.com/' );
define( 'CHILD_THEME_VERSION', '2.1.2' );

add_action( 'wp_enqueue_scripts', 'genesis_sandbox_enqueue_scripts' );
    function genesis_sandbox_enqueue_scripts() {
        wp_enqueue_script( 'responsive-menu', get_bloginfo( 'stylesheet_directory' ) . '/js/responsive-menu.js', array( 'jquery' ), '1.0.0' );
        wp_enqueue_style( 'dashicons' );

    }

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Unregister Layouts
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

//* Add support for custom header (Logo)
add_theme_support( 'custom-header', array(
    'width'             => 300,
    'height'            => 100,
    'header-selector'   => '.site-title a',
    'header-text'       => FALSE,
) );
