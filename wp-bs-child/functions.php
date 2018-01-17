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

function wp_bs_child_widgets_init() {
 // Image footer widget area for images/banners etc
    register_sidebar( array(
        'name' => __( 'Image Footer Widget Area', 'wp-bs-child' ),
        'id' => 'image-footer-widget-area',
        'description' => __( 'The image footer widget area', 'wp-bs-child' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
     //Widgets for next 3 columns/links etc
    // Second Footer Widget Area
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'wp-bs-child' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'wp-bs-child' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Third Footer Widget Area
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'wp-bs-child' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'wp-bs-child' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Fourth Footer Widget Area
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'wp-bs-child' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The fourth footer widget area', 'wp-bs-child' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    //Social Footer Widget Area (for social plugin if required)
    register_sidebar( array(
        'name' => __( 'Social Footer Widget Area', 'wp-bs-child' ),
        'id' => 'social-footer-widget-area',
        'description' => __( 'The social footer widget area', 'wp-bs-child' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) ); 
         
}
 
// Register sidebars by running wp_bs_child_widgets_init() on the widgets_init hook.
add_action( 'widgets_init', 'wp_bs_child_widgets_init' );	

?>
