<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header>
			<?php if ( !(is_front_page()) ) { ?>
				<h2 id="articleHeader"><span><?php the_title(); ?></span></h2>
			<?php } ?>
		</header>				
		<div class="the_content grid_9">
			<?php the_content(); ?>
		</div>			
	</article>
	
<?php endwhile; ?>