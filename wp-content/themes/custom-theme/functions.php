<?php
function register_my_menus() {
  register_nav_menus(array(
		'header-menu' => 'Header Menu',
		'footer-menu' => 'Footer Menu'
	));
}
add_action( 'init', 'register_my_menus' );
?>
