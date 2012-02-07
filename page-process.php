<?php
/**
 * Template Name: Process Page
 */
 
get_header(); ?>

<div id="main" class="main clearfix">
	<div class="wrapper container_12">
		<div class="">
			<?php get_template_part( 'loop', 'page' ); ?>
		</div>
		
		<?php get_template_part( 'sidebar', 'events' ); ?>

	</div>
</div>

<?php get_footer(); ?>


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.collapse.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>

<script>
	$(function() {
	    $(".the_content").collapse({
	    	show: function() {
	    		this.animate({opacity: 'toggle', height: 'toggle'}, 200);
	    	},
	    	hide: function() {
	    		this.animate({opacity: 'toggle', height: 'toggle'}, 200);
	    	}
	    });
	});
</script>