<?php
/**
 * Template Name: Basic Page
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