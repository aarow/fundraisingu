<?php
/**
 * Template Name: Home Page
 */
 
get_header(); ?>

<div id="main-home" class="main clearfix">
	<div class="wrapper">
		<?php get_template_part( 'loop', 'page' ); ?>
	</div>
</div>

<?php get_footer(); ?>