<?php
/**
 * Template Name: Products Page
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
						
						<ul class="product_list">
							<?php
								$args = array( 'post_type' => 'product', 'order'=> 'ASC', 'orderby' => 'sort_index', );
								$postslist = get_posts( $args );
								foreach ($postslist as $post) :  setup_postdata($post); 
							?> 
								<li>
									<div class="product_list_item_header">
										<a href="<?php print get_permalink(); ?>">
											<?php print_custom_field('product_name'); ?>
										</a>
									</div>
									
									<div class="product_list_item_body">
										<div class="product_list_item_images">
											<ul>
											<?php 
												$img_array = get_custom_field('product_image:to_array', 'to_image_tag');
												foreach($img_array as $img) {
													print '<li>' . $img . '</li>';
												}
											?>
											</ul>
										</div>
										<div class="product_list_item_desc">
											<?php print_custom_field('product_description'); ?>
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

<?php get_footer(); ?>