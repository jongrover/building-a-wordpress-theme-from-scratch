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

function theme_footer_customizer($wp_customize) {
 //adding section in wordpress customizer
  $wp_customize->add_section('footer_settings_section', array(
    'title'          => 'Footer Text Section'
   ));
  //adding setting for footer text area
  $wp_customize->add_setting('text_setting', array(
   'default'        => 'Default Text For Footer Section',
   ));
  $wp_customize->add_control('text_setting', array(
   'label'   => 'Footer Text Here',
    'section' => 'footer_settings_section',
   'type'    => 'textarea',
  ));
}
add_action('customize_register', 'theme_footer_customizer');
?>
