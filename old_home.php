<?php get_header(); ?>

<div class="row">
	<div class="span9">
		<h1>Home.php</h1>
		<h1>News from the Bar</h1>
		
		<?php if (have_posts() ) : while ( have_posts() ) : the_post (); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
	
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, there are no posts.'); ?></p>
		<?php endif; ?>
	</div>
	
	<div class="span3">
		<h3>Archives</h3>
		<?php get_sidebar('sidebar'); ?>
	</div>
</div>

<?php get_footer(); ?>