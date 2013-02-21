<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-front') ): ?>
<?php endif; ?>
<h3>Upcoming Events</h3>
<?php echo do_shortcode(" [eventlist limit=3] " ); ?>