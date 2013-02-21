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
	<?php wp_nav_menu(array(
		'container' => 'div',
		'container_class' =>'nav-collapse collapse',
		'theme_location' => 'primary',
		'menu_class' => 'nav',
		'walker' => new Bootstrap_Walker()
	));
	?>


    <div class="container">