<?php
/**
 * Template Name: Home Page
 */
 
get_header(); ?>

<div id="main">
	<div class="wrapper container_12">
		<div class="grid_12">
			<?php get_template_part( 'loop', 'page' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>