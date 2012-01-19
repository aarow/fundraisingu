<?php
/**
 * Template Name: Testimonials Page
 */
 
get_header(); ?>

<div id="main" class="main clearfix">
	<div class="wrapper container_12">
		<div class="">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<?php if ( !(is_front_page()) ) { ?>
							<h2><?php the_title(); ?></h2>
						<?php } ?>
					</header>				
					<div class="the_content grid_9">
						<?php the_content(); ?>
						
						<ul class="testimonials">
							<?php
								$args = array( 	'post_type' => 'testimonial', 
												'order'=> 'ASC', 
												'orderby' => 'sort_index', 
												'numberposts' => -1 );
								$postslist = get_posts( $args );
								foreach ($postslist as $post) :  setup_postdata($post); 
							?> 
							<li>
								<div class="testimonial_list_item_header">
									<?php
									$postID = get_the_ID();
									if($vimeoID = get_custom_field('vimeo_id')) {
										$headerLink = '<a class="testimonialVideo" href="http://player.vimeo.com/video/' . $vimeoID . '">';
									} else {
										$headerLink = '<a class="testimonialLetter" href="#testimonial_letter_' . $postID . '">';
									} 
										echo $headerLink;
										print_custom_field('testimonial_title');
										echo '</a>';
									?>							
								</div>
								<div style="display:none;" class="testimonial_list_item_body" id="testimonial_letter_<?php echo $postID; ?>">
									<div class="testimonial_list_item_image">
										<?php print_custom_field('testimonial_image'); ?>
									</div>
									<div class="testimonial_list_item_letter">
										<?php print_custom_field('testimonialletter'); ?>
									</div>
									<div class="testimonial_list_item_signature">
										<?php print_custom_field('testimonialsignature'); ?>
									</div>
								</div>
							</li>
						<?php endforeach; ?>
						</ul>
					</div>			
					<footer>
						<?php edit_post_link( __( 'Edit' ), '<p>', '</p>' ); ?>
					</footer>
				</article>
				
			<?php endwhile; ?>
				
		<?php get_template_part( 'sidebar', 'events' ); ?>
		</div>
	</div>
</div>

<script type="text/javascript" charset="utf-8">
		$('.testimonialVideo').fancybox({ 	
			'type' 			: 'iframe',
			'padding'		: 0,
			'height'		: 336,
			'width'			: 600
		});
		$('.testimonialLetter').fancybox({
			'type' 			: 'inline'
		});
</script>



<?php get_footer(); ?>