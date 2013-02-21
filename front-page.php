<?php get_header(); ?>


<!-- Hero Unit for front Page -->
<div class="row">
	<div class='span8'>
		<div class='featured'><?php the_post_thumbnail('featured-image'); ?></div>
		<?php //wp_cycle(); //for front page image, currently not scaling for bootstrap?>
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