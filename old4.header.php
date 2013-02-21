<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta info -->
	<meta charset="utf-8">
	<meta name="description" content="<?php bloginfo('description'); ?>" >
	<meta name="author" content="<?php bloginfo('name'); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
	
	
    <title>
		<?php wp_title('|',1,'right'); 
			bloginfo('name'); 
			$site_description = get_bloginfo('description', 'display');
			if ($site_description && (is_home() || is_front_page() ) )
				echo " | $site_description";
				
		?>
	</title>
	
	<!-- Stylesheet and Pingback -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" >
	<link href="<?php bloginfo('pingback_url' ); ?>" rel="pingback" >
	

    <!-- Stupid IE -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<!-- turn on javascript -->
	<?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>
  </head>

	
  <body>
	
	<div class="header">
		<h1 class="logo"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
	</div>
	
	<!--  Nav containers -->
	<nav class="navbar navbar-top">
	    <div class="navbar-inner">
	        <div class="container-fluid">
	            <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </a>
	            <div class="nav-collapse">
	                <?php 
	                wp_nav_menu(array(
	                    'menu' => 'primary',
	                    'menu_class' => 'nav'
	                ));
	                ?>
	                <ul class="nav">
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
	                        <ul class="dropdown-menu">
	                        <?php 
	                        $args = array(
	                            'exclude'   =>'4',
	                            'orderby'   =>'name',
	                            'order'     => 'ASC'
	                        );
	                        foreach(get_categories($args) as $category): ?>
	                            <li><a href="<?php echo get_category_link($category->term_id); ?>" title="Category: <?php echo $category->name; ?>"><?php echo $category->name; ?></a></li>
	                        <?php endforeach; ?>
	                        </ul>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</nav>


    <div class="container">