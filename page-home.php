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
					<h2>
						<img src="<?php echo get_bloginfo('template_directory'); ?>/img/star.png" alt="" />
						<?php the_title(); ?>
						<img src="<?php echo get_bloginfo('template_directory'); ?>/img/star.png" alt="" />
					</h2>
					<h3>
						<?php echo get_bloginfo( 'description', 'display' ); ?>
					</h3>
				</header>
				<span class="clear"></span>
				<div class="the_content">
					<?php the_content(); ?>
				</div>			
				
				
				<div class="slide-box-home">
					<div class="slide-box-home-container">
						<?php
							$args = array( 	'post_type' => 'slide', 
											'order'=> 'ASC', 
											'orderby' => 'sort_index', 
											'numberposts' => 2 );
							$postslist = get_posts( $args );
							foreach ($postslist as $post) :  setup_postdata($post); 
						?> 
						<a href="<?php print_custom_field('slide_link:to_link_href','http://yoursite.com/default/page/');?>">
							<img src="<?php print_custom_field('slide_image:to_image_src'); ?>" />
						</a>
						<?php endforeach; ?>
					</div>
				</div>				
			</article>
		<?php endwhile; ?>
	</div>
</div>
<span class="clear"></span>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.lite.js"></script>

<script type="text/javascript">
	$('.slide-box-home-container').cycle();
</script>


<?php get_footer(); ?>