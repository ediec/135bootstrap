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

    <div class="navbar navbar-inverse navbar-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
		
		
          <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>

			<!-- Soon to be The modal drop down menu >
			<button href="#findUsModal" role="button" class="btn btn-navbar" data-toggle="modal" data-target="#findUsModal">Find Us &raquo;</button> 
			<div id="findUsModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="findUsModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id='findUsModalLabel'>Find Us!</h3>
				</div>
				<div class="modal-body">
					<p>one fine body</p>
				</div>
				<div class="modal-footer">
					<button class='btn' data-dismiss="modal" aria hidden="true">Close</button>
				</div>
			</div>
			<-->

          <div class="nav-collapse collapse" >
            <ul class="nav">
              <?php wp_list_pages(array('title_li' => '', 'exclude'=>8, 'depth'=>1 )); ?>
            </ul>
			
			
			
          </div><!-- /.nav-collapse -->
        </div>
      </div>
    </div>


    <div class="container">