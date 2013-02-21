<?php get_header(); ?>

<div class="row"><?php echo the_post_thumbnail('featured-image'); ?></div>
<div class="row">
	<div class="span8">
		<?php if (have_posts() ) : while ( have_posts() ) : the_post (); ?>
		<? the_content(); ?>
	
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>
	</div>
	
	<div class="span4">
		<?php if(is_page(25)) { ?>
			<h2>Directions</h2>
			<p><iframe width="span3" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=13.5%25+Wine+Bar,+West+36th+Street,+Baltimore,+MD&amp;aq=0&amp;oq=13.5&amp;sll=39.330957,-76.634384&amp;sspn=0.011021,0.022745&amp;g=1117+W.+36th+St+Baltimore+MD&amp;ie=UTF8&amp;hq=13.5%25+Wine+Bar,+West+36th+Street,+Baltimore,+MD&amp;t=m&amp;ll=39.330946,-76.634383&amp;spn=0.017261,0.032015&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=13.5%25+Wine+Bar,+West+36th+Street,+Baltimore,+MD&amp;aq=0&amp;oq=13.5&amp;sll=39.330957,-76.634384&amp;sspn=0.011021,0.022745&amp;g=1117+W.+36th+St+Baltimore+MD&amp;ie=UTF8&amp;hq=13.5%25+Wine+Bar,+West+36th+Street,+Baltimore,+MD&amp;t=m&amp;ll=39.330946,-76.634383&amp;spn=0.017261,0.032015" style="color:#0000FF;text-align:left">View Larger Map</a></small></p>
			<?php }else{
			 get_sidebar();	
			}
		?>
	</div>
</div>

<?php get_footer(); ?>