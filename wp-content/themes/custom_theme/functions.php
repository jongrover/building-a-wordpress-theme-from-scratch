<?php
function register_my_menus() {
  register_nav_menus(array(
		'header-menu' => 'Header Menu',
	));
}
add_action( 'init', 'register_my_menus' );

function register_my_widgets() {
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar-1',
		'description'   => 'Custom Sidebar Widget',
    'before_widget' => '<div class="sidebar-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'name' => 'Footer 1',
    'id' => 'footer-1',
		'description'   => 'Custom Footer Widget',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'name' => 'Footer 2',
    'id' => 'footer-2',
		'description'   => 'Custom Footer Widget',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'name' => 'Footer 3',
    'id' => 'footer-3',
    'description'   => 'Custom Footer Widget',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'name' => 'Footer 4',
    'id' => 'footer-4',
    'description'   => 'Custom Footer Widget',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
}
add_action( 'widgets_init', 'register_my_widgets' );

function register_my_customizations( $wp_customize ) {
   // setting
   $wp_customize->add_setting( 'header_color' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
    ));
    // section
    $wp_customize->add_section( 'colors' , array(
      'title'      => __( 'Colors', 'custom_theme' ),
      'priority'   => 30,
    ));
    // control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
    	 'label'      => __( 'Header Color', 'custom_theme' ),
  	   'section'    => 'colors',
  	   'settings'   => 'header_color',
     ))
    );
}
add_action( 'customize_register', 'register_my_customizations' );

function apply_my_customizations() {
  echo '<style type="text/css">'.
          'h1 { color: '.get_theme_mod('header_color','#000000').'; }'.
       '</style>';
}
add_action( 'wp_head', 'apply_my_customizations');
?>
