<?php get_header(); ?>	
<div id="featured"><?php echo the_post_thumbnail( 'featured-image'); ?></div>

<div class='row'>
	<div class='span8'>
	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
			<h1><?php single_cat_title(); ?> Archive</h1>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
			<h1><?php single_tag_title(); ?> Archive</h1>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h1><?php the_time('F jS, Y'); ?> Archive</h1>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h1><?php the_time('F Y'); ?> Archive</h1>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h1><?php the_time('Y'); ?> Archive</h1>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
			<h1>Author Archive</h1>
		<?php /* If this is an author archive */ } elseif (is_single()) { ?>
			<h1><?php the_title(); ?></h1>
		<?php /* If this is a paged archive */ } else { ?>
			<h1>News for 13.5% Baltimore Wine Bar</h1>
	<?php } ?>
		
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<p>
				<? ##date printing here ?>
				</p>
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?> </p>
			</div>
		<?php endwhile; ?>
			<?php next_posts_link('&laquo; Older Entries') ?> <?php previous_posts_link('Newer Entries &raquo;') ?>
		<?php else : ?>
			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
	<div class='span4'>
		<?php get_sidebar('archive'); ?>
	</div>
</div>

<?php get_footer(); ?>