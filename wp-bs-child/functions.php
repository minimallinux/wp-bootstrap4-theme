<?php
// Include parent theme styles. 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
wp_register_script('tether',  'js/tether.min.js', false, true);
	wp_enqueue_script('tether');
wp_register_script('maps',  'js/maps.js', false, true);
	wp_enqueue_script('maps');
wp_register_script('sweetalert',  'js/sweetalert.min.js', false, true);
	wp_enqueue_script('sweetalert');		
//Add Footer Mneu
function register_menu() {
  register_nav_menu('footer',__( 'Footer' ));
}
add_action( 'init', 'register_menu' );	

?>
