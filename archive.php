<?php get_header(); ?>


<div class="row">
	<div class="span8">		
		<?php if (have_posts() ) : while ( have_posts() ) : the_post (); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
	
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, there are no posts.'); ?></p>
		<?php endif; ?>
	</div>
	
	<div class="span4">
		<?php get_sidebar('archives'); ?>
	</div>
</div>

<?php get_footer(); ?>