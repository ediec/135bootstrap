<?php get_header(); ?>

<div class="row">
	<div class="span12">
		


		<!--  Carousel - consult the Twitter Bootstrap docs at
		      http://twitter.github.com/bootstrap/javascript.html#carousel -->
		<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
		  <div class="carousel-inner">
		    <div class="item active"><!-- class of active since it's the first item -->
		      <img src="<?php bloginfo('template_directory'); ?>/images/feature-main.jpg" alt="" />
		    </div>
		    <div class="item">
		      <img src="http://placehold.it/1240x453" alt="" />
		    </div>
		    <div class="item">
		      <img src="http://placehold.it/1240x453" alt="" />
		    </div>
		  </div><!-- /.carousel-inner -->
		  <!--  Next and Previous controls below
		        href values must reference the id for this carousel -->
		    
		</div><!-- /.carousel -->

	</div>
</div>

<!-- Hero Unit for front Page -->
<div class="row">
	<div class='span8'>
		<div class="hero-unit">
			<?php if (have_posts() ) : while ( have_posts() ) : the_post (); ?>
				<? the_content(); ?>

			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<div class="span4">
		<div class='specials'>
			<?php get_sidebar('front'); ?>
		</div>
	</div>
</div>


<hr />
<!-- Bottom widgets for front page -->
<div class="row">
	<div class="span4">
		<?php get_sidebar('bottom1'); ?>
	</div>
	<div class="span4">
		<?php get_sidebar('bottom2'); ?>
	</div>
	<div class="span4">
		<?php get_sidebar('bottom3'); ?>
	</div>
</div>

<?php get_footer(); ?>