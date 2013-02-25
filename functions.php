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
			'primary' => __( 'Primary Navigation', '135bootstrap'),
		));
	}
	
	// Add Post Thumbnails
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 125, 115, true );
	add_image_size( 'featured-image', 851, 147, true );
	
	//From Astronaut Web wordpress boostrap dropdown menu
	if (!is_admin()) {
	    // jQuery (optional loading via Google CDN)
	    wp_deregister_script('jquery'); 
	    wp_register_script('jquery', ('http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'), false);   
	    wp_enqueue_script('jquery');
	    // Bootstrap JS
	    wp_register_script('bootstrap', '/wp-content/themes/yourtheme/js/bootstrap-min.js', null, null, false);
	    wp_enqueue_script('bootstrap');
	    // Bootstrap CSS
	    wp_register_style( 'bootstrap', '/wp-content/themes/yourtheme/css/bootstrap.css', null, null, null);
	    wp_enqueue_style('bootstrap');
	}
	
	function astro_add_dropdown_class($classes, $item) {
	    global $wpdb;
	    $has_children = $wpdb->get_var("
	            SELECT COUNT(meta_id) 
	            FROM wp_postmeta 
	            WHERE meta_key='_menu_item_menu_item_parent'
	            AND meta_value='".$item->ID."'
	        ");
	    // add the class dropdown to the current list
	    if ($has_children > 0) array_push($classes,'dropdown'); 
	    return $classes;
	}

	add_filter( 'nav_menu_css_class', 'astro_add_dropdown_class', 10, 2);
	
	//End astronaut
	
	
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