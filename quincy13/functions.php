<?php 
show_admin_bar (true);
function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
// WIDGETS +---+---+---+---+---+---+---+---+---+---+---+---+---+---+---+---+---+---+
	
	// enables wigitized sidebars

	if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name' => 'Sidebar Personalizada',
		'before_widget' => '<div class="panel panel-default">',
		'after_widget' => '</div>',
		'before_title' => '<div class="panel-heading"><h4 class="panel-title ">',
		'after_title' => '</h4></div>',
	));
}

// custom menu support

	add_theme_support( 'menus' );

	if ( function_exists( 'register_nav_menus' ) ) {

	  	register_nav_menus(

	  		array(

	  		  'header-menu' => 'Header Menu',

	  		  'sidebar-menu' => 'Sidebar Menu',

	  		  'footer-menu' => 'Footer Menu',

	  		  'logged-in-menu' => 'Logged In Menu'

	  		)

	  	);

	}
add_theme_support( 'post-thumbnails' );
function wb_remove_version() {

		return '<!--built on the Whiteboard Framework-->';

	}

	add_filter('the_generator', 'wb_remove_version');

?>