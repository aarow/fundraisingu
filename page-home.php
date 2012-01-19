<?php
/**
 * Template Name: Home Page
 */
 
get_header(); ?>

<div id="main-home" class="main clearfix">
	<div class="wrapper">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header>
					<?php if ( !(is_front_page()) ) { ?>
						<h2><?php the_title(); ?></h2>
					<?php } ?>
				</header>				
				<div class="the_content grid_9">
					<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
					
					<?php the_content(); ?>
				</div>			
				<footer>
					<?php edit_post_link( __( 'Edit' ), '<p>', '</p>' ); ?>
				</footer>
			</article>
			
		<?php endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>