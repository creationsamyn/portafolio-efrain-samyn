<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array('parent-style'), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    wp_enqueue_script('menu-toggle', get_stylesheet_directory_uri() . '/js/menu-toggle.js', array(), null, true);
    
}

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array() );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION
// Ajout des scripts personnalisés
function enqueue_custom_scripts()
{
    // Enqueue jQuery from CDN
    wp_enqueue_script('jquery-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true);

    // Enqueue modale-contact.js
    wp_enqueue_script('modale-contact-script', get_stylesheet_directory_uri() . '/js/modale-contact.js', array('jquery'), '1.0.0', true);


}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


?>
