<?php
	function wpbootstrap_scripts_with_jquery()
	{
		//Register the script lke a theme:
		wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array ('jquery') );
		wp_register_script( 'bootstrap-js-min', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', array ('jquery'));
		// For either a plugin or a theme, you can then enqueue the script
		wp_enqueue_script('bootstrap-js');
		wp_enqueue_script('bootstrap-js-min');
	}
	add_action('wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery');
	
	
	//Menu Attempts
	@include('bootstrap-walker.php');
	add_action('after_setup_theme', 'register_my_menus');
	
	function register_my_menus() {
		register_nav_menus( array(
			'primary' => __( 'Primary Navigation', 'bbcbootstrap')
		));
	}
	
	// Add Post Thumbnails
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 125, 115, true );
	add_image_size( 'featured-image', 851, 147, true );
	
	
	
	if ( function_exists('register_sidebar')){ 
		register_sidebar(array( //frontpage widgets
			'name' => 'sidebar-front',
			'description' => 'Larger widget area for side of front page',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
		register_sidebar(array(
			'name' => 'sidebar-bottom1',
			'description' => 'Bottom 1 (left)',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
		register_sidebar(array(
			'name' => 'sidebar-bottom2',
			'description' => 'Bottom 2 (center)',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
		register_sidebar(array(
			'name' => 'sidebar-bottom3',
			'description' => 'Bottom 3 (Right)',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
		register_sidebar(array( //everywhere widgets
			'name' => 'sidebar',
			'description' => 'sidebar for everywhere else',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
		register_sidebar(array(
			'name' => 'sidebar-archive',
			'description' => 'sidebar for news',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
	}

?>