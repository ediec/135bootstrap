<?php
/*
Template Name: Left Side Menu
*/
?>

<?php get_header(); ?>

<div class="row">
		<?php if( has_post_thumbnail() ){
			the_post_thumbnail('featured-image'); 
		} else {
			$parental_id = $post->post_parent;
			get_the_post_thumbnail($post->post_parent, 'featured-image');
		} 
		?>
</div>

<div class="row">
	<div class="span4">
		<div class="specials">
			<div class='nav'>
				<?php
				  if($post->post_parent) {
				  	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
				  	$titlenamer = get_the_title($post->post_parent);
					$title_location = $post->post_parent;
				  }

				  else {
				  	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
				  	$titlenamer = get_the_title($post->ID);
					$title_location = get_the_ID();
				  }
				  if ($children) { ?>

				  <h2><a href="<?php echo get_permalink($title_location); ?>"> <?php echo $titlenamer; ?></a> </h2>
				  <ul>
				  <?php echo $children; ?>
				  </ul>

				<?php } ?>
			</div>
		</div>
	</div>

	<div class="span8">
		
		<?php if (have_posts() ) : while ( have_posts() ) : the_post (); ?>
			<!-- <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> -->
			<? the_content(); ?>
	
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, there are no posts.'); ?></p>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>