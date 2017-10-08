<?php
function register_my_menus() {
  register_nav_menus(array(
		'header-menu' => 'Header Menu',
	));
}
function register_my_wigets() {
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar-1',
		'description'   => 'Custom Sidebar Widget',
    'before_widget' => '<div class="sidebar-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
}
add_action( 'init', 'register_my_menus' );
add_action( 'widgets_init', 'register_my_wigets' );
?>
